<?php

namespace App\Controller;

use App\Controller\Abstract\ApiAbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController extends ApiAbstractController
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->success();
    }
}