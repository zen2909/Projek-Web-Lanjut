<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body style="background-image: url('images/login.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
  <div class="wrapper">
    <form id="form" action="{{ route('login-proses') }}" method="post">
        @csrf
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" id="username" required>
        <i class='bx bxs-user'></i>
      </div>
      @error('username')
        <small>{{$message}}</small>
      @enderror
      <div class="input-box">
        <input type="password" placeholder="Password" id="password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      @error('password')
        <small>{{$message}}</small>
      @enderror
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Login</button>
      <div class="register-link">
        <p>Dont have an account? <a href="#">Register</a></p>
      </div>
    </form>
  </div>
</body>