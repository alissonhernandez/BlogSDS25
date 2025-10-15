<?php
namespace app\controllers;

class PerfilController {
    public function index() {
        $data = ["title" => "SDS25 - Perfil",
        "mensaje" => "Mi Información",
        "nombre" => "Alisson Andrea Hernández Arias",
        "profesion" => "Estudiante de Ingeniería de Sistemas Informáticos",
        "carnet" => "HA21011",
        "asignatura" => "Blog realizado en la asignatura Técnicas de Programación para Internet"];

        return $this->view("perfil", $data);
    }

    private function view($vista, $data = []) {
        extract($data);
        ob_start();
        include __DIR__ . "/../views/$vista.php";
        return ob_get_clean();
    }
}
?>