<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();
    //         $token = $this->generateToken($user);
    //         return response()->json(['token' => $token], 200);
    //     }

    //     throw ValidationException::withMessages([
    //         'email' => ['The provided credentials are incorrect.'],
    //     ]);
    // }

    public function login(Request $request)
{
    $data = $request->validate([
        'email' => 'required|email|max:191',
        'password' => 'required|string',
    ]);

    try {
        $user = User::where('email', $data['email'])->first();

        if (!$user) {
            // Create a new user if there is no existing user with the given email
            $user = User::create([
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);

            $token = $user->createToken('loginToken')->plainTextToken;

            $response = [
                'user' => $user,
                'token' => $token,
            ];

            return $this->success('Login Successful', $response, 201);
        }

        $token = $user->createToken('loginToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return $this->success('Login Successful', $response, 200);
    } catch (Exception $e) {
        return $this->error('Login Failed', $e->getMessage(), 500);
    }
}

    /**
     * Logout the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        try {
            Auth::logout();
            return redirect()->route('login')->with('success', 'You have been logged out successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to logout. Please try again.');
        }
    }
}
