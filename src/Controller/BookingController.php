<?php

namespace App\Controller;

use App\Entity\Booking;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookingController extends AbstractController
{
    #[Route('/booking', name: 'booking')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Booking::class);
        $customers = $repository->findAll();
        dump($customers);
        die();

        return $this->render('booking/index.html.twig', [
            'controller_name' => 'BookingController',
        ]);
    }


    #[Route('/booking/show/{id}', name: 'show_booking')]
    public function show(Booking $booking): Response
    {
        return new Response('Booking: '
            .'<br> &nbsp;&nbsp;&nbsp;Status: '.$booking->getStatus()
            .'<br>'
            .'<br> &nbsp;&nbsp;&nbsp;Customer: '.$booking->getCustomer()->getEmail()
            .'<br> &nbsp;&nbsp;&nbsp;Total price: '.$booking->getTotalPrice()
            .'<br> &nbsp;&nbsp;&nbsp;Shipping method: '.$booking->getShippingMethod()
            .'<br> &nbsp;&nbsp;&nbsp;Shipping price: '.$booking->getShippingPrice()

        );
    }
}
