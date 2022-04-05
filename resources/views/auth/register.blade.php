<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/css/signup.css') }}">
    <title></title>
</head>

<body>
{{-- @include('modal notification.notification') --}}
<div class="from-sec">
    <div class="maincontainer" id="maincontainer">
        <div class="illu">
            <img src="{{ asset('assets/img/realsignupillu.svg') }}" alt="" />
        </div>

        <div class="basic-form form-container sign-up-container">
            <form method="post" action="{{route('register')}}">
                @csrf

                <div class="social-container">
                    
                    <img src="{{asset('assets/img/AtomLoansLogo.png')}}" alt="" />
                    <h1 class="heading">Create an account</h1>
                </div>
                <div class="form-group form-name">
                    <input style="width: 47%;" type="text" name="firstName" class="form-control input-rounded @error('firstName') is-invalid @enderror" placeholder="First Name" required value="{{ old('firstName') }}" />

                    <input style="width: 47%;" type="text" name="lastName" class="form-control input-rounded @error('lastName') is-invalid @enderror" placeholder="Last Name" required value="{{ old('lastName') }}" />
                </div>

                <div class="form-group form-name">
                        <input style="width: 47%;" type="date" name="dob" class="form-control input-rounded" placeholder="Birthday" required value="{{ old('dob') }}" onfocus="(this.type = 'date')" />

                        <select style="width: 47%;" class="form-control input-rounded select" id="sex" name="sex" value="{{ old('sex') }}" required>
                        <option value="none" selected disabled hidden>
                            <h6>Sex</h6>
                        </option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                </div>

                <div class="form-group">
                    <input id="phone" name="phone" type="tel" required value="{{ old('phone') }}" placeholder="Phone Number" />
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red !important">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control input-rounded" placeholder="Email" value="{{ old('email') }}" required />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red !important">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="form-group">
                    <input type="password" name="password" class="form-control input-rounded" placeholder="Password" value="{{ old('password') }}" required />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red !important">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="off" class="form-control input-rounded @error('password_confirmation') is-invalid @enderror" required placeholder="Enter password again" />
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red !important">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="btnlinks">

                    <button type="submit" class="btn btn-primary btnmt">Signup</button>

                 <a class="fgpass" href="{{url('/login')}}">Already have an account? Login</a>
                    
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>