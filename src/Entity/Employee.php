<?php

namespace App\Entity;

use App\Repository\EmployeeRepository;
use Doctrine\ORM\Mapping as ORM;

// When updating use:
// php bin/console doctrine:migrations:diff  
// php bin/console doctrine:migrations:migrate

/**
 * @ORM\Entity(repositoryClass=EmployeeRepository::class)
 */
class Employee
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $last_name;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $dob;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $email_address;

    // Getters and Setters - Access the private properties

    // $id
    public function getId(): ?int
    {
        return $this->id;
    }

    // $first_name
    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    // $last_name
    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    // $dob
    public function getDOB()
    {
        return $this->dob;
    }

    public function setDOB($dob)
    {
        $this->dob = $dob;
    }

    // $email_address
    public function getEmailAddress()
    {
        return $this->email_address;
    }

    public function setEmailAddress($email_address)
    {
        $this->email_address = $email_address;
    }

}