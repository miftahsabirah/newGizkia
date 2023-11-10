<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>


    <div class="formbold-main-wrapper"
        style="background-image: url('img/bgRegisterLogin.png'); 
background-size: cover; background-repeat: no-repeat; background-position: bottom center;">
        <div class="formbold-form-wrapper">
            <b>
                <h1 class="title">Login</h1>
            </b>
            <form action="{{ route('authenticate') }}" method="post">
            @csrf
                <div class="formbold-input-wrapp formbold-mb-3">
                    <label for="username" class="formbold-form-label">Username</label>
                    <input type="text" class="formbold-form-input @error('username') is-invalid @enderror"
                        name="username" id="username" value="{{ old('username') }}" placeholder="Masukkan Username">
                    @if ($errors->has('username'))
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="formbold-mb-3">
                    <label for="password" class="formbold-form-label">Password</label>
                    <input type="password" class="formbold-form-input @error('password') is-invalid @enderror"
                        name="password" id="password" placeholder="Masukkan Password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="formbold-buatAkun">
                    Tidak memiliki akun?<a href="{{ route('register') }}">Buat akun</a>
                </div>

                <button class="formbold-btn">Submit</button>
                {{-- <div class="formbold-btn">
                  
                    <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
                </div> --}}
            </form>
        </div>
    </div>


</body>

</html>
