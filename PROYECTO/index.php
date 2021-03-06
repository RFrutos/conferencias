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
  <link rel="stylesheet" href="css/lightbox.css">
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
    <section class="intro">
      <div class="contenedor-intro">
        <h1>La mejor conferencia de diseño web en español</h1>
        <img src="img/separador.png" alt="separador">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel dolorum nesciunt ab ipsum ut quae neque possimus incidunt accusantium. Fugiat voluptas, quo rerum nesciunt ex nobis sit! Aut, laboriosam adipisci.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora voluptate, culpa quae adipisci esse dolore! Quidem nesciunt aliquam sit eaque repellendus blanditiis voluptas assumenda nihil pariatur inventore! Quia, libero quae.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis cupiditate quas modi at tempora asperiores possimus vel dolores, laboriosam non sit doloremque, suscipit, magnam quidem sequi molestias. Accusamus, expedita illum.
        </p>
      </div>
    </section>
    <section class="hero">
      <div class="encabezado-hero">
          <h1>Programa del evento</h1>
          <img src="img/separador.png" alt="separador">
          <div class="iconos-programa">
              <button class="talleres"><i class="fas fa-code"></i><p>Talleres</p></button>
              <button class="conferencias"><i class="fas fa-comments"></i><p>Conferencias</p></button>
              <button class= seminarios><i class="fas fa-landmark"></i><p>Seminarios</p></button>
          </div>
      </div>
      <div class="contenido-hero">
        <div id="contenido-talleres" class="hero-flex">
          
          <div class="linea-naranja"><img src="img/linea naranja talleres.jpg" alt="flecha"></div>
          <div class="contenedor-talleres">
            <div class="contenido-1">
              <h3>HTML5, CSS3 Y JavaScript</h3>
              <p><i class="far fa-clock"></i>14:00 hrs</p>
              <p><i class="far fa-calendar-alt"></i>10 de Dic</p>
              <p><i class="fas fa-user-alt"></i>Juan Pablo De la torre</p>
            </div>
            <div class="linea-negra"></div>
            <div class="contenido-2">
              <h3>Responsive web design</h3>
              <p><i class="far fa-clock"></i>14:00 hrs</p>
              <p><i class="far fa-calendar-alt"></i>10 de Dic</p>
              <p><i class="fas fa-user-alt"></i>Juan Pablo De la torre</p>
            </div>
          </div>
          <div class="ver-todos">
            <a href= calendario.php class="ver-todos">VER TODOS</a>
          </div>    
        </div>
        <div id="contenido-conferencias" class="hero-flex">
          
          <div class="linea-naranja"><img src="img/linea naranja conferencia.jpg" alt="flecha"></div>
          <div class="contenedor-talleres">
            <div class="contenido-1">
              <h3>React y Angular</h3>
              <p><i class="far fa-clock"></i>14:00 hrs</p>
              <p><i class="far fa-calendar-alt"></i>11 de Dic</p>
              <p><i class="fas fa-user-alt"></i>Juan Carlos Frutos</p>
            </div>
            <div class="linea-negra"></div>
            <div class="contenido-2">
              <h3>Responsive web design</h3>
              <p><i class="far fa-clock"></i>14:00 hrs</p>
              <p><i class="far fa-calendar-alt"></i>11 de Dic</p>
              <p><i class="fas fa-user-alt"></i>Juan Pablo De la torre</p>
            </div>
          </div>
          <div class="ver-todos">
            <a href= calendario.html class="ver-todos">VER TODOS</a>
          </div>    
        </div>
        <div id="contenido-seminarios" class="hero-flex">
          <div class="linea-naranja"><img src="img/linea naranja seminario.jpg" alt="flecha"></div>
          <div class="contenedor-talleres">
            <div class="contenido-1">
              <h3>Google nos espia</h3>
              <p><i class="far fa-clock"></i>14:00 hrs</p>
              <p><i class="far fa-calendar-alt"></i>12 de Dic</p>
              <p><i class="fas fa-user-alt"></i>Pepe Luis</p>
            </div>
            <div class="linea-negra"></div>
            <div class="contenido-2">
              <h3>Responsive web design</h3>
              <p><i class="far fa-clock"></i>14:00 hrs</p>
              <p><i class="far fa-calendar-alt"></i>12 de Dic</p>
              <p><i class="fas fa-user-alt"></i>Juan Pablo De la torre</p>
            </div>
          </div>
          <div class="ver-todos">
            <a href= calendario.html class="ver-todos">VER TODOS</a>
          </div>    
        </div>  
      </div>
    </section>
    <section class="invitados">
      <div class="encabezado-invitados">
        <h1>NUESTROS INVITADOS</h1>
        <img src="img/separador.png" alt="separador">
      </div>
      <div class="fotos-invitados">
        <div class="inv-1"><p>RAFAEL BAUTISTA</p></div>
        <div class="inv-2"><p>SHARI HERRERA</p></div>
        <div class="inv-3"><p>GREGORIO SANCHEZ</p></div>
        <div class="inv-4"><p>SUSANA RIVERA</p></div>
        <div class="inv-5"><p>HAROLD GARCIA</p></div>
        <div class="inv-6"><p>SUSAN SANCHEZ</p></div>
      </div>
    </section>
    <section class="resumen">
      <div class="contenedor-resumen">
        <div class="apartado">
          <p class="numero">0</p>  
          <p class="texto">Invitados</p>
        </div>
        <div class="apartado">
          <p class="numero">0</p>  
          <p class="texto">Talleres</p>
        </div>
        <div class="apartado">
          <p class="numero">0</p>  
          <p class="texto">Días</p>
        </div>
        <div class="apartado">
          <p class="numero">0</p>  
          <p class="texto">Conferencias</p>
        </div>      
      </div>
    </section>
    <section class="precios">
      <div class="encabezado-precios">
        <h1>PRECIOS</h1>
        <img src="img/separador.png" alt="separador">
      </div>
      <div class="contenedor-precios">
        <div class="un-dia">
          <p class="titulo">UN DIA</p>
          <p class="precio">$30</p>
          <p><i class="fas fa-check"></i>BOCADILLOS GRATIS</p>
          <p><i class="fas fa-check"></i>TODAS LAS CONFERENCIAS</p>
          <p><i class="fas fa-check"></i>TODOS LOS TALLERES</p>
          <a href="registro.php">COMPRAR</a>
        </div>
        <div class="tres-dias">
            <p class="titulo">TODOS LOS DIAS</p>
            <p class="precio">$50</p>
            <p><i class="fas fa-check"></i>BOCADILLOS GRATIS</p>
            <p><i class="fas fa-check"></i>TODAS LAS CONFERENCIAS</p>
            <p><i class="fas fa-check"></i>TODOS LOS TALLERES</p>
            <a href="registro.php">COMPRAR</a>
        </div>
        <div class="dos-dias">
            <p class="titulo">DOS DIAS</p>
            <p class="precio">$45</p>
            <p><i class="fas fa-check"></i>BOCADILLOS GRATIS</p>
            <p><i class="fas fa-check"></i>TODAS LAS CONFERENCIAS</p>
            <p><i class="fas fa-check"></i>TODOS LOS TALLERES</p>
            <a href="registro.php">COMPRAR</a>
        </div>
          
      </div>
    </section>
    <section class="mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d12049.8357746683!2d-5.656322149999999!3d40.971430250000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e2!4m3!3m2!1d40.973099!2d-5.6585966999999995!4m0!5e0!3m2!1sen!2ses!4v1551859266791" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <section class="testimoniales">
        <div class="encabezado-testimoniales">
          <h1>TESTIMONIALES</h1>
          <img src="img/separador.png" alt="separador">
        </div>
        <div class="contenedor-testimoniales">
          <div class="testimonial-1">
            <div class="opinion">
            <i class="fas fa-quote-left"></i>    
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque quas animi consequatur temporibus cum! Ipsam expedita impedit et iste, illo consequuntur, doloribus enim sint voluptatem ducimus ad harum, obcaecati facilis.</p>
            </div>
            <div class="persona">
              <img src="img/invitado1.jpg" alt="invitado1">
              <div class="texto">
              <p class="nombre">OSWALDO WENCESLAO</p>
              <p>Diseñador en @prisma</p></div>
            </div>
          </div>
          <div class="testimonial-2">
              <div class="opinion">
              <i class="fas fa-quote-left"></i>    
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque quas animi consequatur temporibus cum! Ipsam expedita impedit et iste, illo consequuntur, doloribus enim sint voluptatem ducimus ad harum, obcaecati facilis.</p>
              </div>
              <div class="persona">
                <img src="img/invitado2.jpg" alt="invitado2">
                <div class="texto"><p class="nombre">SUSAN PEREZ</p>
                <p>Diseñador en @prisma</p></div>
              </div>
          </div>
          <div class="testimonial-3">
              <div class="opinion">
              <i class="fas fa-quote-left"></i>    
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque quas animi consequatur temporibus cum! Ipsam expedita impedit et iste, illo consequuntur, doloribus enim sint voluptatem ducimus ad harum, obcaecati facilis.</p>
              </div>
              <div class="persona">
                <img src="img/invitado3.jpg" alt="invitado3">
                <div class="texto"><p class="nombre">JUAN CARLOS FRUTOS</p>
                <p>Diseñador en @prisma</p></div>
              </div>
          </div>    
        </div>
    </section>
    <section class="newsletter">
      <p class="parrafo">regístrate en el newsletter</p>
      <p class="titulo">gdlwebcamp</p>
      <a href= "#" class="boton">regístrate</a>
    </section>
    <section class="contador">
      <div class="encabezado-contador">
        <h1>FALTAN</h1>
        <img src="img/separador.png" alt="separador">
      </div>
      <div class="contenido-contador">
        <div class="item">
          <p class="numero"></p>
          <p class="texto">Días</p>
        </div>
        <div class="item">
          <p class="numero"></p>
          <p class="texto">horas</p>
        </div>
        <div class="item">
          <p class="numero"></p>
          <p class="texto">minutos</p>
        </div>
        <div class="item">
          <p class="numero"></p>
          <p class="texto">segundos</p>
        </div>
      </div>
    </section>  
    <?php include_once'includes/templates/footer.php'?>
  </div>
  



    
















    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jQuery v3.4.0.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jQuery v3.4.0.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/animateNumber.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/ligthbox.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
      window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
      ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
