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
  

<div class="formbold-main-wrapper" style="background-image: url('img/bgRegisterLogin.png'); 
background-size: cover; background-repeat: no-repeat; background-position: bottom center;">
    <div class="formbold-form-wrapper">
        <b><h1 class="title">Login</h1></b>
        <form action="https://formbold.com/s/FORM_ID" method="POST">
            <div class="formbold-input-wrapp formbold-mb-3">
              <label for="firstname" class="formbold-form-label"> Username </label>
                <input
                  type="text"
                  name="firstname"
                  id="firstname"
                  placeholder=" Masukkan Username"
                  class="formbold-form-input"
                />
            </div>
      
            <div class="formbold-mb-3">
              <label for="password" class="formbold-form-label"> Password </label>
              <input
                type="text"
                name="password"
                id="password"
                placeholder="Masukkan Password"
                class="formbold-form-input"
              />
            </div>

            <div class="formbold-buatAkun">
                Tidak memiliki akun?<a href="#">Buat akun</a>
            </div>
                       
        <button class="formbold-btn">Submit</button>

      </form>
    </div>
  </div>


</body>
</html>
  