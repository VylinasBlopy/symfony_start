<?php

namespace App\Controller\Abstract;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ApiAbstractController extends AbstractController
{
    public function success(): Response
    {
        return new Response(content: null, status: Response::HTTP_NO_CONTENT);
    }

    public function error(\Exception $exception, string $message = null, int $code = null): Response
    {
        return new Response(
            content: $message ?? $exception->getMessage(),
            status: $code ?? $exception->getCode()
        );
    }

    public function response(mixed $data, int $code = Response::HTTP_OK): JsonResponse
    {
        return new JsonResponse(
            data: json_encode($data),
            status: $code,
            headers: [
                'Content-Type' => 'application/json',
            ],
            json: true
        );
    }
}
