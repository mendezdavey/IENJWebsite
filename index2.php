<!DOCTYPE html>

<html>
	<head>
		<!-- Website Title & Description for Search Engine purposes -->
		<title>Bienvenidos a IENJ</title>
		<meta name="description" content="">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link href="includes/css/styles3.css" rel="stylesheet">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
	</head>
  <body>
	<!-- Your Code Goes Here. Remember to remove this comment once you've started, you don't need it :) -->
	    <!-- container class makes everything
        centered with right and left margins -->
        <!-- navbar-fixed-top makes the navbar follow the user
        (Im not going to use this for now maybe later)-->
        <div class="navbar navbar-fixed-top">
            <div class="container">
                <!-- this is targeting the navbar-responsive-collapse class -->
                <button class="navbar-toggle" data-target=".navbar-responsive-collapse"
                        data-toggle="collapse" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
            <a class="navbar-brand" href="index.php">Iglesia Evangelica Nueva Jerusalem</a>
             
                   <div class="nav-collapse collapse navbar-responsive-collapse">

                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="index.php">INICIO</a>
                            </li>
                            <li class="">
                                <a href="quienes_somos.html">QUIENES SOMOS</a>
                            </li>
                            <li class="">
                                <a href="contactanos.html">CONTACTANOS</a>
                            </li>
             
                        </ul>
                    </div><!-- end nav-collapse -->
                
            </div><!-- end container-->
        </div><!-- end navbar navbar-fixed-top -->
      <div class="container">
        <div class="main">
          <div class="row">

                <div class="container">
                    <div class="carousel slide" id="myCarousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
                            <li data-slide-to="1" data-target="#myCarousel"></li>
                            <li data-slide-to="2" data-target="#myCarousel"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active" id="slide1">
                                <div class="carousel-caption">
                                    <h4>Bienvenidos Querido Visitante</h4>
                                    <p>La Iglesia Nueva Jerusalem somos una iglesia dedicada a la edificacion del pueblo de Dios.</p>
                                </div><!-- end carousel-caption-->
                            </div><!-- end item -->
                            <div class="item" id="slide2">
                                <div class="carousel-caption">
                                    <h4>Salmos 42:1</h4>
                                    <p>Como el ciervo brama por las corrientes de las aguas, así clama por ti, oh Dios, el alma mía.</p>
                                </div><!-- end carousel-caption-->
                            </div><!-- end item -->
                            <div class="item" id="slide3">
                                <div class="carousel-caption">
                                    <h4>Habacuc 2:14</h4>
                                    <p>Pues la tierra se llenará del conocimiento de la gloria del SEÑOR como las aguas cubren el mar.</p>
                                </div><!-- end carousel-caption-->
                            </div><!-- end item -->
                        </div><!-- end carousel inner -->
                        <!-- Controls -->
                        <a class="left carousel-control" data-slide="prev" href="#myCarousel">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" data-slide="next" href="#myCarousel">
                            <span class="icon-next"></span>
                        </a>
                    </div><!-- end myCarousel-->
                </div><!-- end carosel container -->

          </div><!-- end class row -->

          <div class="row">
              <div class="col-12">
                <h2>Iglesia Evangelica Nueva Jerusalem, Manor, TX</h2>
                <p class="lead">Que Dios te bendiga y que haga resplandecer tu rostro sobre ti!</p>
              </div><!-- end col-12 -->
          </div><!-- end class row -->
          
          <div class="row">
            <div class="col-12">
              <h3>Bienvenidos</h3>
                <p>Somos una iglesia que busca hacer la voluntad de El Padre, para glorificarle por la salvacion que nos a dado atravez de nuestro senor Jesucristo. Nosotros no buscamos nuestro beneficio personal sino que buscamos que Dios sea glorificado en nuestras obras. Si tu quieres aprender de la palabra de Dios te invitamos para que te unas a nuestra congregacion. Oramos que Dios te guie y que resplandesca su rostro sobre de ti.</p>
            </div><!-- end col-12 -->
          </div><!-- end class row -->

          <div class="row">

            <div class="col-sm-6">

              <h3>Ubicacion</h3>
                <hr>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d861.1582863422125!2d-97.5266996665444!3d30.304503726674905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644b8ac8b8d35cf%3A0x181af58855798f2a!2s18400+Lockwood+Rd%2C+Manor%2C+TX+78653!5e0!3m2!1sen!2sus!4v1406340671782" width="100%" height="350" frameborder="0" style="border:0">
                </iframe>
            </div><!-- end col-sm-6 -->
            <div class="col-sm-6">
              
              <h3>Servicios</h3>
              <hr>
              <em>Domingo</em><br>
              10:00am - 12:00pm (<em>primer servicio</em>) <br>
              6:00pm - 9:00pm (<em>segundo servicio</em>) 
              <br><br>

              <em>Martes</em><br>
              7:00pm - 9:00pm<br><br>

              <em>Viernes</em><br>
              7:00pm - 9:00pm<br><br>

              <em>Lunes, Miercoles, Jueves, Sabado</em><br>
              Cerrado<br><br>

              <?php include('includes/store-hours.php'); ?>

            </div><!-- end col-sm-6 -->
          </div><!-- end class row -->

        </div><!-- end main -->
      </div><!-- end class container --> 


      

	    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <h6>Copyright &copy; 2014 Iglesia Evangelica Nueva Jerusalem</h6>
                </div><!-- end col-sm-2 -->
                <div class="col-sm-4">
                    <h6>QUIENES SOMOS</h6>
                    <p>Nosotros somos una Iglesia guiados por el Espiritu Santo</p>
                </div><!-- end col-sm-2 -->
                <div class="col-sm-2">
                    <h6>NAVEGACION</h6>
                    <ul class="unstyled">
                        <li><a href="#">INICIO</a></li>
                        <li><a href="#">QUIENES SOMOS</a></li>
                        <li><a href="#">CONECTATE</a></li>
                        <li><a href="#">CONTACTANOS</a></li>
                    </ul>
                </div><!-- end col-sm-2 -->
                <div class="col-sm-2">
                    <h6>SIGUENOS</h6>
                    <ul class="unstyled">
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Google Plus</a></li>
                        <li><a href="#">Contactanos</a></li>
                    </ul>
                </div><!-- end col-sm-2 -->
                <div class="col-sm-2">
                    <h6>Juan 3:16 <span class="glyphicon glyphicon-heart"></span></h6>

                </div><!-- end col-sm-2 -->
            </div><!-- end row-->
        </div>

    </footer>	
	</body>
	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>
</html>

