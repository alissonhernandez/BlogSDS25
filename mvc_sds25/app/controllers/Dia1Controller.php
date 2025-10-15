<?php
namespace app\controllers;

class Dia1Controller {
    public function index() {
        $data = ["title" => "SDS25 - Día 1",
         "mensaje" => "Bienvenido al día 1 de la SDS25", 
        "agenda1" => "Primera Actividad - Iniciamos con la bienvenida a la SD25, en horario de 8:00 am a 9:00 am, la cual fue dirigida por el Ing. Franco",
        "agenda2" => "Posteriormente se hizo el llamado a los miembros de la mesa de honor, donde cada uno de ellos dio palabras de bienvenida",
        "vicedecana" => "Palabras de bienvenida por la Vicedecana de la Universidad de El Salvador, Facultad Multidisciplinaria Oriental",
        "joseluiscastro" => "Palabras de bienvenida por el Ing. José Luis Castro",
        "diegoherrera" => "Palabras de bienvenida por el Ing. Diego Herrera",
        "karlaorellana" => "Palabras de bienvenida por la Presidenta de la ASEIS, Karla Orellana",
        "ponencias" => "Segunda Actividad - Se realizaron 2 ponencias entre 9:00 am y 12:00 m",
        "ponencia1" => "Ponencia #1 - EL ABC de Bitcoin, impartida por MSc. Luis Contreras",
        "bitcoin" => "Bitcoin es una moneda digital descentralizada, creada en 2009 por una persona (o grupo) bajo el seudónimo Satoshi Nakamoto.
        <br>No depende de bancos ni gobiernos; las transacciones se realizan directamente entre usuarios a través de Internet, sin intermediarios.
        <br><br>Su unidad básica es el bitcoin (BTC).
        <br>Usa tecnología blockchain (cadena de bloques) para registrar y verificar cada operación de manera pública y segura.
        <br>Se puede usar para comprar bienes, servicios o como inversión.",
        "ponencia2" => "Ponencia #2 - Inteligencia Artificial Generativa - de la idea a la acción, impartida por MSc. Rodrigo Pinea",
        "IAG" => "La Inteligencia Artificial Generativa es una rama de la IA que no solo analiza información existente, sino que crea contenido nuevo: textos, imágenes, música, código, videos o incluso ideas originales.
        <br>Esta tecnología utiliza modelos entrenados con grandes cantidades de datos para aprender patrones, y luego generar resultados similares pero inéditos.
        <br><br>La IA generativa no reemplaza la creatividad humana; la potencia.
        <br>Transforma la forma en que pensamos, creamos y compartimos ideas.
        <br>El reto del futuro será integrar la IA en la acción humana, combinando la imaginación de las personas con la precisión de los algoritmos.",
        "agenda3" => "Última Actividad - Hackathon, de 1:00 pm a 5:00 pm",
        "hackathon" => "Aqui es donde los estudiantes pusieron en práctica sus conocimientos en programación y desarrollo de proyectos.
        <br>Se formaron equipos que trabajaron en la creación de soluciones tecnológicas innovadoras para diversos desafíos planteados.
        <br>El ambiente estuvo lleno de creatividad, colaboración y aprendizaje, culminando con la presentación de los proyectos desarrollados.",
        "ganadores" => "Ganadores del Hackathon",
        "findia1" => "Asi concluye el primer dia de la SDS25",
        "banderines" => "Foto realizando banderines para la feria de logros",
        "realizado" => "Realizado por: Alisson Andrea Hernández Arias"];

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