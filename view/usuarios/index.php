<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login de Usuario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
        session_start();
        try {
            // Cargar las dependencias de PHP-ActiveRecord
            require_once '../../vendor/autoload.php';

            // Conectar a la base de datos
            require_once '../../co.edu.udec.act1.hennystousdeavila.util/Conexion.php';

            // Cargar los controladores
            require_once '../../co.edu.udec.act1.hennystousdeavila.controladores/UsuarioControlador.php';
            require_once '../../co.edu.udec.act1.hennystousdeavila.modelo/co.edu.udec.act1.hennystousdeavila.modelo.entidades/Usuario.php';
            require_once '../../co.edu.udec.act1.hennystousdeavila.modelo/co.edu.udec.act1.hennystousdeavila.modelo.crud/UsuarioCrud.php';
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }


        // Enrutamiento
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = 'login';
        }
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($SESSION['error']);
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
