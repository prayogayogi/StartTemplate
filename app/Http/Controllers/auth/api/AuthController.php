<?php

namespace App\Http\Controllers\auth\api;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\api\UserLoginRequest;
use App\Http\Requests\api\UserRegisterRequest;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api')->except(['register', 'login']);
    }

    /**
     * register
     *
     * @param  mixed $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(UserRegisterRequest $request): JsonResponse
    {
        $user = User::create([
            'name'      => $request->input('name'),
            'email'     => $request->input('email'),
            'password'  => bcrypt($request->input('password')),
        ]);

        $token = JWTAuth::fromUser($user);
        if ($user) {
            return response()->json([
                'success'   => true,
                'user'      => $user,
                'token'     => $token
            ], 201);
        } else {
            return response()->json([
                'success' => false,
            ], 409);
        }
    }

    /**
     * Login
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\ JsonResponse
     */
    public function login(UserLoginRequest $request): JsonResponse
    {
        $credentials = $request->only('email', 'password');
        $token = auth()->guard('api')->attempt($credentials);
        if (!$token) {
            return response()->json([
                'success' => false,
                'message' => 'Email or Password is incorrect'
            ], 401);
        } else {
            return response()->json([
                'success' => true,
                'user' => auth()->guard('api')->user(),
                'token' => $token
            ], 201);
        }
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request): JsonResponse
    {
        //remove token
        $removeToken = JWTAuth::invalidate(JWTAuth::getToken());

        if ($removeToken) {
            //return response JSON
            return response()->json([
                'success' => true,
                'message' => 'Logout Berhasil!',
            ]);
        }
    }
}
