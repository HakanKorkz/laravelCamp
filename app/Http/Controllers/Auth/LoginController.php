<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthLoginRequest;
use App\Models\Home\User;
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

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
            $to="login";
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        } else {
            $to="login";
        }

        return redirect("$to");
    }

    public function store(AuthLoginRequest $request)
    {
        $email=$request->get("email");
        $password=$request->get("password");

        $user = User::where("email", "$email")->first();
        if ($user && Hash::check($password,$user->password)) {
//            $boolean=true;
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
//            $boolean=false;

        }

//        alert("$tittle","$message", "$type")
//            ->position('center')
//            ->timerProgressBar()
//            ->autoClose(2000);

        toast("$message", "$type")->position('top')->timerProgressBar()->autoClose(2000);

        return redirect($to);

      //  return response(["boolean"=>$boolean,"type"=>$type,"message"=>$message,"to"=>$to],200)->header('Content-Type','application/json');
    }


}
