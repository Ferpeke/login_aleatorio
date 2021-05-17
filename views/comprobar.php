<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar</title>

    <?php
    require_once '../app/config.php';
    require_once '../app/dependencias.php';
    ?>
</head>

<body style="background-repeat: no-repeat; background-size: cover; background-image: url('https://i.pinimg.com/originals/0c/bf/2f/0cbf2f5c3fb37d033c0bc791ae196dbb.gif');">
    <div class="container">
        <div class="row justify-content-around py-4">
            <div class="col-sm-4 text-center">
                <?php
                session_start();
                if (isset($_SESSION['id_sesion'])) {
                ?>

                    <script>
                        swal('', 'El ID de su Sesion es: <?php echo $_SESSION['id_sesion'] ?>', 'success');
                    </script>


                    <div class="container">
                        <div class="row">
                            <div class="col">

                                <div class="alert alert-primary" role="alert" style="background-position: center;">
                                    <div style="background-position: center;"> 
                                        <h1 style="font-family: monospace; background-position: center;">Bienvenido Brokis</h1>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <script>
                        swal('', 'No Tienes Sesion', 'error');
                    </script>
                <?php
                }
                ?>

                <a href="../index.php" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>



</body>

</html>