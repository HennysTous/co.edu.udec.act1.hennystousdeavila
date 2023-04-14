<?php
class UsuarioControlador {

    public function registro() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Obtener los datos del formulario
            $cc = $_POST['cc'];
            $pass = $_POST['pass'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $genero = $_POST['genero'];
            $email = $_POST['email'];

            // Crear un nuevo usuario en la base de datos
            $usuario = UsuarioCrud::agregarUsuario(
                    $cc,            
                    $nombre,
                    $apellido,
                    $genero,
                    $email,
                    $pass
            );

            // Redirigir al usuario a la página de inicio de sesión
            header('Location: login.php?action=login');
        } else {
            // Mostrar el formulario de registro
            include 'registrar.php';
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Obtener los datos del formulario
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            // Buscar al usuario en la base de datos
            $usuario = Usuario::find_by_sql("SELECT * from usuarios where email ='$email' and pass = '$pass '");

            // Si el usuario es válido, iniciar sesión y redirigir al usuario a la página de inicio
            if ($usuario == true) {
                $_SESSION['email'] = $email;
                header('Location: listar.php?action=home');
            } else {
                // Si el usuario no es válido, mostrar un mensaje de error
                $error = 'Email o contraseña incorrectos';
                include 'login.php';
            }
        } else {
            // Mostrar el formulario de inicio de sesión
            include 'login.php';
        }
    }

}
