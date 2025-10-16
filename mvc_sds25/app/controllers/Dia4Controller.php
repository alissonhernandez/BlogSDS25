<?php
namespace app\controllers;

class Dia4Controller {
    public function index() {
        $data = ["title" => "SDS25 - Día 4",
         "mensaje" => "Bienvenido al día 4 de la SDS25", 
         "feria" => "Feria de Logros de Estudiantes de Ingeniera de Sistemas Informáticos",
         "info" => "El jueves 16 de octubre, en el marco de la Semana de Sistemas 2025, se llevo a cabo la Feria de Logros 
         de Estudiantes de Ingeniería de Sistemas Informáticos en la plaza Minerva de la Facultad Multidisciplinaria Oriental (FMO) 
         de la Universidad de El Salvador (UES). Este evento tiene como objetivo principal destacar y celebrar los proyectos y logros 
         alcanzados por los estudiantes de esta carrera durante su formación académica.",
         "galeria" => "Galería de Fotos",
         "stands" => "Stands de Proyectos",
         "proyectos" => "Entre los proyectos destacados tenemos:
         <br>- El radar de Moises
         <br>- Parqueo automatico con Arduino y aplicacion movil
         <br>- Aplicacion de realidad aumentada juego
         <br>- Tienda en linea ARCore
         <br>- Sistema de comandos en tiempo real
         <br>- SIGET: Sistema de gestion de planillas
         <br>- Implementacion de un sistema de gestion de procesos para un centro mecanizado y soldadura
         <br>- Sistema de gestion de citas y pagos en linea para CarWash Berrios
         <br>- Blogs de Teoria de Sistemas
         <br>- Juego de bingo utilizando web sockets
         <br>- Sistema de gestion de farmacias
         <br>- Sistema de cajero automatico
         <br>- Proyecto innovador
         <br>- Cajero automatico C#Bank
         <br>- Innova Rent",
         "texto" => "Ganadores",
         "popularidad" => "Por popularidad a mejor stand son los estudiantes con el Blog de Teoria de Sistemas (TSI)",
         "ganadores" => "Los ganadores de la feria de logros son:",
         "radar" => "Radar de Moises",
         "cubo" => "Biblioteca virtual cubo",
         "pupusas" => "Comelona de Pupusas",
         "descripcion" => "Como segundo evento tenemos la comelona de pupusas la cual es una competencia de resistencia en 
         la que los participantes intentan comer la mayor cantidad posible de pupusas en un tiempo limitado, generalmente 
         con el objetivo de ganar un premio",
         "ganador" => "El ganador de la comelona de pupusas fue el Ing. Guandique, con 16 pupusas",
         "foto" => "Foto finalizando el dia 4",
        "realizado" => "Realizado por: Alisson Andrea Hernández Arias"];

        return $this->view("dia4", $data);
    }

    private function view($vista, $data = []) {
        extract($data);
        ob_start();
        include __DIR__ . "/../views/$vista.php";
        return ob_get_clean();
    }
}
?>