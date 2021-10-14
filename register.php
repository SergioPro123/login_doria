<html>

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/jquery.passwordRequirements.css" />

</head>

<body>
    <div id="container-register">
        <div id="title">
            <i class="material-icons lock">lock</i> Retristrar
        </div>

        <form method="POST" action="./logic/registrar.php">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" name="name" minlength="5" placeholder="Nombre" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input id="email" name="email" maxlength="50" placeholder="Correo Electronico" type="email" required class="validate" autocomplete="off">
            </div>


            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" name="password" minlength="8" maxlength="20" placeholder="Contraseña" type="password" required class="validate pr-password form-control" autocomplete="off">
            </div>

            <div class="remember-me">
                <input type="checkbox" id="terminos">
                <label for="terminos">
                    <span style="color: #DDD">Acepto los términos de servicio</span>
                </label>
            </div>

            <input type="submit" value="register" name="register" />
        </form>

        <div class="privacy">
            <a href="#">Política de privacidad</a>
        </div>

        <div class="register">
            Ya tienes una cuenta?
            <br>
            <a href="./login.php"><button id="register-link">Entre aquí</button></a>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/jquery.passwordRequirements.min.js"></script>
    <script>
        /* trigger when page is ready */
        $(document).ready(function() {
            $("#password").passwordRequirements({

            });
        });
    </script>
</body>

</html>