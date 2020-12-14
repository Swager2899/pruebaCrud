<?php
require_once '../../../config/class.conexion.php';
require_once '../../clases/configuracion/class.Ocupacion.php';
/**********************************************************
*
*   Variables
*   
**********************************************************/
$Accion         = isset($_POST['accion'])    ? $_POST['accion']    : null;
$IdOcupacion    = isset($_POST['id_ocupa'])  ? $_POST['id_ocupa']  : null;
$NomOcupacion   = isset($_POST['nom_ocupa']) ? $_POST['nom_ocupa'] : null;
$CodOcupacion   = isset($_POST['cod_ocupa']) ? $_POST['cod_ocupa'] : null;
$Acti           = isset($_POST['acti'])      ? $_POST['acti']      : null;
/**********************************************************
*
*   Acciones
*   
**********************************************************/
switch ($Accion) {
    case 'INSERTAR':
        $Ocupacion = new Ocupacion();
        $Ocupacion->set_Accion($Accion);
        $Ocupacion->set_NomOcupacion($NomOcupacion);
        $Ocupacion->set_CodOcupacion($CodOcupacion);
        $Ocupacion->set_Acti($Acti);
        if($Ocupacion->Gestionar() == true){
            echo 1;
            exit();
        }
        
        break;
    case 'EDITAR':
        $Ocupacion = new Ocupacion();
        $Ocupacion->set_Accion($Accion);
        $Ocupacion->set_IdOcupacion($IdOcupacion);
        $Ocupacion->set_NomOcupacion($NomOcupacion);
        $Ocupacion->set_CodOcupacion($CodOcupacion);
        $Ocupacion->set_Acti($Acti);
        if($Ocupacion->Gestionar() == true){
            echo 1;
            exit();
        }
        
    break;

    case 'ACTIVAR':
        $Ocupacion = new Ocupacion();
        $Ocupacion->set_Accion($Accion);
        $Ocupacion->set_IdOcupacion($IdOcupacion);
        $Ocupacion->set_Acti($Acti);
        if($Ocupacion->Gestionar() == true){
            echo 1;
            exit();
        }
    break;

    case 'ELIMINAR':
    
    $Ocupacion = new Ocupacion();
    $Ocupacion->set_Accion($Accion);
    $Ocupacion->set_IdOcupacion($IdOcupacion);
    if($Ocupacion->Gestionar() == true){
        echo 1;
        exit();
    }
    break;    
}
?>