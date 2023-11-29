<?php

namespace App\Controller;

use App\Controller\Abstract\ApiAbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends ApiAbstractController
{
    #[Route(path: '/ping', name: 'ping', methods: ['GET'])]
    public function index(): Response
    {
        return $this->success();
    }
}
