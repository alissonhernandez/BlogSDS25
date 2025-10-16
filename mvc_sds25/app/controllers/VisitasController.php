<?php
namespace app\controllers;

use app\models\Visitas;

class VisitasController {

    private $model;

    public function __construct() {
        $this->model = new Visitas();
    }

    public function index() {
        $visitas = $this->model->getAll();
        require __DIR__ . '/../views/visitas.php';
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $visitasModel = new Visitas();
            $conn = $visitasModel->connect();

            $stmt = $conn->prepare("INSERT INTO visitas (nombre, correo, comentario) VALUES (:nombre, :correo, :comentario)");
            $stmt->bindParam(':nombre', $_POST['nombre']);
            $stmt->bindParam(':correo', $_POST['correo']);
            $stmt->bindParam(':comentario', $_POST['comentario']);
            $stmt->execute();

            header("Location: /visitas"); // Redirige de nuevo al listado
            exit;
        }
    }
}
