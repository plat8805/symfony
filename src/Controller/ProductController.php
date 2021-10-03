<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Category;
use App\Entity\Brand;
use App\Entity\Product;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    #[Route('/create-product', name: 'create_product')]
    public function createBrand(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $product = new Product();
        $product->setName('Dogs');
        $product->setDescription('Bla bla bla');
        $product->setPrice('22.33');
        $product->setStockQuantity('100');

        $brand = new Brand();
        $brand->setName('Rats House');
        $brand->setDescription('Bla bla bla');

        $category = new Category();
        $category->setName('Rats');
        $category->setDescription('Bla bla bla');

        $product->setCategory($category);
        $product->setBrand($brand);

        $entityManager->persist($brand);
        $entityManager->persist($category);
        $entityManager->persist($product);

        $entityManager->flush();

        return new Response('New $product created successful '.$product->getId());
    }

    /**
     * @Route("/product/{id}", name="product_show")
     */
    public function show(int $id): Response
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->findOneByIdJoinedToCategoryAndBrand($id);

        dump($product->getCategory()->getName());
        dump($product->getBrand()->getName());
        dump($product);

        if (!$product){
            throw $this->createNotFoundException("No product found for id = ".$id);
        }

        //return new Response('Product has name <b>'.$product->getName().'</b>');
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    #[Route("/show-product/{id}", name:"show-product")]
    public function showProduct(int $id): Response {
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findOneByIdJoinedToCategoryAndBrand($id);
        $category = $product->getCategory();
        $brand = $product->getBrand();
        dump($product);
        dump($category);
        dump($brand);
        return new Response('Check out this great product: '.$product->getName().' Category: '.$category->getName().' Brand name:'.$brand->getName());
    }

}
