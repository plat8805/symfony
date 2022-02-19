<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\CustomerRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api')]
class RegisterController extends AbstractController
{
    public function __construct(
        private CustomerRepository $CustomerRepository,
        private SerializerInterface $serializer
    )
    {}

    #[Route('/register', name: 'customer.register')]
    public function register(Request $request):JsonResponse
    {
        $jsonData = json_decode($request->getContent());
        $customer = $this->CustomerRepository->create($jsonData);

        return new JsonResponse([
            'user' => $this->serializer->serialize($customer, 'json')
        ], 201);
    }
}