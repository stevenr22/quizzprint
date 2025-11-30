$(document).ready(function () {

    $("#formRegistro").on("submit", function (e) {
        e.preventDefault();
         console.log("Toasty cargado:", typeof Toasty);

        // var toast = new Toasty();
        // toast.configure({
        //     autohide: true,
        //     progressBar: true
        // });

        // let datos = {
        //     nombre: $("#nombre").val(),
        //     apellido: $("#apellido").val(),
        //     email: $("#email").val(),
        //     usuario: $("#usuario").val(),
        //     contrsena: $("#contrsena").val()
        // };

        // $.ajax({
        //     url: "../controllers/registroController.php",
        //     method: "POST",
        //     data: datos,
        //     dataType: "json",
        //     success: function (respuesta) {

        //         if (respuesta.ok) {
        //             toast.success("Registro exitoso ✔");

        //             setTimeout(() => {
        //                 window.location.href = "login.php";
        //             }, 1500);

        //         } else {
        //             toast.error(respuesta.mensaje);
        //         }
        //     },
        //     error: function () {
        //         toast.error("Error en la petición AJAX ❌");
        //     }
        // });
    });

});
