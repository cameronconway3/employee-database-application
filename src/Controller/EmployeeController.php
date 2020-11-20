<?php

namespace App\Controller;

// Return a response to the browser
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

// Allows us to render twig templates
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EmployeeController extends AbstractController {
    /**
     * @Route("/")
     */
    // Display Form
    public function index() {
        // return new Response('<h1>Form</h1>');

        return $this->render('employees/employeeTable.html.twig');
    }

    /**
     * @Route("/employees", methods={"GET"})
     */
    // Get all employees
    // public function employees() {
    //     return $this->render('employees/form.html.twig');
    // }

}