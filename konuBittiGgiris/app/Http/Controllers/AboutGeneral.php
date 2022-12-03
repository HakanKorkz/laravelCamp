<?php

namespace App\Http\Controllers;


class AboutGeneral extends Controller
{
    public function about() {
        $options=["userName"=>"Hakan","userLastName"=>"Korkmaz","age"=>25];
        return view("about",$options);
    }

    public function ageAbout() {
        return view("age");
    }
}
