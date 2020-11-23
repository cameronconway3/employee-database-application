<?php

namespace App\Controller;

use App\Entity\Employee;
use App\Form\EmployeeFormType;
use Doctrine\ORM\EntityManagerInterface;

// Request and Response 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

// Allows us to render twig templates
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EmployeeController extends AbstractController {
    /**
     * @Route("/", name="employees_table", methods={"GET"})
     */
    // Display table of employees
    public function index() {

        $employees = $this->getDoctrine()->getRepository(Employee::class)->findAll();

        return $this->render('employees/employeeTable.html.twig', array('employees' => $employees));
    }

    /**
     * @Route("/new", name="new_employee")
     */
    // Building form correct way, dealing with get and post
    public function new(EntityManagerInterface $em, Request $request) {

        $form = $this->createForm(EmployeeFormType::class);
        
        // handleRequest() only handles data when it is a POST request
        // During a get request this is all ignored
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $employee = $form->getData();

            // Persist tells us that we want to eventually save the data, save it with flush
            $em->persist($employee);
            $em->flush();

            // Flash messages only live in the sesssion until they are read for the first time
            $this->addFlash('success', 'Employee added!');
            return $this->redirectToRoute('employees_table');
        }

        return $this->render('employees/form.html.twig', [
            'employeeForm' => $form->createView(),
        ]);
    }

}