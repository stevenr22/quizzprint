<!-- MODAL PARA INGRESAR CÓDIGO (Estilo Contable + Bootstrap Icons) -->
<div class="modal fade" id="modalCodigo" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg">

      <div class="modal-header" style="background:#0d47a1; color:white;">
        <h5 class="modal-title">
          <i class="bi bi-calculator me-2"></i> Acceso al Registro Contable
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <p class="mb-3 text-secondary">
          Ingresa el <strong>código de autorización</strong> proporcionado por el contador o administrador
          para acceder al módulo contable.
        </p>

        <label class="form-label fw-bold">Código de Autorización:</label>
        <input 
          type="text" 
          id="inputCodigo" 
          class="form-control form-control-lg" 
          placeholder="Ej: CNT-2025"
        >
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Cancelar
        </button>

        <button type="button" id="btnValidarCodigo" class="btn btn-primary">
          <i class="bi bi-check2-circle me-1"></i> Validar Código
        </button>
      </div>

    </div>
  </div>
</div>



<!-- MODAL EDITAR PERFIL (Estilo Contable + Bootstrap Icons) -->
<div class="modal fade" id="modalEditarPerfil" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content border-0 shadow-lg">

            <!-- Encabezado -->
            <div class="modal-header" style="background:#1565c0; color:white;">
                <h5 class="modal-title">
                    <i class="bi bi-person-vcard me-2"></i> Actualizar Datos del Usuario
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <!-- Cuerpo -->
            <div class="modal-body">
                <p class="text-secondary mb-3">
                    Modifica tu información asociada a tu perfil dentro del sistema contable.
                </p>

                <form id="formEditarPerfil" action="../controllers/actualizar_perfil.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label">
                            <i class="bi bi-person-lines-fill me-1"></i> Nombre:
                        </label>
                        <input 
                            type="text" 
                            class="form-control" 
                            name="nombre_usu"
                            value="<?= htmlspecialchars($usuario['nombre_usu']) ?>"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            <i class="bi bi-person-lines-fill me-1"></i> Apellido:
                        </label>
                        <input 
                            type="text" 
                            class="form-control" 
                            name="apellido_usu"
                            value="<?= htmlspecialchars($usuario['apellido_usu']) ?>"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            <i class="bi bi-envelope-at me-1"></i> Correo electrónico:
                        </label>
                        <input 
                            type="email" 
                            class="form-control" 
                            name="email_usu"
                            value="<?= htmlspecialchars($usuario['email_usu']) ?>"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            <i class="bi bi-person-fill-gear me-1"></i> Nombre de usuario:
                        </label>
                        <input 
                            type="text" 
                            class="form-control" 
                            name="usuario_usu"
                            value="<?= htmlspecialchars($usuario['usuario_usu']) ?>"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            <i class="bi bi-shield-lock-fill me-1"></i> Nueva contraseña:
                        </label>
                        <input 
                            type="password" 
                            class="form-control" 
                            name="contrasena_usu"
                            placeholder="Dejar vacío si no deseas cambiarla">
                    </div>

                </form>
            </div>

            <!-- Pie del modal -->
            <div class="modal-footer">
                <button class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle me-1"></i> Cancelar
                </button>

                <button class="btn btn-primary" form="formEditarPerfil">
                    <i class="bi bi-save2 me-1"></i> Guardar cambios
                </button>
            </div>

        </div>
    </div>
</div>
