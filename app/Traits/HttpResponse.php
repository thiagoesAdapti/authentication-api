<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\MessageBag;

trait HttpResponse
{
    public function success(string $message, int $status, array|Model|JsonResource $data = []): JsonResponse
    {
        return Response::json([
            'message' => $message,
            'status' => $status,
            'data' => $data
        ], $status, [], JSON_UNESCAPED_SLASHES);
    }

    public function error(string $message, int $status, array|MessageBag $errors = [], array $data = []): JsonResponse
    {
        return Response::json([
            'message' => $message,
            'status' => $status,
            'errors' => $errors,
            'data' => $data
        ], $status, [], JSON_UNESCAPED_SLASHES);
    }
}