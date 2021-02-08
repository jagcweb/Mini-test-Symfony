<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Task;
use App\Entity\User;
use App\Form\TaskCreateType;
use App\Form\TaskEditType;
use Symfony\Component\Security\Core\Security;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class TaskController extends AbstractController

{

    public function __construct(Security $security){
        $this->security = $security;

    }

    public function getTasks(): Response
    {

        $user = $this->security->getUser();


        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $task_repo = $doctrine->getRepository(Task::class);
        $all_tasks = $task_repo->findAll();


        $user_tasks = $user->getTasks();

        return $this->render('task/tasks.html.twig', [
            'all_tasks' => $all_tasks,
            'user_tasks' => $user_tasks
        ]);
    }

    public function create(Request $request){

        $user = $this->security->getUser();
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $user_repo = $doctrine->getRepository(User::class);
        $users = $user_repo->findAll();


        # Creamos el objeto Task
        $task = new Task();

        # Cargamos el Formulario creado en TaskCreateType
        $form = $this->createForm(TaskCreateType::class, $task);

        # Obtenemos los valores que nos llegan por el request y los acoplamos al $em.
        $form->handleRequest($request);


        # Si el formulario se ha submiteado y además es válido.
        if($form->isSubmitted() && $form->isValid()){

            # Cargamos el entity manager para finalmente guardar los datos.
            $em = $this->getDoctrine()->getManager();

            # Obtenemos el usuario logueado.
            $user = $this->security->getUser();

            # Si el usuario es un admin cargaremos el id que nos llega por el formulario.
            # Sino lo es, cargamos el del usuario logueado.
            if($user->getRol() == 'admin'){

                //Guardamos el ID que nos llega del form
                $id = $request->request->get('user');

                #Buscamos el usuario que pertenece a ese ID
                $user_found = $user_repo->find($id);

                # Lo seteamos
                $task->setUser($user_found);
            }else{
                #Seteamos el usuario logged
                $task->setUser($user);
            }

            # Set datetimes
            $task->setCreatedAt(new \Datetime('now'));
            $task->setUpdatedAt(new \Datetime('now'));

            # Persistimos el objeto del usuario y lo almacenamos "temporalmente" por si queremos persistir
            # mas objetos y ya guardarlo todo de seguido.
            $em->persist($task);

            # Finalmente con el flush, guardamos el objeto en la base de datos.
            $em->flush();

            //Hacemos una session flash para la vista
            $session = new Session();

            $session->getFlashBag()->add('message', "Tarea Creada!");

            return $this->redirectToRoute('getTasks');
        }


        return $this->render('task/create.html.twig', [
            'form' => $form->createView(),
            'users' => $users
        ]);
    }


    public function edit(Request $request, Task $task){
        # Si la tarea no existe
        if(!$task){
            return $this->redirectToRoute('getTasks');
        }else{
            # Si la tarea existe, cargamos el usuario logueado.

            #Si no hay ningún usuario logueado
            # O el ID del usuario creador de la tarea no coincide con el logueado
            # O el usuario logueado no es un admin
            $user = $this->security->getUser();
            var_dump($task->getUser()->getId());
            var_dump($user->getId());
            if($task->getUser()->getId() != $user->getId() && $user->getRol() != 'admin'){
                return $this->redirectToRoute('getTasks');
            }else{

                # Cargamos doctrine y el EntityManager
                $doctrine = $this->getDoctrine();
                $em = $doctrine->getManager();

                # Cargamos el repositorio de los usuarios
                $user_repo = $doctrine->getRepository(User::class);

                # Buscamos todos los usuarios de la bbdd
                $users = $user_repo->findAll();

                #Cargamos el formulario edit
                $form = $this->createForm(TaskEditType::class, $task);
    
                #Cargamos los datos de la request
                $form->handleRequest($request); 
            
                #Si el formulario no ha sido submiteado o no es válido
                if($form->isSubmitted() && $form->isValid()){

                    if($user->getRol() == 'admin'){

                        if($request->request->get('user') != null){
                            //Guardamos el ID que nos llega del form
                            $id = $request->request->get('user');
            
                            #Buscamos el usuario que pertenece a ese ID
                            $user_found = $user_repo->find($id);
            
                            # Lo seteamos
                            $task->setUser($user_found);
                        }
                    }else{
                        #Seteamos el usuario logged
                        $task->setUser($user);
                    }

                    # Seteamos los datetimes
                    $task->setCreatedAt(new \Datetime('now'));
                    $task->setUpdatedAt(new \Datetime('now'));
    
                    # Creamos el entityManager
                    $em = $this->getDoctrine()->getManager();

                    #Persistimos el objeto de lass tareas
                    $em->persist($task);

                    #Editamos el objeto.
                    $em->flush();

                    $session = new Session();

                    $session->getFlashBag()->add('message', "Tarea editada!");
    
                    return $this->redirectToRoute('getTasks');
                }
            }
        }

        return $this->render('task/edit.html.twig', [
            'form' => $form->createView(),
            'users' => $users,
            'task' => $task
        ]);
    }

    public function delete(Request $request, Task $task){
         # Si la tarea no existe
        if(!$task){
            return $this->redirectToRoute('getTasks');
        }else{
            # Si la tarea existe, cargamos el usuario logueado.

            #Si no hay ningún usuario logueado
            # O el ID del usuario creador de la tarea no coincide con el logueado
            # O el usuario logueado no es un admin
            $user = $this->security->getUser();
            if($task->getUserId() != $user->getId() && $user->getRol() != 'admin'){
                return $this->redirectToRoute('getTasks');
            }else{
                #Cargamos el EM
                $em = $this->getDoctrine()->getManager();

                #Persistimos el borrado de la tarea
                $em->remove($task);

                # Aplicamos los cambios
                $em->flush();

                $session = new Session();

                $session->getFlashBag()->add('message', "Tarea Borrada!");

                return $this->redirectToRoute('getTasks');

            }

        }

    }

    
}
