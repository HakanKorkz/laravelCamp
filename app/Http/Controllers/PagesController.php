<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view("home");
    }

    public function about()
    {
        return view("about");
    }

    public function student()
    {
        $students = ["Hakan Korkmaz", "Aysun Beril Karaman"];
        $class = ["1/A", "2/B"];

        //  return view("student",compact("students"));
        //  return view("student")->with("students",$students); with func iki değer alır ilk ifade anahtar/key değerini ifade eder ikinci kısım value/değer alanını ifade eder...
        return view("student",compact("students","class"));

    }
}
