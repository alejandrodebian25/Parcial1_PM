<?php
class Usuario_Model extends CI_Model {
    public $id;
    public $ci;
    public $nombre;
    public $apellidos;
    public $fecha_nacimiento;
    public $lugar_residencia;
    public $color;
    
    public function getUsuario($ci){
        $sql="select * from identificador WHERE ci='".$ci."'";
        $usuario=$this->db->query($sql)->result();
        return $usuario;
    }

}