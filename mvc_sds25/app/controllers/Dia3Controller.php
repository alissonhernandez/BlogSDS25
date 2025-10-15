<?php
namespace app\controllers;

class Dia3Controller {
    public function index() {
        $data = ["title" => "SDS25 - Día 3",
        "mensaje" => "Bienvenido al día 3 de la SDS25",
        "ues" => "La Universidad de El Salvador suspende clases y actividades academicas presenciales",
        "cancelado" => "Debido a las condiciones climáticas y a que todas las actividades universitarias han
        pasado a modalidad virtual, el Torneo de Fútbol 11 SDS25 programado para el miércoles 15 de octubre fue cancelado",
        "realizado" => "Realizado por: Alisson Andrea Hernández Arias"];

        return $this->view("dia3", $data);
    }

    private function view($vista, $data = []) {
        extract($data);
        ob_start();
        include __DIR__ . "/../views/$vista.php";
        return ob_get_clean();
    }
}
?>