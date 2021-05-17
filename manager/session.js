$(document).ready(() => {
    $('#btn_generate').click(() => {
        $.ajax({
            type: "POST",
            data: 'id_sesion=' + parseInt(Math.random() * 10),
            url: "./control/session.php",
            success: (respuesta) => {
              swal("",`Sesion ID: ${respuesta}`,"success");
            }
        });
    });

    $('#btn_close').click(()=>{
        swal(':(','Ha cerrado sesión','info')
    });
});