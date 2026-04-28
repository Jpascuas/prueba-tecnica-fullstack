<?php
// Maneja la conexión a la base de datos usando PDO
function conectarDB() {
    $host = "localhost";
    $db   = "andina_seguridad";
    $user = "root";
    $pass = "";

    try {
        $conexion = new PDO(
            "mysql:host=$host;dbname=$db;charset=utf8",
            $user,
            $pass
        );

        // Configuración recomendada
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $conexion;

    } catch (PDOException $e) {
        // No responder aquí, solo lanzar excepción
        throw new Exception("Error de conexión a la base de datos");
    }
}