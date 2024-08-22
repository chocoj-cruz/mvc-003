<h1 class="text-center">Formulario de Aplicaciones</h1>
<div class="row justify-content-center mb-3">
    <form id="formAplicacion" class="col-lg-5 border bg-light p-3">
        <input type="hidden" name="app_id" id="app_id">
        <div class="row mb-3">
            <div class="col">
                <label for="app_nombre">Aplicacion</label>
                <input type="text" name="app_nombre" id="app_nombre" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" id="btnGuardar" class="btn btn-success w-100">Guardar</button>
            </div>
            <div class="col">
                <button type="button" id="btnModificar" class="btn btn-warning w-100">Modificar</button>
            </div>
            <div class="col">
                <button type="button" id="btnCancelar" class="btn btn-danger w-100">Cancelar</button>
            </div>
        </div>
    </form>
</div>
<div class="row justify-content-center">
    <div class="col-lg-8 table-responsive">
        <table class="table table-bordered table-hover bg-light" id="tablaAplicacion">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4">No hay Aplicaciones registradas</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script src="<?= asset('./build/js/aplicacion/index.js') ?>"></script>