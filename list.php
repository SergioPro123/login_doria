<?php

include("./logic/list.php");

?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="my-5 container bg-light py-3">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <table class="table table-hover table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Contraseña</th>
                                <th scope="col">Fecha Creación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($user = $usuarios->fetch_assoc()) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $user["id_user"] ?></th>
                                    <td><?= $user["name"] ?></td>
                                    <td><?= $user["email"] ?></td>
                                    <td><?= $user["password_encrypt"] ?></td>
                                    <td><?= $user["date_create"] ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-12">
                <a href="./login.php">
                    <button type="button" class="btn btn-primary w-100">Salir</button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>