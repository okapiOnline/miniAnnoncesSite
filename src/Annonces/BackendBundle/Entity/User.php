<?php
/**
 * Created by PhpStorm.
 * User: becom
 * Date: 11/03/2017
 * Time: 11:42
 */

namespace Annonces\BackendBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @UniqueEntity(fields="email", message="Email déjà pris")
 * @UniqueEntity(fields="username", message="Nom d'utilisateur déjà pris")
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="Annonces\BackendBundle\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * @ORM\Column(type="string", length=255, unique=false)
     * @Assert\NotBlank()
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $username;

    /**
     * @ORM\Column(type="array", length=50)
     */
    private $roles = array();

    /**
     * The below length depends on the "algorithm" you use for encoding
     * the password, but this works well with sha25.
     *
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @Assert\NotBlank(message="Le mot de passe ne peut pas etre vide")
     *  @Assert\Length(
     *      min = "4",
     *      max = "100",
     *      minMessage = "Password must be at least 5 characters long",
     *      maxMessage = "Password cannot be longer than than 12 characters")
     */
    private $plainPassword;



    private $salt;

    public function __construct() {
        // Chaque utilisateur va se voir attribuer une clé permettant
        // de saler son mot de passe. Cela n'est pas obligatoire,
        // on pourrait mettre $salt à null
        $this->salt = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
       // $this->posts     = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getRole() {
        return (string) implode($this->roles);
    }

    /**
     * @param mixed $roles
     */
    public function setRoles($roles = array())
    {
        $this->roles = $roles;
    }


    public function getRoles()
    {
        return [$this->getRole()];
    }


    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }

    public function getSalt() {
        return $this->salt;
    }

    public function getUsername() {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }



    public function eraseCredentials() {
        // Ici nous n'avons rien à effacer.
        // Cela aurait été le cas si nous avions un mot de passe en clair.
    }

    public function equals(UserInterface $user)
    {
        return $user->getUsername() == $this->getUsername();
    }


}