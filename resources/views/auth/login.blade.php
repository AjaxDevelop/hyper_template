@extends('layouts.app')

@section('content')
    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <!-- Logo -->
                    <div class="auth-brand text-center text-lg-start">
                        <a href="index.html" class="logo-dark">
                            <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="18"></span>
                        </a>
                        <a href="index.html" class="logo-light">
                            <span><img src="{{ asset('assets/images/logo.png') }}" alt="" height="18"></span>
                        </a>
                    </div>

                    <!-- title-->
                    <h4 class="mt-0">Login</h4>
                    <p class="text-muted mb-4">Digite seu endereço de e-mail e senha para acessar a conta.</p>

                    <!-- form -->
                    <form role="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Endereço de E-mail</label>
                            <input name="email" class="form-control{{ $errors->has('email') || $errors->has('password') ? ' is-invalid' : '' }}" type="email" id="emailaddress" required="" placeholder="Digite seu e-mail">
                        </div>
                        <div class="mb-3">
                            <a href="pages-recoverpw-2.html" class="text-muted float-end"><small>Esqueceu sua senha?</small></a>
                            <label for="password" class="form-label">Senha</label>
                            <input name="password" class="form-control{{ $errors->has('password') || $errors->has('email') ? ' is-invalid' : '' }}" type="password" required="" id="password" placeholder="Digie dua senha">
                        </div>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <div class="mb-3">
                        </div>
                        <div class="d-grid mb-0 text-center">
                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i> Acessar </button>
                        </div>
                    </form>
                    <!-- end form-->

                    <!-- Footer-->
                    <footer class="footer footer-alt">
                        <p class="text-muted">Não tem uma conta? <a href="pages-register-2.html" class="text-muted ms-1"><b>Inscrever-se</b></a></p>
                    </footer>

                </div> <!-- end .card-body -->
            </div> <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3">Sabe porque uso este CRM?</h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i> É um sistema elegante. Eu amo muito isso! . <i class="mdi mdi-format-quote-close"></i>
                </p>
                <p>
                    - Por WebDec CRM
                </p>
            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>
    <!-- end auth-fluid-->

    <!-- bundle -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

@endsection
