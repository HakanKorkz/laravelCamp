<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRegisterRequest;

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
        if (!is_null($request->all())) {
            $errors = $request->all();
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $errors,
            ], 422);
        }

        // Eğer hata yoksa, kayıt işlemini yapacağım bu alan da


        return response()->json([
            'message' => 'Registration successful',
        ], 201);

    }

//    public function store(AuthRegisterRequest $request)
//    {
//        $errors = $request->validator->errors()->toArray();
//        if (count($errors) > 0) {
//            return response()->json([
//                'message' => 'The given data was invalid.',
//                'errors' => $errors,
//            ], 422);
//        }
//
//        // Eğer hata yoksa, kayıt işlemini yapacağım bu alan da
//
//
//        return response()->json([
//            'message' => 'Registration successful',
//        ], 201);
//
//
////        $validator = $request->all();
////        dd($validator);
////
////        $request->except("_token");
////        $email = $request->get("email");
////        $password = $request->get("password");
////        dd($email,$password);
////        $user = User::where("email", "$email")->first();
////        if ($user && Hash::check($password, $user->password)) {
////            $boolean = true;
////            Auth::login($user);
////            $to = "/";
////            $tittle = "Giriş başarılı";
////            $message = "Hoş Geldiniz: $user->name";
////            $type = "success";
////        } else {
////            $to = "login";
////            $tittle = "Giriş başarısız";
////            $message = "Girilen bilgiler hatalı gözüküyor";
////            $type = "error";
////            $boolean = false;
////
////        }
////        return response(["boolean" => $boolean, "type" => $type, "message" => $message, "to" => $to], 200)->header('Content-Type', 'application/json');
//    }
}
