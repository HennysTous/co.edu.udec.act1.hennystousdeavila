<?php
try {
    include_once '../../co.edu.udec.act1.hennystousdeavila.modelo/co.edu.udec.act1.hennystousdeavila.modelo.entidades/Usuario.php';
} catch (Exception $ex) {
    echo $ex->getMessage();
}


class UsuarioCrud {

    public static function agregarUsuario(
            $cc,
            $nombre,
            $apellido,
            $genero,
            $email,
            $pass) {
        try {
            Usuario::query(
                    "INSERT INTO `usuarios`(`cc`, `pass`, `nombre`, `apellido`, `genero`, `email`) "
                    . "VALUES ('$cc','$pass','$nombre','$apellido','$genero','$email')");
        } catch (Exception $ex) {
            throw new Exception("Error al Ingresar el usuario, al parecer ya existe");
        }
    }

    public static function buscarUsuario($cc) {
        try {
            $usuario = Usuario::find(array('cc' => $cc));
            return $usuario;
        } catch (Exception $ex) {
            throw new Exception("Error al buscar el usuario con cedula $cc");
        }
    }

    public static function validarUsuario($email, $pass) {
        try {
            $usuario = Usuario::find_by_sql("SELECT * from usuarios where email ='$email' and pass = '$pass '");
            return $usuario;
        } catch (Exception $ex) {
            throw new Exception("El usuario no existe, registrese");
        }
    }

    public static function eliminarUsuario($cc) {
        return Usuario::delete_all(array('conditions' => "cc = $cc"));
    }

    public static function modificarUsuario($usuario) {
        return Usuario::update_all($usuario);
    }

    public static function listarUsuario() {
        return Usuario::all();
    }

    public static function listarUsuarioPorNombre($nombre) {
        return Usuario::find(array('nombre' => $nombre));
    }

}

/*$usuarios = UsuarioCrud::listarUsuario();
foreach ($usuarios as $usuario) {
    echo implode(" | ", array($usuario->cc, $usuario->nombre, $usuario->apellido ,$usuario->genero , $usuario->email)) . "<br>";
}*/