<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>GDLWEBCAMP</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>
<body>
    <div class="contenedor">
    <?php include_once'includes/templates/header.php'?>
        <section class="calendario">
            <div class="encabezado-calendario">
                <h1>Calendario de eventos</h1>
                <img src="img/separador.png" alt="separador">
            </div>
                <?php 
                try{
                    require_once('includes/functions/bd_conexion.php');
                    $sql= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado ";
                    $sql .= " FROM eventos ";
                    $sql .= " INNER JOIN categoria_evento ";
                    $sql .= " ON eventos.id_cat_evento= categoria_evento.id_categoria ";
                    $sql .= " INNER JOIN invitados ";
                    $sql .= " ON eventos.id_inv= invitados.invitado_id ";
                    
                    $resultado= $conn->query($sql);
                    
                }catch(\Exception $e){
                    echo $e->getMessage();
                }
                
                
                ?>
                
            <div class="contenedor-calendario">
                <pre>
                <?php
                
                while($eventos=$resultado->fetch_assoc()){   
                    var_dump($eventos); 
                 }?> 
                </pre>
                
            </div>
                <?php 
                $conn->close();
                ?>
            
        </section>
        <?php include_once'includes/templates/footer.php'?>
    </div>      
</body>