$(document).ready(function () {
    // AJAX OPARA EL REGISTRO DE USUARIOS
    $("#formRegistro").on("submit", function (e) {
        e.preventDefault();
        let datos = {
            nombre: $("#nombre").val(),
            apellido: $("#apellido").val(),
            email: $("#email").val(),
            usuario: $("#usuario").val(),
            contrsena: $("#contrasena").val()
        };

        $.ajax({
            url: "../controllers/registroController.php",
            method: "POST",
            data: datos,
            dataType: "json",
            success: function (respuesta) {

                if (respuesta.ok) {
                    $.notify("Registro exitoso ✔", "success");
                    setTimeout(() => {
                        // Esta línea ejecuta la redirección a login.php
                        window.location.href = "login.php";
                    }, 1500); // <-- Milisegundos de espera


                } else {
                    $.notify(respuesta.mensaje, "warn");
                }
            },
            error: function () {
                $.notify("Error en la petición AJAX ❌", "error");
            }
        });
    });

    // AJAX PARA EL LOGIN DE USUARIOS
    $("#formLogin").on("submit", function (e) {
        e.preventDefault();
        let datos = {
            usuario: $("#usuario").val(),
            contrasena: $("#contrasena").val()
        };
        $.ajax({
            url: "../controllers/loginController.php",
            method: "POST",
            data: datos,
            dataType: "json",
            success: function (respuesta) {
                if (respuesta.ok) {
                    // Esta línea ejecuta la redirección a dashboard.php
                    window.location.href = "../views/dashboard.php";
                } else {
                    $.notify(respuesta.mensaje, "warn");
                }
            },
            error: function () {
                $.notify("Error en la petición AJAX ❌", "error");
            }
        });
    });

    // ACTUALIZAR PERFIL DE USUARIO
    $("#formEditarPerfil").on("submit", function (e) {
        e.preventDefault();
        let datos = {
            id_usu: $("#id_usu").val(),
            nombre: $("#nombre_usu").val(),
            apellido: $("#apellido_usu").val(),
            email: $("#email_usu").val(),
            usuario: $("#usuario_usu").val(),
            contrasena: $("#contrasena_usu").val()
        };
        $.ajax({
            url: "../controllers/actualizarPerfilController.php",
            method: "POST",
            data: datos,
            dataType: "json",
            success: function (respuesta) {
                if (respuesta.ok) {
                    $.notify("Perfil actualizado ✔", "success");
                    //  TIEMPO DE ESPERA PARA VER LA NOTIFICACIÓN
                    setTimeout(() => {
                        // Esta línea ejecuta la redirección a dashboard.php
                        window.location.href = "../views/perfil.php";
                    }, 1500); // <-- Milisegundos de espera


                } else {
                    $.notify(respuesta.mensaje, "warn");
                }
            },
            error: function () {
                $.notify("Error en la petición AJAX ❌", "error");
            }
        });
    });

    // ===============================
    // RESTABLECER CONTRASEÑA
    // ===============================


});
