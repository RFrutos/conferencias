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
                $calendario= array();
                while($eventos=$resultado->fetch_assoc()){   
                    $fecha=$eventos["fecha_evento"];
                    $evento= array(
                       "titulo"=> $eventos["nombre_evento"],
                       "fecha" => $eventos["fecha_evento"],
                       "hora"=> $eventos["hora_evento"],
                       "categoria"=>$eventos["cat_evento"],
                       "invitado"=>$eventos["nombre_invitado"] . " ". $eventos["apellido_invitado"]
                    );
                    $calendario[$fecha][]=$evento;
                 }?> 
                    <?php 
                        foreach($calendario as $dia=> $lista_eventos){?>
                            <h3> 
                                <i class="fa fa-calendar"></i>
                                <?php
                                    setlocale(LC_TIME, "spanish");
                                    echo strftime("%A, %d de %B del %Y", strtotime($dia));
                                ?>
                            </h3>
                        <?php foreach($lista_eventos as $evento) { ?>
                            <div class="dia">
                                <p class="titulo"><?php echo $evento["titulo"]?></p>
                                <p class="hora"><i class="far fa-clock" ></i> <?php echo $evento["hora"]?></p>
                                <p class="categoria"><?php echo $evento["categoria"]?></p>
                                <p class="invitado"><i class="fas fa-user" ></i><?php echo $evento["invitado"]?></p>
                            </div>
                        <?php }?>
                       <?php } ?>
                       
                </pre>
                <?php 
                    $conn->close();
                ?>
            </div>
                
        </section>
        <?php include_once'includes/templates/footer.php'?> 
    </div>      
</body>