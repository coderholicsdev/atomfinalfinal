<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/css/signin.css') }}">
    <title></title>


    <title></title>
</head>

<body>

    {{-- @include('modal notification.notification') --}}

    <div class="from-sec">
        <div class="maincontainer" id="maincontainer">
            <div class="illu">
                <img src="{{ asset('assets/img/signupillu.svg') }}" alt="" />
            </div>

            <div class="basic-form form-container sign-up-container">
                <form method="post" action="{{ route('login') }}">
                    @csrf

                    <div class="social-container">
                        <img src="{{ asset('assets/img/AtomLoansLogo.png') }}" alt="" />
                        <h1 class="heading">Welcome Back</h1>
                    </div>

                    <div class="form-group">
                        <input type="text" name="email" class="form-control input-rounded @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" placeholder="Email" autocomplete="email" autofocus required />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red !important">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control input-rounded @error('password') is-invalid @enderror" 
                            placeholder="Password" autocomplete="current-password" required />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red !important">{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="btnlinks">
                        <button type="submit" class="btn btn-primary btnmt">login</button>
                        <a class="fgpass" href="">Forgot your password?</a>
                        <a class="noacc" href="{{route('register')}}">Don't have an account? Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>