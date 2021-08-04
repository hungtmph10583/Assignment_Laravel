<!-- @if(session('msg') != null)
<p style="color: red">{{session('msg')}}</p>
@endif
<form action="" method="POST">
    @csrf
    <div>
        <label for="">Email</label>
        <input type="text" name="email">
        <br>
        @error('email')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="">Password</label>
        <input type="password" name="password">
        <br>
        @error('password')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <button type="submit">Đăng nhập</button>
    </div>
</form> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('admin-theme/custom/login.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <form class="login-div" method="POST">
    @csrf
        <!-- <div class="logo"></div> -->
        <div class="title"></div>
        <div class="title"></div>
        @if(session('msg') != null)
        <p style="color: red">{{session('msg')}}</p>
        @endif
        <div class="login-in">
            <div class="username">
                <i class="bx bx-user"></i>
                <input type="username" name="email" placeholder="username">
            </div>
            @error('email')
                <p style="color: red">{{ $message }}</p>
            @enderror
            <div class="password">
                <i class="bx bx-lock"></i>
                <input type="password" name="password" placeholder="password">
            </div>
            @error('password')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <button class="buttons" type="submit">login</button>
        <div class="link">
            <a href="#">Forgotten password</a> or
            <a href="#">Sign up</a>
        </div>
    </form>
</body>
</html>