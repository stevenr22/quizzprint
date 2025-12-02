    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm">
        <div class="container">

            <a class="navbar-brand" href="../views/dashboard.php">QUIZZPRINT</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <!-- USER DROPDOWN -->
                    <li class="nav-item dropdown">
                        <div class="avatar dropdown-toggle" role="button" id="userDropdown" data-bs-toggle="dropdown">
                            <?= strtoupper($usuario["nombre_usu"][0]) ?>
                        </div>

                        <ul class="dropdown-menu dropdown-menu-end shadow">
                            <li>
                                <a class="dropdown-item" href="../views/perfil.php">
                                    👤 Ver perfil
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item text-danger" href="../controllers/logoutController.php">
                                    🔐 Cerrar sesión
                                </a>
                            </li>
                        </ul>

                    </li>

                </ul>

            </div>
        </div>
    </nav>