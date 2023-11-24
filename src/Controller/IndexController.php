<?php

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController extends AbstractController
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->success();
    }
}