<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <title>QUIZZPRINT | Inicio</title>
    <style>
        .feature-card {
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 22px rgba(0, 0, 0, 0.15);
        }

        .test-btn:hover {
            transform: scale(1.05);
        }
        .notifyjs-corner {
            z-index: 999999 !important;
        }
    </style>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">

            <!-- LOGO -->
            <a class="navbar-brand fw-bold" href="index.php">QUIZZPRINT</a>

            <!-- Botón responsive -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Enlaces -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Inicio</a>
                    </li>


                </ul>

                <!-- Botón de acceso rápido -->
                <a href="auth/login.php" class="btn btn-primary px-3">
                    Entrar
                </a>

            </div>

        </div>

    </nav>

    <!-- ========================================================= -->
    <!--     SECCIÓN DE CONTABILIDAD - DINÁMICA E INTERACTIVA      -->
    <!-- ========================================================= -->

    <!-- HERO PRINCIPAL -->
    <section class="container my-5">

        <div class="row align-items-center">

            <div class="col-md-6">
                <h1 class="fw-bold display-5">Aprende Contabilidad de Forma Interactiva</h1>

                <p class="mt-3 lead">
                    Domina conceptos contables a través de juegos, preguntas rápidas, material visual,
                    simuladores y actividades dinámicas diseñadas para estudiantes y profesores.
                </p>

                <button id="btnComenzar" class="btn btn-success mt-3 px-4 py-2 btn-lg">
                    Comenzar Ahora
                </button>

            </div>

            <div class="col-md-6 text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/3846/3846804.png"
                    class="img-fluid" style="max-height: 300px;">
            </div>

        </div>

    </section>


    <!-- SECCIÓN DE CARACTERÍSTICAS -->
    <section class="container my-5">

        <h2 class="text-center fw-bold mb-4">¿Qué Aprenderás?</h2>

        <div class="row g-4">

            <!-- TARJETA 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-0 feature-card">
                    <div class="card-body text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/888/888879.png" width="70">
                        <h5 class="mt-3 fw-bold">Asientos Contables</h5>
                        <p>Aprende cómo registrar transacciones reales mediante un sistema interactivo.</p>
                    </div>
                </div>
            </div>

            <!-- TARJETA 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-0 feature-card">
                    <div class="card-body text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/4341/4341139.png" width="70">
                        <h5 class="mt-3 fw-bold">Estados Financieros</h5>
                        <p>Interpreta el balance, flujo de caja y estado de resultados de forma simple.</p>
                    </div>
                </div>
            </div>

            <!-- TARJETA 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-0 feature-card">
                    <div class="card-body text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/2965/2965879.png" width="70">
                        <h5 class="mt-3 fw-bold">Simulaciones Reales</h5>
                        <p>Resuelve ejercicios con escenarios reales para reforzar tu aprendizaje.</p>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <!-- MINI TEST INTERACTIVO -->
    <section class="container my-5">

        <h2 class="text-center fw-bold mb-4">Pon a prueba tus conocimientos</h2>

        <div class="card shadow border-0">
            <div class="card-body">

                <p class="fw-bold">📌 Pregunta:</p>
                <p>Si compras una computadora para la empresa, ¿en qué tipo de cuenta se registra?</p>

                <div class="mt-3">
                    <button class="btn btn-outline-primary me-2 test-btn" data-answer="correcto">
                        Activo
                    </button>
                    <button class="btn btn-outline-primary me-2 test-btn" data-answer="incorrecto">
                        Pasivo
                    </button>
                    <button class="btn btn-outline-primary me-2 test-btn" data-answer="incorrecto">
                        Gasto
                    </button>
                </div>

                <div id="test-response" class="mt-3 fw-bold"></div>

            </div>
        </div>

    </section>


    <!-- TESTIMONIOS -->
    <section class="container my-5">

        <h2 class="text-center fw-bold mb-4">Lo que dicen los estudiantes</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card shadow-sm border-0 p-3">
                    <p>"Por primera vez entendí cómo funciona un asiento contable. ¡Excelente plataforma!"</p>
                    <h6 class="fw-bold mb-0">– Estudiante de Universidad</h6>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm border-0 p-3">
                    <p>"Lo uso para enseñar a mis alumnos, es didáctico y muy sencillo de usar."</p>
                    <h6 class="fw-bold mb-0">– Profesor de Contabilidad</h6>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm border-0 p-3">
                    <p>"Los juegos de preguntas me ayudaron a preparar mi examen final."</p>
                    <h6 class="fw-bold mb-0">– Bachiller Técnico</h6>
                </div>
            </div>

        </div>

    </section>


    <!-- CTA FINAL -->
    <section class="bg-primary text-white text-center py-5 mt-5">
        <h2 class="fw-bold">¿Listo para aprender contabilidad jugando?</h2>
        <p class="mt-2">Únete ahora y mejora tus habilidades contables de forma dinámica.</p>
        <a href="#" class="btn btn-light px-4 py-2 mt-3 fw-bold">Comenzar Ahora</a>
    </section>

    <!-- MODAL -->
    <?= include("componentes/modales.php"); ?>
    <!-- FIN MODAL -->

    <script src="assets/js/ajaxjquery/jquery-3.7.1.min.js"></script>
    <script src="assets/js/notify/notify.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- SCRIPT PARA MINI TEST -->
    <script>
        document.querySelectorAll('.test-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const resp = document.getElementById('test-response');
                if (btn.dataset.answer === "correcto") {
                    resp.innerHTML = "✅ ¡Correcto! Es un ACTIVO porque genera beneficios futuros.";
                    resp.classList.add("text-success");
                    resp.classList.remove("text-danger");
                } else {
                    resp.innerHTML = "❌ Incorrecto. Intenta nuevamente.";
                    resp.classList.add("text-danger");
                    resp.classList.remove("text-success");
                }
            });
        });
    </script>
    <script>
        const btn = document.getElementById("btnComenzar");

        btn.addEventListener("click", function () {
            let modal = new bootstrap.Modal(document.getElementById("modalCodigo"));
            modal.show();
        });

        // Validación simple del código
        document.getElementById("btnValidarCodigo").addEventListener("click", function() {
            const codigo = document.getElementById("inputCodigo").value.trim();

            if (codigo === "") {
                $.notify("Debes ingresar un código.", "warn");
                return;
            }

            $.notify("Código ingresado: " + codigo + "\nRedirigiendo al quizz...", "success");
            setTimeout(() => {
                window.location.href = "views/quizz.php";
            }, 1500);

                    });
    </script>


</body>

</html>