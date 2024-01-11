<?php
    class Conexion {
        private static $conexion;

    public static function obtenerConexion(){
        include_once "datosConexion.php";


   // Meter siempre la conexion en un try catch
   try {
    self::$conexion = new PDO(DSN,USER,PASSWORD);
    self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Esta linea es recomendable al usar la excepcion porque muestra los errores mas claros
    echo "Conexion Establecida";
    }
    catch (PDOException $error){
        echo "Fallo en la conexion: " . $error->getMessage();
    }

    return self::$conexion;
}
 
}

