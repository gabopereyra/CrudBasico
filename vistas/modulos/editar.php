<?php 

session_start();
if (!$_SESSION["Ingreso"]) {
	header("location:index.php?ruta=ingreso");

	exit();
}
?>

<br>
<h1>EDITAR EMPLEADO</h1>

<form method="post">

    <?php

    $registrar = new EmpleadosC();
    $registrar -> EditarEmpleadosC();

    $registrar = new EmpleadosC();
    $registrar -> ActualizarEmpleadosC();

    ?>

</form>


