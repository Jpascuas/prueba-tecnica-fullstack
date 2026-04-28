<?php
// Endpoint: GET /usuarios/recientes
// Retorna usuarios registrados en los últimos 30 días

header("Content-Type: application/json");

require_once "db.php";

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    echo json_encode([
        "status"  => "error",
        "message" => "Método no permitido"
    ]);
    exit;
}

try {
    $conn = conectarDB();

    $sql = "SELECT id, nombre, email, fecha_registro
            FROM usuarios
            WHERE fecha_registro >= DATE_SUB(NOW(), INTERVAL 30 DAY)
            ORDER BY fecha_registro DESC
            LIMIT 100";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $usuarios = $stmt->fetchAll();

    if (empty($usuarios)) {
        http_response_code(200);
        echo json_encode([
            "status"  => "success",
            "message" => "No hay usuarios recientes",
            "data"    => []
        ]);
        exit;
    }

    echo json_encode([
        "status" => "success",
        "total"  => count($usuarios),
        "data"   => $usuarios
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        "status"  => "error",
        "message" => $e->getMessage()
    ]);
}