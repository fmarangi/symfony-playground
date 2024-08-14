<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    //set the route, so [site URL]/hello will trigger this
    #[Route('/product/list', name: 'product_list')]
    public function hello(Request $request): Response
    {
        //create a new Response object
        $response = new Response();

        //set the return value
        $response->setContent($request->getUri());

        //make sure we send a 200 OK status
        $response->setStatusCode(Response::HTTP_OK);

        // set the response content type to plain text
        $response->headers->set('Content-Type', 'text/plain');

        // send the response with appropriate headers
        return $response;
    }
}
