<?php

namespace App\View\Components\auth;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;

class background extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $words = ['"Bir programcı, sadece kod yazan biri değil; sorunlarına yaratıcı çözümler bulan bir düşünürdür." - John Johnson', "Bir programlama dili, gerçek dünyayı yansıtma yeteneğidir. - Alan J. Perlis", "Bilgisayar programlaması, bugünün sanat formudur. - Donald Knuth", "Bir yazılımın kalitesi, yazılımın son kullanıcısına sunduğu deneyimle ölçülür. - Robert C. Martin", "Kodlama, yaratıcılığı ve matematiksel düşünme becerilerini bir araya getiren bir sanattır. - Lazarus Long", "Bir programcı için en büyük zorluk, yazdığı kodun başkaları tarafından okunacak olmasıdır. - Martin Fowler", "Yazılım geliştirme, birinci sınıf bir zeka gerektirir. - Bill Gates", "Bir yazılımın mükemmel olduğu zaman, insanlar onun varlığını fark etmezler. Ancak kusurları olduğu zaman, insanlar onun varlığından nefret ederler. - John Henry", "Bir yazılımın iyi olması için, sadece iyi bir kod yazmak yeterli değildir. Aynı zamanda, iyi bir tasarım, iyi bir kullanıcı arayüzü ve iyi bir performans da gereklidir. - Larry Page", "Yazılım, insanların hayatını kolaylaştırmak için tasarlanmıştır. - Steve Jobs", "Yazılım geliştirmek, mükemmel bir yemek pişirmeye benzer. Doğru malzemeleri, doğru miktarda kullanmalısınız ve her şeyi doğru şekilde hazırlamalısınız. - Nathan Myhrvold"];
        $wordCount = count($words) - 1;
        $word = $words[rand(0, $wordCount)];
        $files=Storage::allFiles("public/auth");
        $file=str_replace("public/auth","storage/auth",$files[rand(0,count($files)-1)]);
        return view('components.auth.background', ["word" => $word,"file"=>$file]);
    }
}
