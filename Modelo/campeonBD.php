<?php

include_once 'campeon.php';

class CampeonBD{

    public static function add(Campeon $c):bool{
        $result = false;

        //obtener conexion con la base de datos
        include_once '../Conexion/conexion.php';
        $conexion = Conexion::obtenerConexion();

        $sql = "INSERT INTO campeon (nombre, rol, dificultad, descripcion) VALUES (:nombre,:rol,:dificultad,:descripcion)";
        $sentencia = $conexion->prepare($sql);

        $sentencia->bindParam(":nombre",$c->getNombre());
        $sentencia->bindParam(":rol",$c->getRol());
        $sentencia->bindParam(":dificultad",$c->getDificultad());
        $sentencia->bindParam(":descripcion",$c->getDescripcion());
    
        $result = $sentencia->execute();

        return $result;

    }

    public static function getAll(){
         //obtener conexion con la base de datos
         include_once '../Conexion/conexion.php';
        $conexion = Conexion::obtenerConexion();

        //preparamos consulta
        $sql = 'SELECT * FROM campeon';
        $sentencia = $conexion->prepare($sql);

        $sentencia->setFetchMode(PDO::FETCH_CLASS,"Campeon");
        $sentencia->execute();

        return $sentencia->fetchAll();
    }
}

?>