<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
    
    // Cargar las dependencias de PHP-ActiveRecord
    require_once '../../vendor/autoload.php';
    
    // Conectar a la base de datos
    require_once '../../co.edu.udec.act1.hennystousdeavila.util/Conexion.php';
    
    // Cargar los controladores
    require_once '../../co.edu.udec.act1.hennystousdeavila.controladores/UsuarioControlador.php';
    require_once '../../co.edu.udec.act1.hennystousdeavila.modelo/co.edu.udec.act1.hennystousdeavila.modelo.entidades/Usuario.php';
    require_once '../../co.edu.udec.act1.hennystousdeavila.modelo/co.edu.udec.act1.hennystousdeavila.modelo.crud/UsuarioCrud.php';
    
    // Enrutamiento
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'registro';
    }
    
    switch ($action) {
        case 'registro':
            $controller = new UsuarioControlador();
            $controller->registro();
            break;
        case 'login':
            $controller = new UsuarioControlador();
            $controller->login();
            break;
        default:
            // Si la acción es desconocida, redirigir al usuario a la página de inicio de sesión
            header('Location: index.php?action=login');
            break;
    }
        ?>
    </body>
</html>
