<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {
    public function __construct() {
//        $this->middleware(['auth:api'])->except('login');
    }

    /**
     * Handle user login
     *
     * @param Request $request
     *
     * @return JsonResponse
     * @throws AuthenticationException
     */
    public function login(Request $request) {
        $cred = $request->validate([
                                       'email'    => 'required|string',
                                       'password' => 'required|string',
                                   ]);

        $user = User::query()->where('email', $cred['email'])->first();
        if (!$user || !Hash::check($cred['password'], $user->password)) {
            throw new AuthenticationException();
        }

        // Creating a token
        $tokenResult = $user->createToken('PersonalAccessTokens');
        $user->save();
        return response()->json([
                                    'access_token' => $tokenResult->accessToken,
                                    'expires_at'   => $tokenResult->token->expires_at,
                                ]);
    }

    /**
     * @param Request $request
     */
    public function logout(Request $request) {
        /**
         * @var User $user
         */
        $user = $request->user();
        $user->token()->revoke();

    }

    /**
     * @param  Request  $request
     * @return
     */
    public function me(Request $request)
    {

        /**
         * @var User $currentUser
         */

//        $currentUser->save();
        return response()->json([$request->user()]);
    }
}
