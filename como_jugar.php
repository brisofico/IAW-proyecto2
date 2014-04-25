
<!doctype html>


<html lang="en">
<head>

  <title>Copa Mundial 2014</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="images/icon.ico"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
  
  <link id="user_style" rel="stylesheet" type="text/css" href="css/style.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  <!-- Scripts -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
  
  <script src="js/jquery.js" type="text/javascript"></script>
  
  <script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/loadXML.js" type="text/javascript"></script>
  <script src="js/script.js" type="text/javascript"></script>
  <script src="js/cookies.js" type="text/javascript"></script>
  

</head>

<body>	

  <!--Seccion de Header-->
  <header>
      <div id="banner">
      <img src="images/banner.jpg" id="imagen_banner" alt="">
      </div>
  </header>

  <!--Seccion de Navegacion-->
  <nav role="navigation" class="navbar  my-nav">
      <div class="">
        <div class="row">
          <div class="col-md-12">
                  <div class="col-md-6">
                  <img href="./" src="images/titulo.png">                
                  </div>      
                  <div class="col-md-6">
                  <div id="navbarCollapse" class="collapse navbar-collapse">
                      <ul id="my-navbar" class="nav navbar-nav navbar-right my-navbar">
                          <li><a href="./"><span class="fa fa-home"> Inicio</span></a></li>
                          <li><a onclick=" changeTheme();" href="#"><span class="fa fa-edit"> Estilo</span></a></li>
                          <li><a onclick="contact()" href="#"><span class="fa fa-barcode"> Contacto</span></a></li>
                          <li><a href="readme.html"><span class="fa fa-file-text-o"> Readme</span></a></li>
                          <li><a class="active" href="como_jugar.html"><span class="fa fa-question"> Cómo Jugar</span></a></li>
                      </ul>
                  </div>  
                  </div> 
          </div>
        </div>  
      </div>
  </nav>

  
  <div id="dialogo" title="Datos Autores">
    <p>Autores:<br/><br/> - Brian Magario  LU:89658<br/> <br/> - Magin Suarez  LU:85429 </p>
  </div>

  <div class="container my-container-readme">
    <div class="my-contenido-readme">
      <div class="my-texto-readme">
    
        <h1>¿Cómo Jugar?</h1>  

        <h2>Predicción Mundial</h2>
        <p>
          Predicción Mundial es una página de entretenimiento relacionada con el mundial de fútbol Brasil 2014. Aquí usted podrá simular los resultados de los partidos preliminares como así también los resultados de la sección playoff.
        </p>

        <h3>¿Cómo comienzo?</h3>
        <ul>
          <li>Modo Manual:
            <p>En este modo, usted puede ir completando uno a uno los campos de los grupos en el orden que se desee. Simplemente una vez que se completaron todos los campos de un mismo grupo, se habiltiarán los campos correspondientes en la zona de playoff-octavos y automáticamente se mostrarán los equipos que pasaron a tal instancia.</p>
            <p>Una vez hecho esto usted puede pasar a a completar los playoffs en el orden de octavos, luego cuartos, luego semifinales y por último la final.</p>
          </li>
          <li>Modo Automático:
            <p>
              Para poder usar este modo, diríjase a la barra de navegación en el tope de la página, busque la opción "Acciones" y presione "Cargar Datos". Luego usted podra ver que automáticamente se cargarán todos los campos y se computarán los resultados.
            </p>
          </li>
        </ul>
        <p>
          Una cuestión a tener en cuenta, para el caso del ingreso de datos en cada grupo, es que una vez que usted ingresó un dato, el campo se deshabilita al menos que usted utilice la opción "Borrar Datos" ubicada en el mismo sitio que "Cargar Datos". Esto es simplemente porque el juego se avoca a la sección de playoffs que es lo mas interesante del mundial.
          Por último, para cualquier modo, ya sea manual o automático, para la sección de playoffs, si los valores de los campos de un mismo partidos resultan ser iguales, es decir, se generó un empate, por simplicidad se decide pasar a la próxima instancia el equipo que está situado (visualmente) a la izquierda.
        </p>

        <h3>Autores</h3>
        <p>Alberto M. Suarez LU: 85429<br>
           Brian E. Magario LU: 89658
        </p>
      </div>
    </div>
  </div>


  <!--Seccion de Footer-->
	<footer class="footer">
		© 2014 Brian E. Magario - Alberto M. Suarez. All rights reserved.         
	</footer>

</body>
</html>