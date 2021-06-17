$(document).ready(function() {
    $('#btnRegistro').click(function() {
        var datos = $('#frmajax').serialize();
        $.ajax({
            type: "POST",
            data: datos,
            url: "../app/Insertar.php",
            success: function(respuesta) {
                if (respuesta == 1) {
                    Swal.fire(
                        'Agregado con Exito',
                        ':)',
                        'success'
                    )
                } else {
                    Swal.fire(
                        'Error al insertar',
                        ':(',
                        'error'
                    )
                }
            }
        });
        // return false;
    });
});