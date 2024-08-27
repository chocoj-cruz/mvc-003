<h1 class="text-center">Asignar Rol</h1>
<div class="row justify-content-center mb-3">
    <form id="formRol" class="col-lg-5 border bg-light p-3">
        <input type="hidden" name="rol_id" id="rol_id">
        <div class="row mb-3">
            <div class="col">
                <label for="rol_nombre">Nombre del Rol</label>
                <input type="text" name="rol_nombre" id="rol_nombre" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="rol_nombre_ct">Nombre ct del Rol</label>
                <input type="text" name="rol_nombre_ct" id="rol_nombre_ct" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="rol_app">Aplicacion</label>
                <select name="rol_app" id="rol_app" class="form-control">
                    <option value="#">Seleccione...</option>
                    <?php foreach ($aplicaciones as $app) : ?>
                        <option value="<?= $app['app_id'] ?>"> <?= $app['app_nombre'] ?></option>';
                    <?php endforeach ?>
                </select>
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
        <table class="table table-bordered table-hover bg-light" id="tablaRol">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nombre</th>
                    <th>Nombre ct</th>
                    <th>Aplicacion</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>
<script src="<?= asset('./build/js/rol/index.js') ?>"></script>