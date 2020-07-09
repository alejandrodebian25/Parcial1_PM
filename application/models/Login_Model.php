<?php
class Login_Model extends CI_Model {

    function verificar_ci_clave($ci,$clave){
        $sql="select * from usuario WHERE ci='".$ci."' and clave='".$clave."'";
        $usuario=$this->db->query($sql)->result();
        if(!empty($usuario))
            return true;
        else
            return false;

    }
}