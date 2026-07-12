<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): JsonResponse
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        return $this->success('Perfil consultado com sucesso.', Response::HTTP_OK, [
            'user' => UserResource::make($user)
        ]);
    }
}
