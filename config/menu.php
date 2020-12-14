<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo MI_HOST; ?>/public/dist/img/user1-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p><?php echo $_SESSION['SesionUsuaNombre'] . " " . $_SESSION['SesionUsuaApellido'];?> </p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">NAVEGACIÓN PRINCIPAL</li>
        <li class="treeview">
            <a href="<?php echo MI_HOST; ?>">
                <i class="fa fa-dashboard"></i>
                <span>Atención</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/atencion/admisionar/index.php">
                        <i class="fa fa-circle-o"></i> Admisión
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="<?php echo MI_HOST; ?>">
                <i class="fa fa-dashboard"></i>
                <span>General</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/general/paciente/index.php">
                        <i class="fa fa-circle-o"></i> Paciente
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/general/personal/index.php">
                        <i class="fa fa-circle-o"></i> Personal
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="<?php echo MI_HOST; ?>">
                <i class="fa fa-dashboard"></i>
                <span>Contratación</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/contratacion/contratos/index.php">
                        <i class="fa fa-circle-o"></i> Contratos
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/contratacion/tarifas/index.php">
                        <i class="fa fa-circle-o"></i> Tarifas
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="<?php echo MI_HOST; ?>">
                <i class="fa fa-calendar"></i>
                <span>Citas</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/citas/agendarCitas/index.php">
                        <i class="fa fa-circle-o"></i> Citas
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/citas/historialCitasPacien/index.php">
                        <i class="fa fa-circle-o"></i> Consul. Citas Paciente
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/citas/consulAgendaMed/index.php">
                        <i class="fa fa-circle-o"></i> Consul. Agenda
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/citas/agendarCitas/planilla.php">
                        <i class="fa fa-circle-o"></i> Nueva Planilla
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="<?php echo MI_HOST; ?>">
                <i class="fa fa-cogs"></i>
                <span>Configuración</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/configuracion/CausaExterna/index.php">
                        <i class="fa fa-circle-o"></i> Causa Externa
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/configuracion/Diagnostico/index.php">
                        <i class="fa fa-circle-o"></i> Diagnósticos
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/configuracion/Empresa/index.php">
                        <i class="fa fa-circle-o"></i> Empresa
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/configuracion/Eps/index.php">
                        <i class="fa fa-circle-o"></i> EPS
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/configuracion/Finalidad/index.php">
                        <i class="fa fa-circle-o"></i> Finalidad
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/configuracion/Ocupacion/index.php">
                        <i class="fa fa-circle-o"></i> Ocupaciones
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/configuracion/Parentesco/index.php">
                        <i class="fa fa-circle-o"></i> Parentesco
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/configuracion/Producto/index.php">
                        <i class="fa fa-circle-o"></i> Productos
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/configuracion/Medicamento/index.php">
                        <i class="fa fa-circle-o"></i> Plantilla Medicamentos
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/configuracion/TipoAtencion/index.php">
                        <i class="fa fa-circle-o"></i> Tipo Atenciones
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/configuracion/TipoProducto/index.php">
                        <i class="fa fa-circle-o"></i> Tipo Productos
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/configuracion/GrupoProducto/index.php">
                        <i class="fa fa-circle-o"></i> Grupo Productos
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="<?php echo MI_HOST; ?>">
                <i class="fa fa-lock"></i>
                <span>Seguridad</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/Seguridad/Perfiles/index.php">
                        <i class="fa fa-circle-o"></i> Perfiles
                    </a>
                </li>
                <li>
                    <a href="<?php echo MI_HOST; ?>/modulos/view/Seguridad/Usuarios/index.php">
                        <i class="fa fa-circle-o"></i> Usuarios
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</section>