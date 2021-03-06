

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="<?=base_url('assets/css/estilos.php')?>"> -->
    <title>Inf-324 1P</title>
<style>
    .codigo{
    background-color: #1C2833;
    color: white;
    border-radius: 10px;
    }
    .full{
        background-color: #EBF5FB; 
        height: 100vh;
    }

    <?php 
    if(isset($foto)){
        $fotito= base_url()."fotos/".$foto;
    echo "
    .foto {
      background-image: url('$fotito');
      background-size: cover;
      width: 50px;
      /* Definir de acuerdo al ancho de la imagen */
      height: 50px;
      /* Definir de acuerdo al alto de la imagen */
      border-radius: 25px;
      border: 2px solid #666;

    }

   /* fondo de color  */
    body{
        background-color:$color ;
    }
    select.color  {
        background-color:$color ;
        color: white;
    }
    /*  */
    ";}
?>
</style>
</head>
<body>
    <?= $content_for_layout?>
    <!-- <h4>footer</h4> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>