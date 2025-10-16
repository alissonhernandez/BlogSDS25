<?php
namespace app\models;

use PDO;

class Visita {
    private $db;

    public function __construct() {
        $host = "db"; 
        $dbname = "blog_sds";
        $user = "root";
        $pass = "rootpass";

        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    // Insertar visita
    public function guardar($nombre, $correo, $comentario) {
        $sql = "INSERT INTO visitas (nombre, correo, comentario) VALUES (:nombre, :correo, :comentario)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ":nombre" => $nombre,
            ":correo" => $correo,
            ":comentario" => $comentario
        ]);
    }

    // Obtener todas las visitas
    public function obtenerTodas() {
        $sql = "SELECT * FROM visitas ORDER BY fecha_visita DESC";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
