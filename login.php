<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <style>

    </style>
</head>

<body>
    <div id="container-login">
        <div id="title">
            <i class="material-icons lock">lock</i> Login
        </div>

        <form action="./logic/login.php" method="POST">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input minlength="3" id="username" name="email" placeholder="Correo Electronico" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input minlength="8" id="password" name="password" placeholder="Contraseña" type="password" required class="validate" autocomplete="off">
            </div>

            <div class="remember-me">
                <input id="recuerdame" type="checkbox">
                <label for="recuerdame"><span style="color: #DDD">Recuérdame</span></label>
            </div>

            <input type="submit" value="Log In" name="login" />
        </form>

        <div class="forgot-password">
            <a href="#">¿Olvidaste tu contraseña?</a>
        </div>

        <div class="register">
            ¿Aún no tienes una cuenta?
            <a href="./register.php"><button id="register-link">Registrate!</button></a>
        </div>

        <label style="color:red;" for=""><?= $_GET["msj_error"] ?? "" ?></label>
    </div>

</body>

</html>