<h1 class="text-center">Formulario de Usuarios</h1>
<div class="row justify-content-center mb-3">
    <form id="formUsuario" class="col-lg-5 border bg-light p-3">
        <input type="hidden" name="usu_id" id="usu_id">
        <div class="row mb-3">
            <div class="col">
                <label for="usu_nombre">Usuario</label>
                <input type="text" name="usu_nombre" id="usu_nombre" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="usu_catalogo">Catalogo</label>
                <input type="number" name="usu_catalogo" id="usu_catalogo" class="form-control" required>
            </div>
            <div class="col">
                <label for="usu_password">Contraseña</label>
                <input type="text" name="usu_password" id="usu_password" class="form-control" required>
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
        <table class="table table-bordered table-hover bg-light" id="tablaUsuario">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nombre</th>
                    <th>Catalogo</th>
                    <th>Contraseña</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4">No hay Usuarios registrados</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script src="<?= asset('./build/js/usuario/index.js') ?>"></script>