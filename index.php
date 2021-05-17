<?php 
  require_once 'app/config.php';  
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        require_once 'app/dependencias.php';
        
    ?>
</head>
<body class="cuerpo">
    <div class="container">
        <div class="row justify-content-around py-4">
            <div class="col-sm-4 text-center">
                    <div class="mt-4">
                        <span class="btn btn-outline-info" id="btn_generate">Generar sesión</span>
                    </div>
                    <div class="mt-4">
                        <span>
                            <a class="btn btn-outline-success" href="views/comprobar.php">Mostrar sesión</a>
                        </span>
                    </div>
                    <div class="mt-4">
                        <span class="btn btn-outline-danger" id="btn_close">
                            <?php
                                session_start();

                                session_destroy();
                            ?>
                            Cerrar sesión
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>