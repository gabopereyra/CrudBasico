<?php

include_once 'controladores/rutasC.php';
include_once 'controladores/adminC.php';
include_once 'modelos/rutasM.php';
include_once 'modelos/adminM.php';

$rutas=new RutasControlador();
$rutas->Plantilla();