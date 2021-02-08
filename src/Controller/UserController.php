<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\RegisterType; #Importamos el formulario para el registro.
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface; #Importamos el la configuración de encorders que pusimos en config/security para cifrar contraseñas.
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils; #importamos las herramientas de autentificación
class UserController extends AbstractController
{
    public function register(Request $request, UserPasswordEncoderInterface $encoder)
    {
        # Creamos una instancia del modelo.
        $user = new User();

        # Creamos el formulario con las propiedades que declaramos en la clase RegisterType
        $form = $this->createForm(RegisterType::class, $user);

        # Obtenemos los valores que nos llegan por el request y los acoplamos al $em.
        $form->handleRequest($request);


        # Si el formulario se ha submiteado y además es válido.
        if($form->isSubmitted() && $form->isValid()){

            # añadimos la configuración para el rol, created y updated ya que no están incluidos en el formulario.
            $user->setRol('user');
            $user->setCreatedAt(new \Datetime('now'));
            $user->setUpdatedAt(new \Datetime('now'));

            # Ciframos la contraseña con las propiedades de los encoders del archivo config/security. Como primer param pasamos el objeto, y 2do la contraseña a cifrar.
            $encoded = $encoder->encodePassword($user, $user->getPassword());

            # Le seteamos la contraseña ya cifrada.
            $user->setPassword($encoded);

            # Cargamos el entity manager para finalmente guardar los datos.
            $em = $this->getDoctrine()->getManager();

            # Persistimos el objeto del usuario y lo almacenamos "temporalmente" por si queremos persistir
            # mas objetos y ya guardarlo todo de seguido.
            $em->persist($user);

            # Finalmente con el flush, guardamos el objeto en la base de datos.
            $em->flush();
            return $this->redirectToRoute('login');
        }


        return $this->render('user/register.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function login(AuthenticationUtils $authenticationUtils){

        #Recogemos el error que nos muestre al autenticar en caso de haberlo
        $error = $authenticationUtils->getLastAuthenticationError(); 


        #En caso de que el error exista, recogemos el último usuario introducido para cargarlo en el formulario y que
        # solo sea necesario meter la contraseña.
        $lastUsername = $authenticationUtils->getLastUsername(); 


        return $this->render('user/login.html.twig', [
            'error' => $error,
            'lastUsername' => $lastUsername
        ]);
    }
}
