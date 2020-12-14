<?php
require_once '../../../../config/variables.php';
require_once '../../../../config/class.conexion.php';
require_once '../../../clases/configuracion/class.Ocupacion.php';

$Ocupacion = Ocupacion::Buscar(1, $_REQUEST['id'], "", "", "", "");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo MI_NOMBRE; ?>, Configuración</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="../../../../public/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="../../../../public/plugins/datatables/dataTables.bootstrap.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../../../public/dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="../../../../public/dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="../../../../public/dist/css/stilo_check.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
         <?php require_once '../../../../config/cabeza.php' ?>
    </header>
    <aside class="main-sidebar">
        <?php require_once '../../../../config/menu.php' ?>
    </aside>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Configuración 
                <small>Ocupación</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li><a href="#">Configuración</a></li>
                <li class="active">Ocupación</li>
            </ol>
        </section>
        <section class="content">
            <div id="alerta"></div>
            <form id="frm-datos" action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Editar Ocupación</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="hidden" id="id_ocupa" name="id_ocupa" value="<?php echo $Ocupacion->get_IdOcupacion(); ?>">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nom_ocupa" value="<?php echo $Ocupacion->get_NomOcupacion(); ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="cod_ocupa" value="<?php echo $Ocupacion->get_CodOcupacion(); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <button type="button" class="btn btn-warning btn-sm" id="btnEditar">
                                       <i class="fa fa-edit"></i> Editar
                                    </button>
                                    <a href="index.php" type="button" id="BtnRegresar" class="btn btn-info btn-sm">
                                        <i class="fa fa-reply"></i> Regresar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>
<!-- jQuery 2.2.0 -->
<script src="../../../../public/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../../../../public/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../../../public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../../public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../../../public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../../../public/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../../../public/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../../public/dist/js/demo.js"></script>
<!-- Funciones AJAX -->
<script src="funcionesOcupa.ajax.js"></script>
</body>
</html>
