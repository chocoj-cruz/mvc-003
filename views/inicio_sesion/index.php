<h2 class="text-center mb-2">Iniciar Sesión</h2>

<div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-sm" style="max-width: 400px; width: 100%;">
            <form>
                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="username" placeholder="Ingresa tu nombre de usuario" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            </form>
            <div class="text-center mt-3">
                <p>¿No tienes una cuenta? <a href="#">Regístrate Ahora</a></p>
            </div>
        </div>
    </div>
    <script src="<?= asset('./build/js/producto/index.js') ?>"></script>
