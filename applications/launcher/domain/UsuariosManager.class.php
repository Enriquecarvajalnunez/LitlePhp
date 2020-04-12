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
    function addUsuarios($USUAID, $USUANOMB, $USUAAPEL, $USUATELE, $USUAIDENT, $USUADIRE, $USUAEMAI, $USUAPASS, $USUAESTA, $ROLID, $CIUDID, $TIPOSID,$USUAEMPR)
    {
        $FECHACREA=date("Y-m-d");
        $FECHAACTUALIZA=date("Y-m-d");
        if ($this->gateway->existUsuarios($USUAID) == 0) {
            //$USUAID = $this->gateway->maxId();
            $result = $this->gateway->addUsuarios($USUAID, $USUANOMB, $USUAAPEL, $USUATELE, $USUAIDENT, $USUADIRE, $USUAEMAI, $USUAPASS, $USUAESTA, $ROLID, $CIUDID, $TIPOSID,$FECHACREA,$FECHAACTUALIZA,$USUAEMPR);
            if ($result) {
                $this->UnsetRequest();
                return EXITO_OPERACION_REALIZADA;
            } else {
                return ERROR_OPERACION_NO_REALIZADA;
            }
        } 
        else {
            return $this->updateUsuarios($USUAID, $USUANOMB, $USUAAPEL, $USUATELE, $USUAIDENT, $USUADIRE, $USUAEMAI, $USUAPASS, $USUAESTA, $ROLID, $CIUDID, $TIPOSID,$FECHACREA,$FECHAACTUALIZA);
          	//return ERROR_DATO_EXISTE;
        }
    }

    /**
     * Metodo para consultar por el correo y clave de los usuarios. 
     * @author Kevin Villa
     * @return int
     */
    function getExisteUSUARIO($USUAEMAI, $USUAPASS)
    {
        $usuario = $this->gateway->existeUSUARIO($USUAEMAI, $USUAPASS);
        ///print_r($usuario);
        if ($usuario) {
                WebSession::setIAuthProperty("usuaid", $usuario[0]['usuaid']);
                WebSession::setIAuthProperty("usuanomb", $usuario[0]['usuanomb']);
                WebSession::setIAuthProperty("usuaapel", $usuario[0]['usuaapel']);
                WebSession::setIAuthProperty("usuatele", $usuario[0]['usuatele']);
                WebSession::setIAuthProperty("usuaident", $usuario[0]['usuaident']);
                WebSession::setIAuthProperty("usuaemai", $usuario[0]['usuaemai']);
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

        unset($_REQUEST["nombre"]);
        unset($_REQUEST["apellido"]);
        unset($_REQUEST["telefono"]);
        unset($_REQUEST["direccion"]);
        unset($_REQUEST["password"]);
        unset($_REQUEST["email"]);
        unset($_REQUEST["identificacion"]);

    }


   
}
?>	
 	