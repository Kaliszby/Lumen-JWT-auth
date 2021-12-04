<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if (empty($username) or empty($password)) {
            return response()->json(['status' => 'error', 'message' => 'You must enter a username and password']);
        }

        if (strlen($username) > 20 || strlen($password) > 20) {
            return response()->json(['status' => 'error', 'message' => 'Password should not exceed 20 characters.']);
        }

        if (register::where('username', '=', $username)->exists()) {
            return response()->json(['status' => 'error', 'message' => 'Username already exists']);
        }

        try {
            $register = new register();
            $register->username = $request->username;
            $register->password = app('hash')->make($request->password);
            $register->role = $request->role;

            if ($register->save()) {
                return $this->login($request);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if (empty($username) or empty($password)) {
            return response()->json(['status' => 'error', 'message' => 'You must enter a username and password']);
        }

        $credentials = request(['username', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
