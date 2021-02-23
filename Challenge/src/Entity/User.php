<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     * @Error\Length(min=3, max=30, minMessage="ton username '{{ value }}' est trop court", 
     * maxMessage="Ton username '{{ value }}' est trop long")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=30)
     * @Error\length(min="8", minMessage="ton mot de passe doit contenir au moins 8 caractere")
     */
    private $password;

    


}
