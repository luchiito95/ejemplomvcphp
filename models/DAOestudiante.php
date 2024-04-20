<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/ejemplomvcphp/models/Estudiante.php";


class DAOestudiante {
    public static function agregar_estudiante($estudiante){
       try{
           return $estudiante->save();
       } catch (Exception $error) {
           throw new Exception("ERROR AL GUARDAR EL ESTUDIANTE");
              }
    }

    public static function buacar_estudiante($id){
        try{
              $estudiante = Estudiante::find(array ($id));
            //  $usuario = Usuario::find(array("cedula"=>$cedula));
              return $estudiante;
          } catch (Exception $error) {
              throw new Exception("ERROR AL BUSCAR EL ESTUDIANTE CON EL : $id");
                 }
       }
       public static function eliminar_estudiante($id){
        return Estudiante::delete_all(array('concitions'=> "id=$id"));
    }



       public static function modificar_estudiante($estudiante){
        return DAOestudiante::agregar_estudiante($estudiante);
    
}
public static function listar_estudiante(){
    return Estudiante::all();
}
}