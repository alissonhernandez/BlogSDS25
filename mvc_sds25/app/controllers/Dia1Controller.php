<?php
namespace app\controllers;

class Dia1Controller {
    public function index() {
        $data = ["bienvenida" => "Bienvenida de 8 a 9 am", "ponencias" => "2 ponencias de 9 am a 12 md", "hackathon" => "Hackathon de 1 a 4 pm"];
        return $this->view("dia1", $data);
    }

    private function view($vista, $data = []) {
        extract($data);
        ob_start();
        include __DIR__ . "/../views/$vista.php";
        return ob_get_clean();
    }
}
?>