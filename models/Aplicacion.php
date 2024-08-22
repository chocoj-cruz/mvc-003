<?php

namespace Model;

class Aplicacion extends ActiveRecord{
    protected static $tabla = 'aplicacion';
    //aca va el nombre del id de la tabla
    protected static $idTabla = 'app_id';
    //aca van los nombres de los campos
    protected static $columnasDB = ['app_nombre','app_situacion'];

    public $app_id;
    public $app_nombre;
    public $app_situacion;


    public function __construct($args = [])
    {
        $this->app_id = $args['app_id'] ?? null;
        $this->app_nombre = $args['app_nombre'] ?? '';
        $this->app_situacion = $args['app_situacion'] ?? 1;
} 
    
    public static function obtenerAplicacion()
    {
        $sql = "SELECT * FROM aplicacion where app_situacion = 1";
        return self::fetchArray($sql);
    }
}