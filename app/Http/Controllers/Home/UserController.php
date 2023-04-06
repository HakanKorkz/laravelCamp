<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Home\User;

class UserController extends Controller
{
     public function index()
    {
//        toast('Feedback','success')->position('top')->timerProgressBar()->autoClose(2000);
        $users=User::all();
      return view("home.authors",["users"=>$users]);
    }
}
