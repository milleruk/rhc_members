<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('img/icon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Open+Sans:300,400,600,700"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands"
                ],
                urls: ['{{ asset('
                    css / fonts.css ') }}'
                ]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });

    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/azzara.min.css') }}">
</head>

<body class="login">
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <h3 class="text-center">Register for {{ config('app.name') }}</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="login-form">
                    <div class="form-group form-floating-label">



                        <input id="name" type="text" class="form-control input-lg @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <label for="name" class="placeholder">{{ __('Name') }}</label>


                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>


                    <div class="form-group form-floating-label">



                        <input id="email" type="email"
                            class="form-control input-lg @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        <label for="email" class="placeholder">{{ __('Email Addres') }}</label>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group form-floating-label">


                        <input id="password" type="password"
                            class="form-control input-lg @error('password') is-invalid @enderror" name="password"
                            required autocomplete="new-password">

                        <label for="password" class="placeholder">{{ __('Password') }}</label>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group form-floating-label">


                        <input id="password-confirm" type="password" class="form-control input-lg"
                            name="password_confirmation" required autocomplete="new-password">
                        <label for="password-confirm" class="placeholder">{{ __('Password Confirm') }}</label>

                    </div>

                    <div class="form-action mb-3">
                        <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">
                            {{ __('Register') }}
                        </button>

                    </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/ready.js') }}"></script>
</body>

</html>
