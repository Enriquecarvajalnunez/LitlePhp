<?php
/**
 * @package LitlePHP
 * @subpackage Commands
 */
require_once "WebRequest.class.php";
/**
 * Constantes para el manejo de errores
 */
define("ERROR_CAMPO_OBLIGATORIO", 100);
class CmdRegistro {
	function execute()
    {   
        //delete session for forms
        WebSession::unsetPropertyForms();
		extract($_REQUEST);
		//print_r("<pre>");
		//print_r($_REQUEST);
		//print_r("</pre>");
		//valida que los campos obligatorios no esten vacios
		if(($email != "") && ($email != NULL) && 
		   ($password != "") && ($password != NULL) &&
		   ($nombre != "") && ($nombre != NULL) &&
		   ($apellido != "") && ($apellido != NULL) &&
		   ($identificacion != "") && ($identificacion != NULL) &&
		   ($direccion != "") && ($direccion != NULL) &&
		   ($telefono != "") && ($telefono != NULL) &&
		   ($ciudad != "") && ($ciudad != NULL) &&
		   ($empresa != "") && ($empresa != NULL) 
		   ){
			//1ero Instancio el Manager de Autenticacion 
			$usuario_manager = Application::getDomainController('UsuariosManager');
			//2do llamo al caso de uso que valida las credenciales del usuario
			$message = $usuario_manager->addUsuarios($id, $nombre, $apellido, $telefono, $identificacion, $direccion, $email, $password, $estado, $rol, $ciudad, $tipo,$empresa); 
			WebRequest::setProperty('cod_message', $message);
			if($message == 103)	// Exito, codigo enviado desde el caso de uso		  
			{
   		      return "success";  				
			}
			else
              return "fail";			
		}
		else{
	        $message = ERROR_CAMPO_OBLIGATORIO;
			WebRequest::setProperty('cod_message',$message);
			return "fail";
		}		
    }
}
?>