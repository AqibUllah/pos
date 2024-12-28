@extends('layouts.auth')

@push('styles')
    <style>


        :root{
            --primary:#cc3232;
            --secondary:#e54e4e;
            --bg-light: #232222;
            --bg-dark:#161820;
        }

        /*.login-page {*/
        /*    background: var(--bg-light) !important;*/
        /*}*/

        .login-box,.login-box-body {
            background: var(--bg-dark) !important;
        }
        .card-header{
         color: #e3dfdf;
        }


        input[type="text"],input[type="number"],input[type="select"],.form-control{
            background: rgba(0,0,0,.3);
            border-radius: 8px;
            height: 40px !important;
            align-items: center;
            align-content: center;
            border-color: #3a3939;
        }
        .btn-sign-in{
            background-color: var(--primary);
            color: #e3dfdf;
        }

        .login-container {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
        .login-image {
            background-image: url("/img/pos.webp");
            background-size: cover;
            background-position: center;
            width: 50%;
            height: 100%;
            display: none;
        }
        .login-form-container {
            width: 50%;
            height: 100%;
            padding: 40px;
            justify-content: center;
            align-content: center;
            background-color: var(--bg-light);
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            margin: auto;
        }
        @media (min-width: 768px) {
            .login-image {
                display: block;
            }
            .login-form-container {
                width: 50%;
            }
        }
        @media (max-width: 767.98px) {
            .login-image {
                display: none;
            }
            .login-form-container {
                width: 100%;
                padding: 20px;
            }
        }
    </style>
@endpush

@section('login')

<div class="login-container">
    <!-- Left Image Side -->
    <div class="login-image"></div>

    <!-- Right Login Form Side -->
    <div class="login-form-container">
        <div class="login-card card card-outline card-primary">
            <div class="card-header text-center">
                <h1><b>POS</b> Login</h1>
            </div>
            <div class="card-body">
                <div class="login-box-body">
                    <div class="login-logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ url($setting->path_logo) }}" class="img-circle" alt="logo.png" width="100">
                        </a>
                    </div>

                    <form action="{{ route('login') }}" method="post" class="form-login">
                        @csrf
                        <div class="form-group has-feedback @error('email') has-error @enderror">
                            <input type="email" value="admin@gmail.com" name="email" class="form-control" placeholder="Email" required value="{{ old('email') }}" >
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            @error('email')
                            <span class="help-block">{{ $message }}</span>
                            @else
                                <span class="help-block with-errors"></span>
                                @enderror
                        </div>
                        <div class="form-group has-feedback @error('password') has-error @enderror">
                            <input type="password" value="123" name="password" class="form-control" placeholder="Password" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            @error('password')
                            <span class="help-block">{{ $message }}</span>
                            @else
                                <span class="help-block with-errors"></span>
                                @enderror
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-sign-in btn-block btn-flat">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
