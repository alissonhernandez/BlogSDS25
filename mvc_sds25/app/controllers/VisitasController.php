<?php
namespace app\controllers;

use app\models\Visita;

class VisitasController {
    private $visita;

    public function __construct() {
        $this->visita = new Visita();
    }

    public function index() {
        $data["visitas"] = $this->visita->obtenerTodas();
        $data["mensaje"] = $_SESSION["mensaje"] ?? null;
        $data["tipo_mensaje"] = $_SESSION["tipo_mensaje"] ?? null;


        unset($_SESSION["mensaje"], $_SESSION["tipo_mensaje"]);

        return $this->view("visitas", $data);
    }

    public function guardar() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nombre = trim($_POST["nombre"] ?? "");
            $correo = trim($_POST["correo"] ?? "");
            $comentario = trim($_POST["comentario"] ?? "");

            if ($nombre && $correo && $comentario) {
                $ok = $this->visita->guardar($nombre, $correo, $comentario);

                if ($ok) {
                    $_SESSION["mensaje"] = "Visita guardada con éxito.";
                    $_SESSION["tipo_mensaje"] = "success";
                } else {
                    $_SESSION["mensaje"] = "Error al guardar la visita.";
                    $_SESSION["tipo_mensaje"] = "error";
                }
            } else {
                $_SESSION["mensaje"] = "Todos los campos son obligatorios.";
                $_SESSION["tipo_mensaje"] = "warning";
            }

            header("Location: /mvc_sds25/public/visitas");
            exit;
        }
    }

    private function view($vista, $data = []) {
        extract($data);
        ob_start();
        include __DIR__ . "/../views/$vista.php";
        return ob_get_clean();
    }
}
