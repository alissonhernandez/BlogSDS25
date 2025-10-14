<?php
namespace app\controllers;

class HomeController {
    public function index() {
        $data = ["title" => "Pagina Principal", "descripcion" => "Este blog contiene las actividades realizadas durante la sds25"];
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