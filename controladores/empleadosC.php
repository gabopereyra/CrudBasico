<?php

class EmpleadosC {
    public function RegistrarEmpleadosC(){
        if(isset($_POST["nombreR"])){
            $datosC=array(
                "nombre" => $_POST["nombreR"],
                "apellido" => $_POST["apellidoR"],
                "email" => $_POST["emailR"],
                "puesto" => $_POST["puestoR"],
                "salario" => $_POST["salarioR"]
            );

            $tablaBD = "empleados";

            $respuesta = EmpleadosM::RegistrarEmpleadosM($datosC, $tablaBD);

            if($respuesta == "Bien"){
                header("location:index.php?ruta=empleados");
            } else{
                echo "Error";
            }
        } 
    } //Fin funcion registrar empleados

    public function MostrarEmpleadosC(){
        $tablaBD="empleados";

        $respuesta = EmpleadosM::MostrarEmpleadosM($tablaBD);

        foreach($respuesta as $key => $value){
            echo '<tr>
            <td>'.$value["nombre"].'</td>
            <td>'.$value["apellido"].'</td>
            <td>'.$value["email"].'</td>
            <td>'.$value["puesto"].'</td>
            <td>$ '.$value["salario"].'</td>

            <td><a href="index.php?ruta=editar&id='.$value["id"].'"><button>Editar</button></a></td>

            <td><button>Borrar</button></td>

        </tr>';
        }		
    } //Fin funcion mostrar empleados

    public function EditarEmpleadosC(){
        $datosC = $_GET['id'];
        $tablaBD = "empleados";
        $respuesta = EmpleadosM::EditarEmpleadosM($datosC, $tablaBD);

        echo '
        <input type="hidden" name="idE" value="'.$respuesta["id"].'">
        <input type="text" placeholder="Nombre" value="'.$respuesta["nombre"].'" name="nombreE" required>

        <input type="text" placeholder="Apellido" value="'.$respuesta["apellido"].'"vname="apellidoE" required>

        <input type="email" placeholder="Email" value="'.$respuesta["email"].'" name="emailE" required>

        <input type="text" placeholder="Puesto" value="'.$respuesta["puesto"].'" name="puestoE" required>

        <input type="text" placeholder="Salario" value="'.$respuesta["salario"].'" name="salarioE" required>

        <input type="submit" value="Actualizar">';

    } //Fin funcion editar


}
