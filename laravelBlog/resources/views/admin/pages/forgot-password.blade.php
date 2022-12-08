@extends("admin.app")
@section("admin")
    <div class="authentication">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <form class="card auth_form" method="post" action="{{ route("password.email") }}">
                        @csrf
                        <div class="header">
                            <img class="logo" src="{{ asset("assets/admin/images") }}/logo.svg" alt="">
                            <h5>Parolanızı mı unuttunuz?</h5>
                            <span>Parolanızı sıfırlamak için aşağıya e-posta adresinizi girin.</span>
                        </div>
                        <div class="body">
                            <div class="input-group mb-3">
                                <input id="email" type="email" name="email" class="form-control" placeholder="E-posta Girin" autofocus aria-label="">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Gönder</button>
                            <div class="signin_with mt-3">
                                <a href="{{ route("login") }}" class="link">Giriş'e dönmek için tıklayınız</a>
                            </div>
                        </div>
                    </form>
                    <div class="copyright text-center">
                        ©
                        <script>document.write(new Date().getFullYear())</script>2022,
                        <span>Designed by <a href="https://thememakker.com/" target="_blank">ThemeMakker</a></span>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="card">
                        <img src="{{ asset("assets/admin/images") }}/signin.svg" alt="Forgot Password">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
