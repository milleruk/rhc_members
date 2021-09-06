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
            <h3 class="text-center">Reset Password for {{ config('app.name') }}</h3>

            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group form-floating-label">

                        <input id="email" type="text" class="form-control input-lg @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label for="email" class="placeholder">{{ __('E-Mail Address') }}</label>


                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        </div>
                  

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    </div>

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
