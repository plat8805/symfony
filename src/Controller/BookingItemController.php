<?php

namespace App\Controller;

use App\Entity\BookingItem;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookingItemController extends AbstractController
{
    #[Route('/booking-items', name: 'booking_items')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(BookingItem::class);
        $booking_items = $repository->findAll();
        dump($booking_items);
        die();

        return $this->render('booking_item/index.html.twig', [
            'controller_name' => 'BookingItemController',
        ]);
    }


    #[Route('/booking-item/show/{id}', name: 'show_booking-item')]
    public function show(BookingItem $booking_items): Response
    {
        return new Response('Booking item: '
            .'<br> &nbsp;&nbsp;&nbsp;Product: '.$booking_items->getProduct()->getName()
            .'<br> &nbsp;&nbsp;&nbsp;Booking(Customer): '.$booking_items->getBooking()->getCustomer()->getEmail()
            .'<br> &nbsp;&nbsp;&nbsp;Quantity: '.$booking_items->getQuantity()
            .'<br> &nbsp;&nbsp;&nbsp;Unit price: '.$booking_items->getUnitPrice());
    }
}
