<?php
namespace app\controllers;

class HomeController {
    public function index() {
        $data = ["title" => "SDS25 - Inicio", 
        "proyecto" => "Bienvenido al Blog SDS25",
        "descripcion" => "Este proyecto consiste en realizar un blog sobre la SDS25 utilizando el patrón MVC con PHP.",
        "SDS25" => "¿Qué es la SDS25?",
        "concepto" => "La Semana de Sistemas es un evento académico que se lleva a cabo en la UES FMO, con el objetivo de fomentar el aprendizaje y la práctica de habilidades relacionadas con nuestra carrera. Durante esta semana, los estudiantes tienen la oportunidad de participar en talleres, conferencias, hackatones y otras actividades que les permiten adquirir conocimientos prácticos y teóricos.",
        "realizado" => "Realizado por: Alisson Andrea Hernández Arias"];
        return $this->view("home", $data);
    }

    private function view($vista, $data = []) {
        extract($data);
        ob_start();
        include __DIR__ . "/../views/$vista.php";
        return ob_get_clean();
    }
}
?>