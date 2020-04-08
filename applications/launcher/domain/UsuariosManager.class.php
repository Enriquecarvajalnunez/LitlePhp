<?php	
/**
 * @package mct
 * @subpackage Domain
 * @copyright Spyro Solutions
 */

/**
 * Constantes para el manejo de errores
 */
define("ERROR_DATO_EXISTE", 101);
define("ERROR_DATO_NO_EXISTE", 102);
define("EXITO_OPERACION_REALIZADA", 103);
define("ERROR_OPERACION_NO_REALIZADA", 105);
define("ERROR_AUTH", 106);
/**
 *
 * Clase manager de la tabla: usuarios
 * @author LittlePHP Framework
 * @copyright Little PHP Team
 */
class UsuariosManager
{
    /**
     * objeto para la instancia de la compuerta
     */
    var $gateway;

    /**
     * Metodo constructor de la clase
     * @author LittlePHP Framework 
     */
    function __construct()
    {
        $this->gateway = Application::getDataGateway("usuarios");
    }

    /**
     * Metodo para adicionar datos a la tabla: usuarios
     * @author LittlePHP Framework
     * @return integer
     */
    function addUsuarios($USUAID, $USUANOMB, $USUAAPEL, $USUATELE, $USUAIDENT, $USUADIRE, $USUAEMAI, $USUAPASS, $USUAESTA, $ROLID_FK, $CIUDID_FK, $TIPOSID_FK)
    {
        if ($this->gateway->existUsuarios($USUAID) == 0) {
            $USUAID = $this->gateway->maxId();
            $result = $this->gateway->addUsuarios($USUAID, $USUANOMB, $USUAAPEL, $USUATELE, $USUAIDENT, $USUADIRE, $USUAEMAI, $USUAPASS, $USUAESTA, $ROLID_FK, $CIUDID_FK, $TIPOSID_FK);
            if ($result) {
                $this->UnsetRequest();
                return EXITO_OPERACION_REALIZADA;
            } else {
                return ERROR_OPERACION_NO_REALIZADA;
            }
        } else {
            return $this->updateUsuarios($USUAID, $USUANOMB, $USUAAPEL, $USUATELE, $USUAIDENT, $USUADIRE, $USUAEMAI, $USUAPASS, $USUAESTA, $ROLID_FK, $CIUDID_FK, $TIPOSID_FK);
          	//return ERROR_DATO_EXISTE;
        }
    }

    /**
     * Metodo para actualizar datos de la tabla: usuarios
     * @author LittlePHP Framework
     * @return integer
     */
    function updateUsuarios($USUAID, $USUANOMB, $USUAAPEL, $USUATELE, $USUAIDENT, $USUADIRE, $USUAEMAI, $USUAPASS, $USUAESTA, $ROLID_FK, $CIUDID_FK, $TIPOSID_FK)
    {
        if ($this->gateway->existUsuarios($USUAID) == 1) {
            $result = $this->gateway->updateUsuarios($USUAID, $USUANOMB, $USUAAPEL, $USUATELE, $USUAIDENT, $USUADIRE, $USUAEMAI, $USUAPASS, $USUAESTA, $ROLID_FK, $CIUDID_FK, $TIPOSID_FK);
            if ($result) {
                $this->UnsetRequest();
                return EXITO_OPERACION_REALIZADA;
            } else {
                return ERROR_OPERACION_NO_REALIZADA;
            }
        } else {
            return ERROR_DATO_NO_EXISTE;
        }
    }

    /**
     * Metodo para eliminar datos de la tabla: usuarios
     * @author LittlePHP Framework
     * @return integer
     */
    function deleteUsuarios($USUAID)
    {
        if ($this->gateway->existUsuarios($USUAID) == 1) {
            $result = $this->gateway->deleteUsuarios($USUAID);
            if ($result) {
                $this->UnsetRequest();
                return EXITO_OPERACION_REALIZADA;
            } else {
                return ERROR_OPERACION_NO_REALIZADA;
            }
        } else {
            return ERROR_DATO_NO_EXISTE;
        }
    }

    /**
     * Metodo para consultar los datos por la llave primaria de la tabla: usuarios
     * @author LittlePHP Framework
     * @return array
     */
    function getByIdUsuarios($USUAID)
    {
        $data_usuarios = $this->gateway->getByIdUsuarios($USUAID);
        return $data_usuarios;
    }

    /**
     * Metodo para consultar todos los datos de la tabla: usuarios
     * @author LittlePHP Framework
     * @return array
     */
    function getAllUsuarios()
    {
        $data_usuarios = $this->gateway->getAllUsuarios();
        return $data_usuarios;

    }

    /**
     * Metodo para consultar por el correo y clave de los usuarios. 
     * @author Kevin Villa
     * @return int
     */
    function getExisteUSUARIO($USUAEMAI, $USUAPASS)
    {
        $usuario = $this->gateway->existeUSUARIO($USUAEMAI, $USUAPASS);
       
        if ($usuario) {
                WebSession::setIAuthProperty("usuaid", $usuario[0]['USUAID']);
                WebSession::setIAuthProperty("usuanomb", $usuario[0]['USUANOMB']);
                WebSession::setIAuthProperty("usuaapel", $usuario[0]['USUAAPEL']);
                WebSession::setIAuthProperty("usuatele", $usuario[0]['USUATELE']);
                WebSession::setIAuthProperty("usuaident", $usuario[0]['USUAIDENT']);
                WebSession::setIAuthProperty("usuaemai", $usuario[0]['USUAEMAI']);
                WebSession::setIAuthProperty("commands", $array);            
            return EXITO_OPERACION_REALIZADA;
        } else {
            return ERROR_AUTH;
        }
    }

    /**
    * Metodo para consultar si un usuario existe y recuperar contraseña
    * @author PhpLite Framework
    * @return array
    */       
    function existeUSUARIOEmail($USUAEMAI)
    {
        $usuario = $this->gateway->getUSUAEMAI($USUAEMAI);
        if (count($usuario)>0)
           return EXITO_OPERACION_REALIZADA; 
        else
          return ERROR_DATO_NO_EXISTE;
    }     

    /**
     * Metodo para limpiar los datos del _REQUEST de la tabla: usuarios
     * @author LittlePHP Framework
     * @return void
     */
    function UnsetRequest()
    {

        unset($_REQUEST["register__USUAID"]);
        unset($_REQUEST["register__USUANOMB"]);
        unset($_REQUEST["register__USUAAPEL"]);
        unset($_REQUEST["register__USUATELE"]);
        unset($_REQUEST["register__USUAIDENT"]);
        unset($_REQUEST["register__USUADIRE"]);
        unset($_REQUEST["register__USUAEMAI"]);
        unset($_REQUEST["register__USUAPASS"]);
        unset($_REQUEST["register__USUAESTA"]);
        unset($_REQUEST["register__ROLID_FK"]);
        unset($_REQUEST["register__CIUDID_FK"]);
        unset($_REQUEST["register__TIPOSID_FK"]);
    }


   
}
?>	
 	