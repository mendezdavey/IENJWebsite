<!DOCTYPE html>

<html>
	<head>
		<!-- Website Title & Description for Search Engine purposes -->
		<title><?php echo TITLE; ?></title>
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
                            <li class="">
                                <a href="index.php">INICIO</a>
                            </li>
                            <li class="">
                                <a href="quienes_somos.php">QUIENES SOMOS</a>
                            </li>
                            <li class="">
                                <a href="contactanos.php">CONTACTANOS</a>
                            </li>
             
                        </ul>
                    </div><!-- end nav-collapse -->
                
            </div><!-- end container-->
        </div><!-- end navbar navbar-fixed-top -->
      <div class="container">
        <div class="main">