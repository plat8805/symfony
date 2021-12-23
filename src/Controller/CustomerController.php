<?php

namespace App\Controller;

use App\Entity\Customer;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    #[Route('/customers', name: 'customers')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Customer::class);
        $customers = $repository->findAll();
        dump($customers);
        die();

        return $this->render('customer/index.html.twig', [
            'controller_name' => 'CustomerController',
        ]);
    }

    #[Route('/customer/show/{id}', name: 'show_customer')]
    public function show(Customer $customer): Response
    {
        return new Response('Customer e-mail '.$customer->getEmail());
    }
}
