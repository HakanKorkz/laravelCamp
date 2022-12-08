@extends("admin.app")
@section("admin")
    <div class="authentication">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <form class="card auth_form" method="post" action="{{route("register")}}">
                        @csrf
                        <div class="header">
                            <img class="logo" src="{{ asset("assets/admin/images") }}/logo.svg" alt="">
                            <h5>Kayıt ol</h5>
                            <span>Yeni bir hesap oluşturmak için aşağıda bulunan formu doldurunuz</span>
                        </div>
                        <div class="body">
                            <div class="input-group mb-3">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Kullanıcı Adınız"
                                       required="required" aria-label="">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                                </div>
                                {{-- {{ $errors->get("name") }}--}}
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" id="email" name="email" class="form-control"
                                       placeholder="E-posta giriniz" required aria-label="">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                                </div>
                                {{-- {{ $errors->get("email") }}--}}
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" id="password" name="password" class="form-control"
                                       placeholder="Şifreniz" required="required" aria-label="">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                                </div>
                                {{-- {{ $errors->get("password") }}--}}
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                       class="form-control" placeholder="Şifreniz tekrarı" required="required" aria-label="">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                                </div>
                                {{--  {{ $errors->get("password_confirmation") }}--}}
                            </div>
                            {{--                            <div class="checkbox">--}}
                            {{--                                <input id="remember_me" type="checkbox">--}}
                            {{--                                <label for="remember_me">I read and agree to the <a href="javascript:void(0);">terms of--}}
                            {{--                                        usage</a></label>--}}
                            {{--                            </div>--}}
                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Kayıt Ol
                            </button>
                            <div class="signin_with mt-3">
                                <a class="link" href="{{ route("login") }}">Kaydınız varsa giriş yapınız?</a>
                            </div>
                        </div>
                    </form>
                    <div class="copyright text-center">
                        &copy;
                        <script>document.write(new Date().getFullYear())</script>
                        ,
                        <span>Designed by <a href="https://thememakker.com/" target="_blank">ThemeMakker</a></span>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="card">
                        <img src="{{ asset("assets/admin/images") }}/signup.svg" alt="Sign Up"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
