<?php
namespace app\models;

use PDO;
use PDOException;

class Visitas {
    private $host = "db";
    private $db_name = "blog_sds";
    private $username = "root";
    private $password = "rootpass";
    public $conn;

    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name}",
                $this->username,
                $this->password
            );
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
        return $this->conn;
    }

    public function insert($data) {
        $stmt = $this->connect()->prepare(
            "INSERT INTO visitas (nombre, correo, comentario) VALUES (:nombre, :correo, :comentario)"
        );
        $stmt->bindParam(':nombre', $data['nombre']);
        $stmt->bindParam(':correo', $data['correo']);
        $stmt->bindParam(':comentario', $data['comentario']);
        $stmt->execute();
    }
    
    public function getAll() {
        $conn = $this->connect();
        $stmt = $conn->query("SELECT * FROM visitas ORDER BY fecha DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
