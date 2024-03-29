@extends("auth.index")
@section("tittle")
    Giriş yap
@endsection

@section("headArea")
@endsection

@section("content")
    <div class="bg-smoke-700 w-1/3 p-2.5 flex max-md:flex-1 justify-center items-center text-center">
        <form action="{{ route("login") }}"
              class="flex flex-col items-start gap-2 bg-true-blue-600 rounded-lg p-2.5 w-5/6 shadow-[3px_3px_4px_10px_#edf2f7]"
              method="post">
            @csrf
            <p class="text-center w-full">
                Giriş bilgilerini aşağı da bulunan forma doldur
            </p>
            @if($errors->any())
                <p class="text-center w-full">
                    @foreach($errors->all() as $error)
                        {{ $error }}
                        <br>
                    @endforeach
                </p>
            @endif
            <label for="email">
                E-posta
            </label>
            <input
                class="w-full rounded-full border border-gray-200 outline-none p-2 focus:shadow-[0px_20px_20px_10px_#00000024]"
                id="email" name="email" type="email" value="" placeholder="E-posta"/>
            <label for="password">
                Şifreniz
            </label>
            <input
                class="w-full rounded-full border border-gray-200 outline-none p-2 focus:shadow-[0px_20px_20px_10px_#00000024]"
                id="password" name="password" type="password" value="" placeholder="Şifre"/>
            <div class=" flex gap-2 w-full mt-2 section-header border-t pt-2">
                <button type="submit"
                        class="bg-green-500 hover:bg-green-600 py-2 px-4 text-sm font-medium text-white border border-transparent rounded-lg focus:outline-none w-1/2">
                    Gir abi içeri
                </button>
                <a href="{{ route("register") }}"
                        class="bg-true-blue-500 hover:bg-true-blue-400 py-2 px-4 text-sm font-medium text-white border border-transparent rounded-lg focus:outline-none w-1/2">
                    Kayıt ol abim
                </a>
            </div>
        </form>
    </div>
<x-auth.background/>
@endsection
@section("footer")
@endsection
