<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MyClass1
{
    public function __construct()
    {
        echo "I'm construct!";
    }

    /**
     * @param null
     */
    public function hell(): Response
    {
        return new Response("<h1>Hello from controller 1!</h1>");
    }
}