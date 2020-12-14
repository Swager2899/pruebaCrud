<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo MI_HOST; ?>/public/dist/img/user1-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>User</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">NAVEGACIÓN PRINCIPAL</li>
        
        <li class="treeview">
            <a href="#">
                <i class="fa fa-cogs"></i>
                <span>Configuración</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/configuracion/Ocupacion/index.php">
                        <i class="fa fa-circle-o"></i> Ocupaciones
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</section>