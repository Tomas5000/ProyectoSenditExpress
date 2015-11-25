<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Envios en SendItExpress</title>

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
<header class="navbar navbar-default">senditexpress

</header>
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
                <a class="navbar-brand" href="#page-top">Envios</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>

                    <li class="page-scroll">
                        <a href="<?php echo URL_BASE."/index.php/envio/nuevoEnvio"?>">Ver Envios</a>
                    </li>
                    
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- About Section -->
  
<section>
  <center><h1>Envios en SendItExpress </h1></center>
</section>
    <body>
        
  <div class="container">
    <div class="row">
        <div class="container-fluid">
            <div class="panel-heading">
                
               
            </div>
            <table class="table">
                <thead>
                    <tr>
                  <th>Remitente</th>
                  <th>Destinatario  </th> 
                  <th>Operador  </th>
                  <th >Folio de Envio  </th>
                  <th>Numero de Guia  </th>
                  <th>Numero de Cajas del Envio  </th>
                  <th>Fecha de Recepcion  </th>
                  <th>Fecha Aproximada de Entrega  </th>
                  <th>Fecha Real de Entrega  </th> 
                  <th>Subtotal  </th>
                  <th>Iva </th>
                  <th>Total  </th>
                  <th>Factura  </th>
                  <th>Forma de Pago  </th>
                  <th>Numero de Cuenta  </th>
                  <th>Estado  </th>
                  <th >Estado Origen  </th>
                  <th>Estado Destino  </th>
                  <th >Quien Paga  </th>
                  <th >Quien Recibe  </th>
                  <th >IFE de Quien Recibe  </th>
                  
                </tr>
              </thead> 
                <tbody>

                    <?php $datos = $this->getDatos(); foreach ($datos as $key=>$envio):?>
                    <tr>
                        <td><?php echo $envio->rfcRem;?></td>
                        <td><?php echo $envio->rfcDest;?></td>
                        <td><?php echo $envio->idOperador;?></td>
                        <td><?php echo $envio->folioEnvio;?></td>
                        <td><?php echo $envio->nGuia;?></td>
                        <td><?php echo $envio->nCajas;?></td>
                        <td><?php echo $envio->fRece;?></td>
                        <td><?php echo $envio->fAprox;?></td>
                        <td><?php echo $envio->subtotal;?></td>
                        <td><?php echo $envio->iva;?></td>
                        <td><?php echo $envio->total;?></td>
                        <td><?php echo $envio->factura;?></td>
                        <td><?php echo $envio->formaPago;?></td>
                        <td><?php echo $envio->nCuenta;?></td>
                        <td><?php echo $envio->estado;?></td>
                        <td><?php echo $envio->estOri;?></td>
                        <td><?php echo $envio->estDest;?></td>
                        <td><?php echo $envio->qPaga;?></td>
                        <td><?php echo $envio->qRecibe;?></td>
                        <td><?php echo $envio->ifeRecibe;?></td>
                        <td><?php echo $envio->fReal;?></td>

                   </tr>
                <?php endforeach;?>

                </tbody>
            </table>
        </div>
        <center>
        
        <a href="<?php echo URL_BASE;?>/index.php/envio/nuevoEnvio" class="btn btn-primary btn-lg active" role="button">Editar</a>
        <a href="<?php echo URL_BASE;?>/index.php/operador/listarOperador" class="btn btn-primary btn-lg active" role="button">Eliminar</a>
        </center>
    </section>


       






   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src ="<?php echo URL_BASE."/public/js/bootstrap.min.js";?>"type="text/javascript" charset = "utf-8" async defer></script>

     <script src ="<?php echo URL_BASE."/public/js/custom.js";?>"type="text/javascript" charset = "utf-8" async defer></script>

   
    </body>
    </html>