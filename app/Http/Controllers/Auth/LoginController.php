<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()) {
           return redirect("/");
        }
     return view("auth.login");
    }

    public function store(AuthRequest $request)
    {
        $email=$request->get("email");
        $password=$request->get("password");

        $user = User::where("email", "$email")->first();

        if ($user && Hash::check($password,$user->password)) {
            Auth::login($user);
            $to="/";
//            $tittle="Giriş başarılı";
            $message="Hoş Geldiniz: $user->name";
            $type="success";
        } else {
            $to="login";
//            $tittle="Giriş başarısız";
            $message="Girilen bilgiler hatalı gözüküyor";
            $type="error";
        }

//        alert("$tittle","$message", "$type")
//            ->position('center')
//            ->timerProgressBar()
//            ->autoClose(2000);

        toast("$message", "$type")->position('top')->timerProgressBar()->autoClose(2000);


        return redirect("$to");
    }


}
