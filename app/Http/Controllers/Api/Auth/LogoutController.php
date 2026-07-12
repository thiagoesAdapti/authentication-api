<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Dedoc\Scramble\Attributes\Group;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

#[Group('Auth')]
class LogoutController extends Controller
{
    /**
     * Logout do usuário.
     */
    public function __invoke(): JsonResponse
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        /** @var \Laravel\Sanctum\PersonalAccessToken $token */
        $token = $user->currentAccessToken();
        $token->delete();

        return $this->success('Logout realizado com sucesso.', Response::HTTP_OK);
    }
}
