<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/ejemplomvcphp/models/Usuario.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAOusuario
 *
 * @author EQUIPO
 */
class DAOusuario {
    public static function agregar_usuario($usuario){
       try{
           return $usuario->save();
       } catch (Exception $error) {
           throw new Exception("ERROR AL GUARDAR USUARIO, POSIBLEMETE YA EXISTE");
              }
    }

public static function buacar_usuario($cedula){
     try{
           $usuario = Usuario::find(array ($cedula));
         //  $usuario = Usuario::find(array("cedula"=>$cedula));
           return $usuario;
       } catch (Exception $error) {
           throw new Exception("ERROR AL BUSCAR EL USUARIO IDENTIFICADO CON LA CEDULA: $cedula");
              }
    }
     
    public static function eliminar_usuario($cedula){
        return Usuario::delete_all(array('concitions'=> "cedula=$cedula"));
    }

    public static function modificar_usuario($usuario){
        return DAOusuario::agregar_usuario($usuario);
    
}
public static function listar_usuario(){
    return Usuario::all();
}
}





