<?php

namespace Model;

class Usuario extends ActiveRecord{
    protected static $tabla = 'usuario';
    //aca va el nombre del id de la tabla
    protected static $idTabla = 'usu_id';
    //aca van los nombres de los campos
    protected static $columnasDB = ['usu_nombre', 'usu_catalogo', 'usu_password', 'usu_situacion'];

    public $usu_id;
    public $usu_nombre;
    public $usu_catalogo;
    public $usu_password;
    public $usu_situacion;


    public function __construct($args = [])
    {
        $this->usu_id = $args['usu_id'] ?? null;
        $this->usu_nombre = $args['usu_nombre'] ?? '';
        $this->usu_catalogo = $args['usu_catalogo'] ?? 0;
        $this->usu_password = $args['usu_password'] ?? '';
        $this->usu_situacion = $args['usu_situacion'] ?? 1;
} 
    
    public static function obtenerUsuario()
    {
        $sql = "SELECT * FROM usuario where usu_situacion = 1";
        return self::fetchArray($sql);
    }
}