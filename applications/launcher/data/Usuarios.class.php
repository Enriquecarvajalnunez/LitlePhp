<?php

/**
 * @package mct
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: usuarios
 * @author LittlePHP Framework
 * @copyright LittlePHP Team
 */
class Usuarios
{
	/**
	 * conexion de bases de datos.
	 */
	var $connection;
	/**
	 * recurso de base de datos
	 */
	var $consult;

	/**
	 * Metodo constructor de la clase
	 * @author LittlePHP Framework
	 */
	function __construct()
	{
		$this->connection = Application::getDatabaseConnection();
		$this->connection->SetFetchMode(2);
	}

	/**
	 * Metodo para validar si un registro existe en la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return int
	 */
	function existUsuarios($USUAID)
	{
		$sql = "SELECT * FROM usuarios WHERE USUAID=$USUAID";
		$this->consult = $this->connection->Execute($sql);
		if ($this->consult->fields)
			return 1;
	}


	/**
	 * Metodo para consultar por el correo y clave de los usuarios. 
	 * @author Kevin Villa
	 * @return int
	 */
	function existeUSUARIO($USUAEMAI, $USUAPASS)
	{
		$sql = "SELECT * FROM usuarios WHERE USUAEMAI='$USUAEMAI' AND USUAPASS='$USUAPASS'";
		return $this->connection->GetAll($sql);
	
	}


	/**
	 * Metodo para adicionar un registro a la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return boolean
	 */
	function addUsuarios($USUAID, $USUANOMB, $USUAAPEL, $USUATELE, $USUAIDENT, $USUADIRE, $USUAEMAI, $USUAPASS, $USUAESTA, $ROLID, $CIUDID, $TIPOSID,$FECHACREA,$FECHAACTUALIZA,$USUAEMPR)
	{
		$sql = "INSERT INTO usuarios VALUES(0,'$USUANOMB','$USUAAPEL','$USUATELE','$USUAIDENT','$USUAEMPR','$USUADIRE','$USUAEMAI','$USUAPASS','$CIUDID',$USUAESTA,$ROLID,$TIPOSID,'$FECHACREA','$FECHAACTUALIZA')";
		///print_r($sql);
		$this->consult = $this->connection->Execute($sql);

		return $this->consult;
	}

	function getAllUsuarios(){
		$sql = "SELECT * FROM  usuarios";
		$this->consult = $this->connection->GetAll($sql);

		return $this->consult;
	}


}
?>