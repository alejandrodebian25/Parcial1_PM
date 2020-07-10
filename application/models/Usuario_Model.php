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
        $query=$this->db->query($sql);
        $usuario=$query->row();

        if (isset($usuario))
        {

            $data=[
                'ci'=>$usuario->ci,
                'nombre'=>$usuario->nombre,
                'apellidos'=>$usuario->apellidos,
                'color'=>$usuario->color,
                'foto'=>$usuario->foto
            ];
            return $data;
        }
        else
        { return $usuario;}
       
    }

}