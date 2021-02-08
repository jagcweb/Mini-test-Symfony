<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert; # Cargamos el assert para validar formularios.


/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class User implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     * @Assert\NotBlank
     * @Assert\Type(type={"alpha"})
     */

    # El Nombre no puede estar en blanco y únicamente permitiremos letras.
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=50, nullable=false)
     * @Assert\NotBlank
     * @Assert\Type(type={"alpha"})
     */

    # El Apellido no puede estar en blanco y únicamente permitiremos letras.
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @Assert\NotBlank
     * @Assert\Email(message="El email introducido no es valido")
     */
    #El email no puede estar en blanco y será tipo email.
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     * @Assert\NotBlank
     */

    # La contraseña no puede estar en blanco
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="rol", type="string", length=5, nullable=false)
     */
    private $rol;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    # Relacion OneToMany con la tabla Task
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Task", mappedBy="user")
     */

    # Incluimos las tasks al modelo
    private $tasks;

    public function __construct(){
        $this->tasks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRol(): ?string
    {
        return $this->rol;
    }

    public function setRol(string $rol): self
    {
        $this->rol = $rol;

        return $this;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt($updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    
    # Hacemos un return de la libreria collection para devolver las task y así poder sacar cuales tareas pertenecen
    # A que usuario
    /**
     * @return Collection|Task[]
     */

     #Obtenemos las tareas.
    public function getTasks():Collection{
        return $this->tasks;
    }

    #getUsername será el metódo de identificación. Nosotros no tenemos usuario, usaremso el email.
    public function getUsername(){
        return $this->email;
    }

    #La contraseña no será desencriptada con Salts, así que retornamos null.
    public function getSalt(){
        return null;
    }

    # Obtenemos los roles de los usuarios para los accesos de control.
    public function getRoles(){
        return array('ROLE_USER');
    }

    # Borramos las credenciales del objeto que se hayan podido almacenar.
    public function eraseCredentials(){}


}
