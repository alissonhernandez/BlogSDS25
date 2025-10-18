<?php
namespace app\controllers;

class Dia5Controller {
    public function index() {
        $data = ["title" => "SDS25 - Día 5",
        "mensaje" => "Bienvenido al día 5 de la SDS25",
        "bingo" => "Juego de Bingo",
        "juego" => "Mediante una pagina web, los participantes podrán unirse al juego de bingo en línea, 
        donde se irán anunciando los números aleatoriamente. Los participantes marcarán los números en sus 
        tarjetas virtuales y el primero en completar una figura o la tarjeta completa será el ganador.
        <br>Hubieron varios premios para los ganadores, entre ellos bocinas, audifonos, camisas, gorras, vales para uñas y mas.",
        "pagina" => "La página web utilizada para el juego de bingo fue escaneando un codigo, pero tambien se puede acceder desde http://192.168.7.125:3001/index
        <br>Los pasos para ingresar y participar en el juego de bingo son los siguientes:
        <br>1. Abrir el navegador web en su dispositivo.
        <br>2. Ingresar la URL http://192.168.7.125:3001/index o escanear el código QR proporcionado.
        <br>3. Registrarse con un nombre de usuario o apodo para identificarte en el juego, tambien ingresar un correo electronico y la contraseña.
        <br>4. Una vez registrado, iniciar sesión con las credenciales proporcionadas.
        <br>5. Comprar un creditos para obtener los paquetes con tarjetas de bingo virtual.
        <br>6. Seleccionar las tarjetas de bingo que deseas jugar.
        <br>7. Esperar el codigo de sala e ingresarlo para unirse al juego.
        <br>8. Escuchar los números anunciados y marcar los números correspondientes en tus tarjetas virtuales.
        <br>9. El primer participante en completar la figura o la tarjeta completa debe anunciar BINGO en la plataforma para reclamar su premio.",
        "galeria" => "Galeria de fotos",
        "diplomas" => "Entrega de Diplomas",
        "entrega" => "Diplomas entregados a los ganadores de la feria de logros del dia 4",
        "videojuegos" => "Torneo de Videojuegos",
        "cr" => "Bienvenido al Torneo de Clash Royale",
        "torneo" => "El torneo de Clash Royale se llevó a cabo en un ambiente lleno de emoción y competencia amistosa.
        <br>Los participantes demostraron sus habilidades estratégicas y tácticas en el juego, enfrentándose en emocionantes batallas para avanzar en el torneo.",
        "fiesta" => "HalloFuture Party",
        "celebracion" => "¡HALLOFUTURE PARTY - El cierre más épico de la Semana de Sistemas 2025! 🎃🔥
        <br>Este viernes prepárate para viajar al futuro con la fiesta más esperada del año. Luces, beats, disfraces y la mejor energía del gremio de sistemas. 🚀
        <br>📅 Fecha: Viernes 17 de Octubre 2025
        <br>📍 Lugar: Ibiza Social Club
        <br>🕗 Hora: Desde las 8:00 p. m. hasta que el cuerpo aguante 💃
        <br>🎤 8:00 - 10:00 p. m. → Karaoke Time - Demuestra tu talento, desafina con estilo o conquista el escenario 😎
        <br>💥 10:00 p. m. en adelante → Se abre la pista de baile - El DJ enciende la noche y nadie se queda sentado 🔥
        <br>✨ No faltes a la noche más legendaria de la Semana de Sistemas.",
        "realizado" => "Realizado por: Alisson Andrea Hernández Arias"];

        return $this->view("dia5", $data);
    }

    private function view($vista, $data = []) {
        extract($data);
        ob_start();
        include __DIR__ . "/../views/$vista.php";
        return ob_get_clean();
    }
}
?>