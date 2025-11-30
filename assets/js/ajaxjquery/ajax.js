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
                  alert("Login exitoso ✔");
                } else {
                    $.notify(respuesta.mensaje, "warn");
                }
            },
            error: function () {
                $.notify("Error en la petición AJAX ❌", "error");
            }
        });
    });
});
