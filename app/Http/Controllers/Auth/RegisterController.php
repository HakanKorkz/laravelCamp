<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRegisterRequest;
use App\Models\Home\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()) {
            return redirect("/");
        }
        return view("auth.register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthRegisterRequest $request)
    {
        if (is_null($request->all())) {
            $errors = $request->all();
            return response()->json(['boolean'=>true,'message' => 'Kayıt Başarısız', 'errors' => $errors], 422);
        }
        $user = new User();
        $user->fill($request->only(['name', 'email', 'password']));
        $user->password = bcrypt($user->password);
        $user->save();
        return response()->json(['message' => 'Kayıt işlemi Başarılı',], 201);
    }
}
