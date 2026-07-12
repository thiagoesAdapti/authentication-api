<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Resources\UserResource;
use Dedoc\Scramble\Attributes\Group;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

#[Group('Auth')]
class LoginController extends Controller
{
    /**
     * Login do usuário.
     */
    public function __invoke(LoginRequest $request): JsonResponse
    {
        $data = $request->validated();

        if (!Auth::attempt($data)) {
            return $this->error('Credenciais inválidas.', Response::HTTP_UNAUTHORIZED);
        }

        /** @var \App\Models\User $user */
        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;

        return $this->success('Login realizado com sucesso.', Response::HTTP_OK, [
            'user' => UserResource::make($user),
            'token' => $token
        ]);
    }
}
