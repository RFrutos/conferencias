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
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <div class="contenedor">
  <?php include_once'includes/templates/header.php'?>

    <main class="formulario">
            <div class="encabezado-formulario">
                <h1>REGISTRO DE USUSARIO</h1>
                <img src="img/separador.png" alt="separador">
            </div>
            <div class="contenido-formulario">
                <form action="" class="datos">
                    <div class="campo">
                        <label for="nombre" class="nombre">Nombre</label>
                        <input id="nombre" value="" size= "10" type="text" placeholder="Tu nombre">
                    </div>
                    <div class="campo">
                            <label for="apellidos" class="apellidos">Apellidos</label>
                            <input id="apellidos" size= "10" type="text" placeholder="Tus apellidos">
                    </div>
                    <div class="campo">
                            <label for="email" class="email">email</label>
                            <input id="email" size= "10" type="email" required="required" placeholder="Tu email">
                    </div>
                </form>
                <h5>ELIGE EL NÚMERO DE BOLETOS</h5>
                <section class="precios">
                  <div class="encabezado-precios">
                    <h1>PRECIOS</h1>
                    <img src="img/separador.png" alt="separador">
                  </div>
                  <div class="contenedor-precios">
                    <div id="un-dia" class="un-dia">
                      <p class="titulo">UN DIA</p>
                      <p class="precio">$30</p>
                      <p><i class="fas fa-check"></i>BOCADILLOS GRATIS</p>
                      <p><i class="fas fa-check"></i>TODAS LAS CONFERENCIAS</p>
                      <p><i class="fas fa-check"></i>TODOS LOS TALLERES</p>
                      <p class="entradas">Numero de entradas</p>
                      <form action="" class="entradas">
                        <input type="number" min="0" value=0 class="numero-entradas">
                      </form>
                    </div>
                    <div id="tres-dias" class="tres-dias">
                        <p class="titulo">TODOS LOS DIAS</p>
                        <p class="precio">$50</p>
                        <p><i class="fas fa-check"></i>BOCADILLOS GRATIS</p>
                        <p><i class="fas fa-check"></i>TODAS LAS CONFERENCIAS</p>
                        <p><i class="fas fa-check"></i>TODOS LOS TALLERES</p>
                        <p class="entradas">Numero de entradas</p>
                        <form action="" class="entradas">
                          <input type="number" min="0" value=0 class="numero-entradas">
                        </form>

                    </div>
                    <div id= "dos-dias" class="dos-dias">
                        <p class="titulo">DOS DIAS</p>
                        <p class="precio">$45</p>
                        <p><i class="fas fa-check"></i>BOCADILLOS GRATIS</p>
                        <p><i class="fas fa-check"></i>TODAS LAS CONFERENCIAS</p>
                        <p><i class="fas fa-check"></i>TODOS LOS TALLERES</p>
                        <p class="entradas">Numero de entradas</p>
                        <form action="" class="entradas">
                          <input type="number" min="0" value=0 class="numero-entradas">
                        </form>
                    </div>
                      
                  </div>
                </section>
                <h5>ELIGE TUS TALLERES</h5>
                <div id="viernes">
                  <form action="" class="dia">
                    <p class="dia-linea">Viernes</p>
                    <div class="seccion"><p>Talleres:</p>
                      <label for="talleres" class="talleres"><input type="checkbox" class="t1"><time>10:00</time>Responsive Web Design</label>
                      <label for="talleres" class="talleres"><input type="checkbox" class="t2"><time>11:00</time>HTML5</label>
                      <label for="talleres" class="talleres"><input type="checkbox" class="t3"><time>12:00</time>CSS3</label>
                      <label for="talleres" class="talleres"><input type="checkbox" class="t4"><time>13:00</time>JAVASCRIPT</label>
                      <label for="talleres" class="talleres"><input type="checkbox" class="t5"><time>14:00</time>ANGULAR</label>
                    </div>
                    
                    <div class="seccion"><p>Conferencias:</p>
                      <label for="conferencias" class="conferencias"><input type="checkbox" class="c1"><time>10:00</time>Responsive Web Design</label>
                      <label for="conferencias" class="conferencias"><input type="checkbox" class="c2"><time>11:00</time>React</label>
                      <label for="conferencias" class="conferencias"><input type="checkbox" class="c3"><time>12:00</time>HTML5</label>
                    </div>
                    
                    <div class="seccion"><p>Seminarios:</p>
                      <label for="seminarios" class="seminarios"><input type="checkbox" class="s1"><time>10:00</time>Responsive Web Design</label>
                    </div>
                </div>
                </form>
                <div id="sabado">
                  <form action=""  class="dia">
                    <p class="dia-linea">Sabado</p>
                    <div class="seccion"><p>Talleres:</p>
                      <label for="talleres" class="talleres"><input type="checkbox" class="t6"><time>10:00</time>Responsive Web Design</label>
                      <label for="talleres" class="talleres"><input type="checkbox" class="t7"><time>11:00</time>HTML5</label>
                      <label for="talleres" class="talleres"><input type="checkbox" class="t8"><time>12:00</time>CSS3</label>
                      <label for="talleres" class="talleres"><input type="checkbox" class="t9"><time>13:00</time>JAVASCRIPT</label>
                      <label for="talleres" class="talleres"><input type="checkbox" class="t10"><time>14:00</time>ANGULAR</label>
                    </div>
                    
                    <div class="seccion"><p>Conferencias:</p>
                      <label for="conferencias" class="conferencias"><input type="checkbox" class="c4"><time>10:00</time>Responsive Web Design</label>
                      <label for="conferencias" class="conferencias"><input type="checkbox" class="c5"><time>11:00</time>React</label>
                      <label for="conferencias" class="conferencias"><input type="checkbox" class="c6"><time>12:00</time>HTML5</label>
                    </div>
                    
                    <div class="seccion"><p>Seminarios:</p>
                      <label for="seminarios" class="seminarios"><input type="checkbox" class="s2"><time>10:00</time>Responsive Web Design</label>
                    </div>

                  </form>
                </div> 
                <div id="domingo">
                  <form action="" class="dia">
                    <p class="dia-linea">Domingo</p>
                    <div class="seccion"><p>Talleres:</p>
                      <label for="talleres" class="talleres"><input type="checkbox" class="t11"><time>10:00</time>Responsive Web Design</label>
                      <label for="talleres" class="talleres"><input type="checkbox" class="t12"><time>11:00</time>HTML5</label>
                      <label for="talleres" class="talleres"><input type="checkbox" class="t13"><time>12:00</time>CSS3</label>
                      <label for="talleres" class="talleres"><input type="checkbox" class="t14"><time>13:00</time>JAVASCRIPT</label>
                      <label for="talleres" class="talleres"><input type="checkbox" class="t15"><time>14:00</time>ANGULAR</label>
                    </div>
                    
                    <div class="seccion"><p>Conferencias:</p>
                      <label for="conferencias" class="conferencias"><input type="checkbox" class="c7"><time>10:00</time>Responsive Web Design</label>
                      <label for="conferencias" class="conferencias"><input type="checkbox" class="c8"><time>11:00</time>React</label>
                      <label for="conferencias" class="conferencias"><input type="checkbox" class="c9"><time>12:00</time>HTML5</label>
                    </div>
                    
                    <div class="seccion"><p>Seminarios:</p>
                      <label for="seminarios" class="seminarios"><input type="checkbox" class="s3"><time>10:00</time>Responsive Web Design</label>
                    </div>

                  </form>
                </div>    
                <h5>PAGO Y EXTRAS</h5>
                <form action="" class="pago">
                  <div class="seccion">
                    <div class="item">
                      <label for="camiseta"  >Camiseta 10$ <small>(7% de descuento)</small></label>
                      <input type="number" min="0" class="camiseta" value= "0">
                    </div>
                    <div class="item">
                      <label for="etiqueta"  >Etiqueta 5$</label>
                      <input type="number" min="0" class="etiqueta" value="0">
                    </div>
                    <div class="regalo">
                      <label for="regalo" class="regalo">
                        <select class="regalos" required>
                          <option value=" "> Elige un regalo </option>
                          <option value="pulsera"> Pulsera </option>
                          <option value="pluma"> Pluma </option>
                          <option value="etiqueta"> Etiqueta </option>
                        </select>
                      </label>
                    </div>
                    <button class="calcular">Calcular</button>
                  </div>
                  <div class="seccion">
                    <div class="pago">
                      <div class="lista"> <ul>RESUMEN:</ul></div>
                      <p class="total">TOTAL:</p>
                      <button class="pagar">PAGAR</button>
                    </div>
                  </div>
                </form>
            </div>

        
    </main>
    <?php include_once'includes/templates/footer.php'?>
  </div>
    
  
  
  
      
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
      <script src="js/vendor/modernizr-3.6.0.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>
  
      <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
      <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
      </script>
      <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  </body>
  
  </html>