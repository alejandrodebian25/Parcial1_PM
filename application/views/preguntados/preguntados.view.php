<div class="container mt-2">
<div class="alert alert-info" role="alert">
  <h4 class="alert-heading">Bienvenido al sistema!</h4>
  <hr>
  <h5>Pregunta 2</h5>
  <p>Con la Base de datos anterior, adicione una tabla de notas por materia y cuente la cantidad de aprobados por departamento de manera que solo obtenga una sola fila de resultados.</p>
  <hr>
  <p>Modelo Relacional</p>
  <img src=<?=base_url('assets/img/mr.png')?> alt="mr" class="img-thumbnail">
</div>

<div class="alert alert-dark" role="alert">
<h3 class="alert-heading">Codigo en SQL</h3>
<p >Aprobados de la materia X por departamento</p>
  <hr>
  <pre class="codigo"><code >
    SELECT 
    sum(case when id_lugar_res =1 then 1 ELSE 0 END) AS LaPaz,
    sum(case when id_lugar_res =2 then 1 ELSE 0 END) AS Cochabamba,
    sum(case when id_lugar_res =3 then 1 ELSE 0 END) AS SantaCruz,
    sum(case when id_lugar_res =4 then 1 ELSE 0 END) AS Oruro,
    sum(case when id_lugar_res =5 then 1 ELSE 0 END) AS Chuquisaca,
    sum(case when id_lugar_res =6 then 1 ELSE 0 END) AS Beni,
    sum(case when id_lugar_res =7 then 1 ELSE 0 END) AS Pando,
    sum(case when id_lugar_res =8 then 1 ELSE 0 END) AS Potosi,
    sum(case when id_lugar_res =9 then 1 ELSE 0 END) AS Tarija
    FROM identificador 
    INNER JOIN notas ON identificador.id=notas.id_identificador
    INNER JOIN materia ON notas.id_materia=materia.id
    WHERE nota_final>51 and sigla="INF-314"
    </code>
</pre>
<img src=<?=base_url('assets/img/preguntados.png')?> alt="mr" class="img-thumbnail">
</div>

<div class="alert alert-dark" role="alert">
<h3 class="alert-heading">Codigo en PHP</h3>
<p >Aprobados de la materia X por departamento</p>
  <hr>
  <pre class="codigo">
    <code >
    $sql="SELECT id_lugar_res
        FROM identificador 
        INNER JOIN notas ON identificador.id=notas.id_identificador
        INNER JOIN materia ON notas.id_materia=materia.id
        WHERE nota_final>51 and sigla='".$materia."'";
        
        $query=$this->db->query($sql);
        $resultados=$query->result();
  
        $matrizsql=[['La Paz','Cochabamba','Santa Cruz','Oruro','Chuquisaca','Beni','Pando','Potosi','Tarija'],[0,0,0,0,0,0,0,0,0]];
        foreach ($resultados as $key => $valor) {
            # code...
            $lr= ($valor->id_lugar_res)-1;
            switch($lr){
                case 0 :
                    $matrizsql[1][0]++;;
                break;
                case 1 :
                    $matrizsql[1][1]++;;
                break;
                case 2 :
                    $matrizsql[1][2]++;;
                break;
                case 3 :
                    $matrizsql[1][3]++;;
                break;
                case 4 :
                    $matrizsql[1][4]++;;
                break;
                case 5 :
                    $matrizsql[1][5]++;;
                break;
                case 6 :
                    $matrizsql[1][6]++;;
                break;
                case 7 :
                    $matrizsql[1][7]++;;
                break;
                case 8 :
                    $matrizsql[1][8]++;;
                break;
            }
        }
    </code>
</pre>
</div>
<form action="<?= base_url(); ?>preguntados/" method="POST">
            <div class="form-group">
                <select id="materia" name="materia" onchange="this.form.submit()">
                <option value="INF-314" >Sel. Materia</option>
                <option value="INF-131">INF-131</option>
                <option value="CPA-201">CPA-201</option>
                <option value="INF-314">INF-314</option>
                <option value="INF-325">INF-325</option>
                <option value="INF-329">INF-329</option>
                </select>
            </div>
</form>
<p>Cantidad de aprobados de la materia : <?=$materia?> por departamento</p>
<table class="table">
  <thead>
  <tr>
    <?php
    foreach ( $lrs as $v ):
    ?>
        <th><?php echo $v;?></th>
    <?php
    endforeach;
    ?>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach ( $cs as $v ):
    ?>
        <td><?php echo $v;?></td>
    <?php
    endforeach;
    ?>
    
  </tbody>
</table>
</div>


<div class="">
<a href="<?=base_url('home');?>" type="button" class="btn btn-dark"> << Ir a la pregunta 1 </a>
</div>
