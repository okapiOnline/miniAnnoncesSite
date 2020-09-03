<?php
/**
 * Created by PhpStorm.
 * User: becom
 * Date: 17/03/2017
 * Time: 10:46
 */
namespace Annonces\BlogBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Enquiry {

    /**
     * @Assert\NotBlank()
     */
    protected $name;

    /**
     * @Assert\NotBlank()
     */
    protected $email;

    /**
     * @Assert\NotBlank()
     */
    protected $subject;

    /**
     * @Assert\NotBlank(message="Votre message est vide")
     *  @Assert\Length(
     *      min = "10",
     *      max = "1500",
     *      minMessage = "*votre message doit contenir au moins 10 caractères",
     *      maxMessage = "Le contenu de votre message ne doit pas depasser 1500 caractères")
     */
    protected $body;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }
} 