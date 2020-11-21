<?php

namespace App\Controller;

use App\Entity\Employee;

// Request and Response 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

// Allows us to render twig templates
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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
     * @Route("/new", name="employee_form", methods={"GET"})
     */
    // Display add new employee form
    public function getFormAction() {

        return $this->render('employees/form.html.twig');
    }

    /**
     * @Route("/new", name="new_employee", methods={"POST"})
     */
    // When form submitted update the database
    public function saveFormAction(Request $request) {

        // POST Data
        $first_name = $request->request->get('first_name');
        $last_name = $request->request->get('last_name');
        $dob = $request->request->get('dob');
        $email_address = $request->request->get('email_address');

        // $form = $this->createFormBuilder($employee)
        //     ->add('first_name', TextType::class, array('attr' => array('class' => 'form-control')))
        //     ->add('last_name', TextType::class, array('attr' => array('class' => 'form-control')))
        //     ->add('dob', TextType::class, array('attr' => array('class' => 'form-control')))
        //     ->add('email_address', TextType::class, array('attr' => array('class' => 'form-control')))
        //     ->add('submit', SubmitType::class, array('attr' => array('name' => 'submit')))

        $entityManager = $this->getDoctrine()->getManager();

        $employee = new Employee();
        $employee->setFirstName($first_name);
        $employee->setLastName($last_name);
        $employee->setDOB($dob);
        $employee->setEmailAddress($email_address);

        // Persist tells us that we want to eventually save the data
        $entityManager->persist($employee);

        $entityManager->flush();

        // return new Response('Saved article with id: ' . $employee->getId());
        return $this->redirectToRoute('employees_table');
    }

}