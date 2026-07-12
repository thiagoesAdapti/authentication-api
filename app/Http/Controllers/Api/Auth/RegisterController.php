<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegisterRequest $request): JsonResponse
    {
        $data = $request->validated();

        $user = User::create($data);
        $token = $user->createToken('auth_token')->plainTextToken;

        return $this->success('Usuário criado com sucesso.', Response::HTTP_CREATED, [
            'user' => UserResource::make($user),
            'token' => $token
        ]);
    }
}
