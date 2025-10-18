# Blog SDS25

## Descripción del Proyecto
El *Blog SDS25* es un proyecto académico que utiliza el patrón *MVC (Modelo-Vista-Controlador)* en PHP para crear un blog interactivo sobre la Semana de Sistemas SDS25 de la UES FMO.  
El proyecto permite:  
- Mostrar información sobre las actividades de la SDS25.  
- Registrar visitas a través de un formulario.
- Listar todas las visitas registradas en una tabla.  

---

## Tecnologías Utilizadas
- PHP  
- PHPMYADMIN 
- HTML, CSS 
- PDO para la conexión a la base de datos  
- Docker y Docker Compose

---

## Crear la Base de Datos

1. Ingresa a tu servidor PHPMyAdmin con http://localhost:8082/ y ejecuta los siguientes comandos:

CREATE DATABASE blog_sds;

USE blog_sds;

CREATE TABLE visitas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    comentario VARCHAR(255) NOT NULL,
    fecha_visita DATETIME DEFAULT CURRENT_TIMESTAMP
);

2. Esto creará la base de datos blog_sds y la tabla visitas para registrar los usuarios que ingresen una visita al blog.

## Uso del Blog

1. Levanta el Docker con el comando  docker-compose up -d --build
2. Accede a http://localhost:8080/mvc_sds25/public/ para ver la página de inicio.
3. Navega por los días 1 a 5 para conocer las actividades que se realizaron en la SDS25 y luego al menú Visitas para:

- Llenar el formulario de visitas (Nombre, Correo, Comentario).
- Consultar la lista completa de visitas registradas en una tabla.
