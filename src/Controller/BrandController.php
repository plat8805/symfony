<?php

namespace App\Controller;

use App\Entity\Brand;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class BrandController extends AbstractController
{
    #[Route('/brands', name: 'brands')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Brand::class);
        $brands = $repository->findAll();
        dump($brands);
        die();

        return $this->render('brand/index.html.twig', [
            'controller_name' => 'BrandController',
        ]);
    }

//    #[Route('/brand', name: 'brand')]
//    public function index(): Response
//    {
//        return $this->render('brand/index.html.twig', [
//            'controller_name' => 'BrandController',
//        ]);
//    }

    #[Route('/create-brand', name: 'create_brand')]
    public function create(ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();

        $brand = new Brand();
        $brand->setName('Some new brand');
        $brand->setDescription('Some new brand description');
        $em->persist($brand);
        $em->flush();

        return new Response('Brand created successully '.$brand->getName());
    }

//    #[Route('/create-brand', name: 'create_brand')]
//    public function create(): Response
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $brand = new Brand();
//        $brand->setName('Some brand');
//        $brand->setDescription('Some brand description');
//        $em->persist($brand);
//        $em->flush();
//
//        return new Response('Brand created successully '.$brand->getName());
//    }

    #[Route('/brand/edit/{id}', name: 'edit_brand')]
    public function update(ManagerRegistry $doctrine, int $id): Response
    {
        $em = $doctrine->getManager();

        $brand = $em->getRepository(Brand::class)->find($id);
        $brand->setName('Some updated brand');
        //$brand->setDescription('Some new brand description');
        //$em->persist($brand);
        $em->flush();

        return new Response('Brand updated successully '.$brand->getName());
    }

    #[Route('/brand/delete/{id}', name: 'delete_brand')]
    public function delete(ManagerRegistry $doctrine, Brand $brand): Response
    {
        $em = $doctrine->getManager();

        $em->remove($brand);
        $em->flush();

        return new Response('Brand removed');
    }

    #[Route('/brand/show/{id}', name: 'show_brand')]
    public function show(Brand $brand): Response
    {
        return new Response('Brand name '.$brand->getName());
    }

}
