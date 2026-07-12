<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Dedoc\Scramble\Attributes\Group;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

#[Group('Auth')]
class ProfileController extends Controller
{
    /**
     * Perfil do usuário.
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
