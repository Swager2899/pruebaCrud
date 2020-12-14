<?php
require_once '../../../../config/variables.php';
require_once '../../../../config/class.conexion.php';
require_once '../../../clases/configuracion/class.Ocupacion.php';

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
    <div class="control-sidebar-bg"></div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Configuración 
                <small>Ocupaciones</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
                <li><a href="#">Configuración</a></li>
                <li class="active">Ocupaciones</li>
            </ol>
        </section>
        <div id="DivAlerta"></div>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            <a href="Ocupacion-agre.php">
                                <img src="../../../../public/dist/img/agregar.png" alt="" width="30">
                            </a>
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:10%"></th>
                                        <th style="width:20%">Cod Ocupación</th>
                                        <th style="width:60%">Nom Ocupación</th>
                                        <th style="width:10%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $Ocupacion = Ocupacion::Listar(1);
                                    foreach($Ocupacion as $Item): 
                                        $Checkd = "";

                                        if($Item['acti'] == 1){
                                            $Checkd = "checked";
                                        }
                                        ?>
                                        <tr id="TrDatos<?php echo $Item['id_ocupa'];?>">
                                            <td>
                                                <div class="material-switch pull-left">
                                                    <input id="ChkActi<?php echo $Item['id_ocupa'] ?>" name="ChkActi" type="checkbox" <?php echo $Checkd; ?> class="Activar" data-id_ocupa="<?php echo $Item['id_ocupa'] ?>" data-nom_ocupa="<?php echo $Item['nom_ocupa'] ?>"/>
                                                    <label for="ChkActi<?php echo $Item['id_ocupa'] ?>" class="label-success"></label>
                                                </div>
                                            </td>
                                            <td><?php echo $Item['cod_ocupa']; ?></td>
                                            <td><?php echo $Item['nom_ocupa']; ?></td>
                                            <td>
                                                <a href="Ocupacion-actu.php?id=<?php echo $Item['id_ocupa'];?>" class="btn btn-warning btn-xs" id="btnEdita" data-toggle="modal" href=""><i class="fa fa-edit"></i></a>
                                                <a type="submit" class="btn btn-danger btn-xs Eliminar" id="id<?php echo $Item['id_ocupa'] ?>" name="Eliminar" type="hidden" data-id_ocupa="<?php echo $Item['id_ocupa'] ?>" data-nom_ocupa="<?php echo $Item['nom_ocupa'] ?>"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th style="width:10%"></th>
                                        <th style="width:20%">Cod Ocupación</th>
                                        <th style="width:60%">Nom Ocupación</th>
                                        <th style="width:10%"></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.2
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>
    <!-- ./wrapper -->

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
    <!-- page script -->
    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página.",
                    "zeroRecords": "No se encontró registro.",
                    "info": "  _START_ de _END_ (_TOTAL_ registros totales).",
                    "infoEmpty": "0 de 0 de 0 registros",
                    "infoFiltered": "(Encontrado de _MAX_registros)",
                    "search": "Buscar: ",
                    "zeroRecords": "No se han encontrado coincidencias.",
                    "processing": "Procesando la información",
                    "paginate": {
                       "first": " |< ",
                       "previous": "Ant.",
                       "next": "Sig.",
                       "last": " >| "
                   },
                   "aria": {
                    "sortAscending":    "Ordenación ascendente",
                    "sortDescending":   "Ordenación descendente"
                }
            }
        });
        });
    </script>
    <script src="../../../../public/plugins/sweetalert2/sweetalert-dev.js"></script>
    <link rel="stylesheet" type="text/css" href="../../../../public/plugins/sweetalert2/sweetalert.css">
</body>
</html>
