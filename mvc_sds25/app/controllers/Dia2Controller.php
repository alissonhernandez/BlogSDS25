<?php
namespace app\controllers;

class Dia2Controller {
    public function index() {
        $data = ["title" => "SDS25 - Día 2",
        "mensaje" => "Bienvenido al día 2 de la SDS25", 
        "taller1" => "Taller #1 - Toma de decisiones estrategicas basadas en datos, impartido por MSc. Enrique Cortez",
        "datos" => "Datos es una unidad minima de informacion, la toma de decisiones estratégicas basadas en datos implica usar 
        herramientas tecnológicas y sistemas de información para recopilar, procesar y analizar grandes volúmenes de datos. Esta práctica 
        permite a las organizaciones obtener información precisa y oportuna para planificar, optimizar y mejorar sus procesos tecnológicos y de negocio.
        <br><br>Los datos se convierten en la base del pensamiento estratégico y en una herramienta esencial para la innovación tecnológica y la toma de decisiones inteligentes.",
        "taller2" => "Taller #2.1 - Developers 2.0: Entrenando la IA que programa contigo, imartida por Ing. Henry Orellana",
        "devs" => "El concepto de Developers 2.0 representa una nueva era en la informática, donde los desarrolladores humanos y la inteligencia artificial (IA) trabajan de forma 
        colaborativa para crear software más rápido, eficiente y creativo. En lugar de reemplazar al programador, la IA se convierte en un asistente inteligente capaz de generar 
        código, sugerir soluciones, detectar errores y optimizar proyectos en tiempo real.
        <br><br>Esta interacción se basa en modelos de aprendizaje automático que han sido entrenados con millones de líneas de código, lo que les permite entender lenguajes de 
        programación, patrones de diseño y buenas prácticas. El desarrollador, por su parte, entrena a la IA mediante correcciones, ejemplos y nuevas instrucciones, creando un 
        círculo de aprendizaje continuo entre humano y máquina.",
        "taller3" => "Taller #2.2 - Construyendo un CRUD en minutos con Laravel y Filament, impartido por Ing. Gabriel Castillo",
        "laravel" => "La ponencia mostró cómo Laravel, uno de los frameworks más potentes de PHP, combinado con Filament, permite desarrollar aplicaciones web dinámicas de forma 
        rápida y profesional. Un CRUD (Crear, Leer, Actualizar y Eliminar) es la base de toda aplicación que maneja datos, y con estas herramientas se puede generar en cuestión de 
        minutos gracias a su arquitectura moderna, paneles administrativos automatizados y componentes reutilizables.",
        "taller4" => "Taller #4 - IA MULTIMODAL: Creando el futuro visual e inteligente con n8n De texto a imagen que conectan y transforman, impartido por Jose Salmeron",
        "iamulti" => "Esta ponencia exploró el poder de la Inteligencia Artificial Multimodal, una tecnología capaz de interpretar y combinar diferentes tipos de datos como texto, 
        imagen, audio y video para generar resultados más completos e inteligentes. Usando n8n, una herramienta de automatización sin código, se demostró cómo conectar modelos de IA para 
        transformar texto en imágenes, automatizar flujos creativos y construir sistemas visuales interactivos.",
        "realizado" => "Realizado por: Alisson Andrea Hernández Arias"];

        return $this->view("dia2", $data);
    }

    private function view($vista, $data = []) {
        extract($data);
        ob_start();
        include __DIR__ . "/../views/$vista.php";
        return ob_get_clean();
    }
}
?>