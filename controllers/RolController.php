<?php

namespace Controllers;

use Exception;
use Model\Aplicacion;
use Model\Rol;
use MVC\Router;

class RolController
{
    public static function index(Router $router)
    {   
        $sql = "SELECT * FROM aplicacion where app_situacion = 1";

        $rol = Aplicacion::fetchArray($sql);
        $router->render('rol/index', [
            'aplicaciones' => $rol
        ]);
    }

    public static function guardarAPI()
    {
        $_POST['rol_nombre'] = htmlspecialchars($_POST['rol_nombre']);
        $_POST['rol_nombre_ct'] = htmlspecialchars($_POST['rol_nombre_ct']);
        $_POST['rol_app'] = filter_var($_POST['rol_app'], FILTER_SANITIZE_NUMBER_INT);

        try {
            $rol = new Rol($_POST);
            $resultado = $rol->crear();
            http_response_code(200);
            echo json_encode([
                'codigo' => 1,
                'mensaje' => 'Registro Guardado Correctamente'
            ]);
        } catch (Exception $error) {
            http_response_code(500);
            echo json_encode([
                'codigo' => 0,
                'mensaje' => 'Error al Guardar Registro',
                'detalle' => $error->getMessage()
            ]);
        }
    }

    public static function buscarAPI()
    {
        try {
            // ORM - ELOQUENT
            // $productos = Producto::all();
            $rol = Rol::obtenerRol();
            http_response_code(200);
            echo json_encode([
                'codigo' => 1,
                'mensaje' => 'Datos encontrados',
                'detalle' => '',
                'datos' => $rol
            ]);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode([
                'codigo' => 0,
                'mensaje' => 'Error al buscar aplicaciones',
                'detalle' => $e->getMessage(),
            ]);
        }
    }

    public static function modificarAPI()
    {
        $_POST['rol_nombre'] = htmlspecialchars($_POST['rol_nombre']);
        $_POST['rol_nombre_ct'] = htmlspecialchars($_POST['rol_nombre_ct']);
        $_POST['rol_app'] = filter_var($_POST['rol_app'], FILTER_SANITIZE_NUMBER_INT);
        $id = filter_var($_POST['rol_id'], FILTER_SANITIZE_NUMBER_INT);

        try {
            $rol = Rol::find($id);
            $rol->sincronizar($_POST);
            $rol->actualizar();
            http_response_code(200);
            echo json_encode([
                'codigo' => 1,
                'mensaje' => 'Rol modificado exitosamente',
            ]);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode([
                'codigo' => 0,
                'mensaje' => 'Error al modificar rol',
                'detalle' => $e->getMessage(),
            ]);
        }
    }

    public static function eliminarAPI()
    {

        $id = filter_var($_POST['rol_id'], FILTER_SANITIZE_NUMBER_INT);
        try {

            $rol = Rol::find($id);
            $rol->sincronizar([
                'rol_situacion' => 0
            ]);
            // echo json_encode($resultado);
            // exit;
            $rol->actualizar();
            http_response_code(200);
            echo json_encode([
                'codigo' => 1,
                'mensaje' => 'Rol eliminado exitosamente',
            ]);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode([
                'codigo' => 0,
                'mensaje' => 'Error al eliminar Rol',
                'detalle' => $e->getMessage(),
            ]);
        }
    }
    
}