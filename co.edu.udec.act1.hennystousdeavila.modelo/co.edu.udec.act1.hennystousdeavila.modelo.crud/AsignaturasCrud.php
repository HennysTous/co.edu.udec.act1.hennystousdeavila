<?php

include_once '../co.edu.udec.act1.hennystousdeavila.modelo.entidades/Asignaturas.php';

class AsignaturasCrud {

    public static function agregarAsignatura(
            $id,
            $nombre,
            $nombreCompleto,
            $descripcion,
            $areaConocimiento,
            $carrera,
            $creditos,
            $contenidoTematico,
            $semestre,
            $profesor
    ) {
        try {
            Asignaturas::create(array(
                'id' => $id,
                'nombre' => $nombre,
                'nombreCompleto' => $nombreCompleto,
                'descripcion' => $descripcion,
                'areaConocimiento' => $areaConocimiento,
                'carrera' => $carrera,
                'creditos' => $creditos,
                'contenidoTematico' => $contenidoTematico,
                'semestre' => $semestre,
                'profesor' => $profesor
            ));
        } catch (Exception $ex) {
            throw new Exception("Error al Ingresar el Asignatura, al parecer ya existe");
        }
    }

    public static function buscarAsignatura($id) {
        try {
            $asignatura = Asignaturas::find(array('$id' => $id));
            return $asignatura;
        } catch (Exception $ex) {
            throw new Exception("Error al buscar la asignatura con ID: $id");
        }
    }

    public static function eliminarAsignatura($id) {
        return Asignaturas::delete_all(array('conditions' => "id = $id"));
    }

    public static function modificarAsignatura($asignatura) {
        return AsignaturasCrud::agregarUsuario($asignatura);
    }

    public static function listarAsignatura() {
        return Asignaturas::all();
    }

    public static function listarAsignaturaPorNombre($nombre) {
        return Asignaturas::find(array('nombre' => $nombre));
    }

}


