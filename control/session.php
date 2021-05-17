<?php
    session_start();
    $id_sesion = $_POST['id_sesion'];
    $_SESSION['id_sesion'] = $id_sesion;
    echo $id_sesion;
?>