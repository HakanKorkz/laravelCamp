<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;

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
    public function store(AuthRequest $request)
    {

        return view("auth.register");
    }
}
