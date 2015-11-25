<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Operadores en SendItExpress</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?php echo URL_BASE;?>/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo URL_BASE;?>/public/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo URL_BASE?>/public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

       
         <link href="<?php echo URL_BASE."/public/css/custom.css";?>" rel="stylesheet" media="screen">
</head>
<body id="page-top" class="index">
    <center>
<header class="navbar navbar-default">
SendItExpress
    

</header></center>
    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Operadores</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>



                     <li class="page-scroll">
                    <a href="<?php echo URL_BASE."/index.php/operador/listarOperador"?>">Ver Operadores</a>
                    </li>
                   
                  <li class="page-scroll">
                        <a href="<?php echo URL_BASE."/index.php/Index/index"?>">Pagina Principal</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">


<section>
  <center><h1>Registrar Operador </h1></center>
</section>

<section>
<center>
<form class="form-horizontal">

<div class="form-group">
        <label class="control-label col-xs-3">Id Operador:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" placeholder="001">
        </div>
    </div>


<div class="form-group">
        <label class="control-label col-xs-3">Nombre Operador:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" placeholder="Alejandro">
        </div>
    </div>

<div class="form-group">
        <label class="control-label col-xs-3">Apellidos:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" placeholder="Arvizu Sanchez">
        </div>
    </div>

<div class="form-group">
        <label class="control-label col-xs-3">Placa del Vehiculo:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" placeholder="WX-156AR">
        </div>
    </div>

 </div> 

  <center>
  <a href="<?php echo URL_BASE;?>/index.php/operador/listarOperador" class="btn btn-primary btn-lg active" role="button">Guardar</a>
  <a href="<?php echo URL_BASE;?>/index.php/operador/nuevoOperador"  class="btn btn-primary btn-lg active" role="button">Cancelar</a></center>


</center>
</form>






  
</section>


           

           




    <!-- jQuery -->
    <script src="<?php echo URL_BASE;?>/public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo URL_BASE;?>/public/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo URL_BASE;?>/public/js/classie.js"></script>
    <script src="<?php echo URL_BASE;?>/public/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo URL_BASE;?>/public/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo URL_BASE;?>/public/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo URL_BASE;?>/public/js/freelancer.js"></script>



       

</body>

</html>
