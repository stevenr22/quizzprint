<!-- ADMINISTRAR CONTROL DE SESION -->
<?php
require_once "../componentes/variables_globales.php";
if (!isset($_SESSION["usuario_id"])) {
    header("Location: ../auth/login.php");
    exit;
}
$usuario = obtenerUsuarioSesion();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>QUIZZPRINT | Dashboard</title>

</head>

<body>

    <!-- ================= NAVBAR ================= -->
    <?php include "../componentes/partes/nav.php"; ?>


    <!-- ================= BIENVENIDA ================= -->
    <div class="container">
        <div class="bienvenida-box mt-4">
            <h4 class="mb-1">Bienvenido, <?= $usuario["nombre_usu"] ?> 👋</h4>
            <p class="text-secondary mb-0">Tu rol: <strong><?= $usuario["nombre_rol"] ?></strong></p>
        </div>
    </div>

    <!-- ================= CONTENIDO ================= -->
    <section class="container my-5">

        <h1 class="dashboard-title mb-2">Panel de Control</h1>
        <p class="text-secondary mb-4">Administra los módulos del sistema.</p>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card-custom">
                    <div class="card-icon">📝</div>
                    <h4>Preguntas</h4>
                    <p>Crear y gestionar preguntas del quiz.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-custom">
                    <div class="card-icon">🎮</div>
                    <h4>Cuestionarios</h4>
                    <p>Organiza cuestionarios para los estudiantes.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-custom">
                    <div class="card-icon">👨‍🎓</div>
                    <h4>Resultados</h4>
                    <p>Consulta los resultados de los participantes.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-custom">
                    <div class="card-icon">📊</div>
                    <h4>Reportes</h4>
                    <p>Genera reportes de desempeño estudiantil.</p>
                </div>
            </div>

        </div>
    </section>

    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>