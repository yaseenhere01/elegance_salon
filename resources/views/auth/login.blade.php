
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
       <!-- Font Icon -->
       <link rel="stylesheet" href="forms/fonts/material-icon/css/material-design-iconic-font.min.css">

<!-- Main css -->
<link rel="stylesheet" href="forms/css/style.css">
  {{-- favicon --}}
  <link rel="shortcut icon" href="https://d2zdpiztbgorvt.cloudfront.net/region1/us/447550/logo/b63c9daacadf44af9108f512d55660-elegance-hair-logo-a1ca5f284e5a457bbdb4e0427fc429-booksy.jpeg" type="image/x-icon">


</head>

<body>
<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="forms/images/login2.png" alt="sign in image"></figure>
                        <a href="{{ route('register') }}" class="signup-image-link"><b>Create an account</b></a>
                    </div>

                    <div class="signin-form">
                        <h1 class="form-title"><b>Login</b></h1>
                        <x-validation-errors class="mb-4" style="color:red !important;"/>

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                            @csrf

                            <div class="form-group">
                                <label for="email"></label>
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autofocus autocomplete="username" placeholder=" Your Email" />
                            </div>

                            <div class="mt-4 form-group">
                                <label for="password"></label>
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="current-password" placeholder=" Password" />
                            </div>

                            <div class="block mt-4 form-group">
                                <input type="checkbox" name="remember" id="remember_me" class="agree-term" />
                                <label for="remember_me" class="label-agree-term"><span><span></span></span>{{ __('Remember me') }}</label>
                            </div>




                            <div class="flex items-center justify-between mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <div class="form-group form-button">
                                <x-button class="form-submit">
                                    {{ __('Log in') }}
                                </x-button>
                            </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </section>
    </div>
</x-guest-layout>


    <!-- JS -->
    <script src="forms/vendor/jquery/jquery.min.js"></script>
    <script src="forms/js/main.js"></script>
</body>
</html>

