<?php

class ConexionBD{
    public function cBD(){
        $bd = new PDO("mysql:host=localhost;db=crud", "root", "");

        return $bd;
    }


}