<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>

<body>
    <div class="container">
        <form class="form" action="https://www.google.com/">
            <h2 class="heading">Login</h2>

            <label for="uname">Username</label>
            <input type="text" placeholder="Type your e-mail" name="uname" class="field inputName">

            <div class="span-container">
                <span class="loginError wrong"></span>
            </div>

            <label for="password">Password</label>
            <input type="password" placeholder="Type your password" name="password" class="field inputPassword">

            <div class="span-container">
                <span class="passwordError wrong"></span>
            </div>

            <div class="span-container">
                <span class="userError wrong"></span>
            </div>

            <button type="submit" class="loginBtn">Login</button>
        </form>
    </div>
</body>

</html>