<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Preguntados extends CI_Controller {
    public function index()
	{
        if($this->input->post('materia')){
            $materia = $this->input->post('materia');
        }else{
            $materia="INF-314";
        }
   
        $sql="SELECT id_lugar_res
        FROM identificador 
        INNER JOIN notas ON identificador.id=notas.id_identificador
        INNER JOIN materia ON notas.id_materia=materia.id
        WHERE nota_final>51 and sigla='".$materia."'";
        
        $query=$this->db->query($sql);
        $resultados=$query->result();
  
        $matrizsql=['lrs'=>['La Paz','Cochabamba','Santa Cruz','Oruro','Chuquisaca','Beni','Pando','Potosi','Tarija'],'cs'=>[0,0,0,0,0,0,0,0,0] ,'materia'=>$materia];
        foreach ($resultados as $key => $valor) {
            # code...
            $lr= ($valor->id_lugar_res)-1;
            switch($lr){
                case 0 :
                    $matrizsql['cs'][0]++;
                break;
                case 1 :
                    $matrizsql['cs'][1]++;
                break;
                case 2 :
                    $matrizsql['cs'][2]++;
                break;
                case 3 :
                    $matrizsql['cs'][3]++;
                break;
                case 4 :
                    $matrizsql['cs'][4]++;
                break;
                case 5 :
                    $matrizsql['cs'][5]++;
                break;
                case 6 :
                    $matrizsql['cs'][6]++;
                break;
                case 7 :
                    $matrizsql['cs'][7]++;
                break;
                case 8 :
                    $matrizsql['cs'][8]++;
                break;
            }
        }
		$this->layout->view('preguntados.view.php',$matrizsql);
    }
}

