<!-- MODAL PARA INGRESAR CÓDIGO -->
<div class="modal fade" id="modalCodigo" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Ingresa tu código de acceso</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <p class="mb-3 text-secondary">
          Este código es proporcionado por el profesor para comenzar el cuestionario.
        </p>

        <label class="form-label fw-bold">Código:</label>
        <input type="text" id="inputCodigo" class="form-control form-control-lg" placeholder="Ej: ABC123">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Cancelar
        </button>

        <button type="button" id="btnValidarCodigo" class="btn btn-success">
          Validar Código
        </button>
      </div>

    </div>
  </div>
</div>
