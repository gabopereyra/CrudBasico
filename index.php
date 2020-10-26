<?php

include_once 'controladores/rutasC.php';
include_once 'controladores/adminC.php';
include_once 'controladores/empleadosC.php';

include_once 'modelos/rutasM.php';
include_once 'modelos/adminM.php';
include_once 'modelos/empleadosM.php';

$rutas=new RutasControlador();
$rutas->Plantilla();