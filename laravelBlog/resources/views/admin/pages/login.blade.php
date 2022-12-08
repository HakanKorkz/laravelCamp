@extends("admin.app")
@section("admin")
    <div class="authentication">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <form class="card auth_form" method="post" action="{{route("login")}}">
                        @csrf
                        <div class="header">
                            <img class="logo" src="assets/images/logo.svg" alt="">
                            <h5>Giriş yap</h5>
                        </div>
                        <div class="body">
                            <div class="input-group mb-3">
                                <input type="email" name="email" id="email" class="form-control" placeholder="E-posta"
                                       required autofocus aria-label="">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" id="password" name="password" class="form-control"
                                       placeholder="Şifreniz" required>
                                <div class="input-group-append">
                                    <span class="input-group-text"><a href="forgot-password.html" class="forgot"
                                                                      title="Forgot Password"><i
                                                class="zmdi zmdi-lock"></i></a></span>
                                </div>
                            </div>
                            <div class="checkbox">
                                <input id="remember_me" type="checkbox" name="remember">
                                <label for="remember_me">Beni Hatırla</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Giriş Yap
                            </button>
                            <div class="signin_with mt-3">
                                <a href="{{route("register")}}"><p class="mb-0">Kayıt ol</p></a>
                                <a href="{{route("password.request")}}"><p class="mb-0">Şifremi unuttum</p></a>
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
                        <img src="{{ asset("assets/admin/images") }}/signin.svg" alt="Sign In"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
