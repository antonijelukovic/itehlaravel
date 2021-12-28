<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class AuthenticationController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('reg_token_')->plainTextToken;

        return response()->json([
            'poruka' => 'Uspešno ste se registrovali!',
            'user' => $user,
            'reg_token' => $token
        ]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'poruka' => 'Neuspešan login, pokušajte ponovo',
                'greska' => $validator->errors()
            ]);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['poruka' => 'Pogrešan email ili password!']);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('login_token')->plainTextToken;

        return response()->json([
            'poruka' => 'Uspešno ste se ulogovali!',
            'user' => $user,
            'login_token' => $token
        ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json(['poruka' => 'Uspešno ste se izlogovali!']);
    }
}
