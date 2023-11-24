<?php

namespace App\Controller\Abstract;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ApiAbstractController extends AbstractController
{
    /**
     * @return Response
     */
    public function success(): Response
    {
        return new Response(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * @param Exception $exception
     * @param string|null $message
     * @param int|null $code
     *
     * @return Response
     */
    public function error(Exception $exception, string $message = null, int $code = null): Response
    {
        return new Response(
            content: $message ?? $exception->getMessage(),
            status: $code ?? $exception->getCode()
        );
    }

    /**
     * @param $data
     * @param int $code
     *
     * @return JsonResponse
     */
    public function response($data, int $code = Response::HTTP_OK): JsonResponse
    {
        return new JsonResponse(
            data: json_encode($data),
            status: $code,
            headers: [
                'Content-Type' => 'application/json'
            ],
            json: true
        );
    }
}