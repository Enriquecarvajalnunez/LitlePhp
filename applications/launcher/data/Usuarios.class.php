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
	 * Metodo para Inciar la Transaccion en la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return int
	 */
	function begin()
	{
		$this->connection = BeginTrans();
	}

	/**
	 * Metodo para guardar la transaccion en la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return int
	 */
	function commit()
	{
		$this->connection = CommitTrans();
	}

	/**
	 * Metodo para abortar la transaccion en la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return int
	 */
	function rollback($result)
	{
		$this->connection = RollbackTrans();
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
	 * Metodo para consultar el Id max de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return int
	 */
	function maxId()
	{
		$sql = "SELECT max(USUAID) as id FROM usuarios ";
		$this->consult = $this->connection->Execute($sql);
		$max = $this->consult->fields;
		return $max['id'] + 1;

	}


	/**
	 * Metodo para adicionar un registro a la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return boolean
	 */
	function addUsuarios($USUAID, $USUANOMB, $USUAAPEL, $USUATELE, $USUAIDENT, $USUADIRE, $USUAEMAI, $USUAPASS, $USUAESTA, $ROLID_FK, $CIUDID_FK, $TIPOSID_FK)
	{
		$sql = "INSERT INTO usuarios VALUES($USUAID,'$USUANOMB','$USUAAPEL','$USUATELE','$USUAIDENT','$USUADIRE','$USUAEMAI','$USUAPASS',$USUAESTA,$ROLID_FK,$CIUDID_FK,$TIPOSID_FK)";
		$this->consult = $this->connection->Execute($sql);
		//print_r($sql);
		return $this->consult;
	}

	/**
	 * Metodo para actualizar un registro de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return boolean
	 */
	function updateUsuarios($USUAID, $USUANOMB, $USUAAPEL, $USUATELE, $USUAIDENT, $USUADIRE, $USUAEMAI, $USUAPASS, $USUAESTA, $ROLID_FK, $CIUDID_FK, $TIPOSID_FK)
	{
		$sql = "UPDATE usuarios SET USUANOMB='$USUANOMB',USUAAPEL='$USUAAPEL',USUATELE='$USUATELE',USUAIDENT='$USUAIDENT',USUADIRE='$USUADIRE',USUAEMAI='$USUAEMAI',USUAPASS='$USUAPASS',USUAESTA_FK='$USUAESTA',ROLID_FK=$ROLID_FK,CIUDID_FK=$CIUDID_FK,TIPOSID_FK=$TIPOSID_FK WHERE USUAID=$USUAID";
		print_r($sql);
		$this->consult = $this->connection->Execute($sql);
		return $this->consult;
	}

	/**
	 * Metodo para eliminar un registro de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return boolean
	 */
	function deleteUsuarios($USUAID)
	{
		$sql = "DELETE FROM usuarios WHERE USUAID=$USUAID";
		$this->consult = @$this->connection->Execute($sql);
		return $this->consult;
	}

	/**
	 * Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return array
	 */
	function getByIdUsuarios($USUAID)
	{
		$sql = "SELECT * FROM usuarios WHERE USUAID=$USUAID";
		return $this->connection->GetAll($sql);
	}

	/**
	 * Metodo para consultar todos los registros de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return array
	 */
	function getAllUsuarios()
	{
		$sql = "SELECT * FROM usuarios";
		return $this->connection->GetAll($sql);
	}
	/**
	 * Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla usuarios
	 * @author Spyro FrameWork
	 * @return array
	 */
	function getAllBykeyword($keyword, $condiction, $field)
	{

		$sql = "SELECT * FROM usuarios WHERE ";

		switch ($condiction) {


			case "=": //Equal
				$condiction_sql = "$field = '$keyword'";
				break;

			case "!=": //Different  
				$condiction_sql = "$field !='$keyword'";
				break;

			case "_%": //Begin With
				$condiction_sql = "$field like '$keyword%'";
				break;

			case "%_": //End With
				$condiction_sql = "$field like '%$keyword' ";
				break;

			case "%": //End Content
				$condiction_sql = "$field like '%$keyword%' ";
				break;

		}
		$sql .= $condiction_sql;

		return $this->connection->GetAll($sql);
	}

	/**
	 * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USUAID de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return array
	 */
	function getUSUAID($USUAID)
	{
		$sql = "SELECT USUAID FROM usuarios WHERE USUAID=$USUAID";
		return $this->connection->GetAll($sql);
	}


	/**
	 * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USUANOMB de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return array
	 */
	function getUSUANOMB($USUAID)
	{
		$sql = "SELECT USUANOMB FROM usuarios WHERE USUAID=$USUAID";
		return $this->connection->GetAll($sql);
	}


	/**
	 * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USUAAPEL de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return array
	 */
	function getUSUAAPEL($USUAID)
	{
		$sql = "SELECT USUAAPEL FROM usuarios WHERE USUAID=$USUAID";
		return $this->connection->GetAll($sql);
	}


	/**
	 * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USUATELE de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return array
	 */
	function getUSUATELE($USUAID)
	{
		$sql = "SELECT USUATELE FROM usuarios WHERE USUAID=$USUAID";
		return $this->connection->GetAll($sql);
	}


	/**
	 * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USUAIDENT de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return array
	 */
	function getUSUAIDENT($USUAID)
	{
		$sql = "SELECT USUAIDENT FROM usuarios WHERE USUAID=$USUAID";
		return $this->connection->GetAll($sql);
	}


	/**
	 * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USUADIRE de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return array
	 */
	function getUSUADIRE($USUAID)
	{
		$sql = "SELECT USUADIRE FROM usuarios WHERE USUAID=$USUAID";
		return $this->connection->GetAll($sql);
	}


	/**
	 * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USUAEMAI de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return array
	 */
	function getUSUAEMAI($USUAID)
	{
		$sql = "SELECT USUAEMAI FROM usuarios WHERE USUAID='$USUAID'";
		return $this->connection->GetAll($sql);
	}


	/**
	 * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USUAPASS de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return array
	 */
	function getUSUAPASS($USUAID)
	{
		$sql = "SELECT USUAPASS FROM usuarios WHERE USUAID=$USUAID";
		return $this->connection->GetAll($sql);
	}


	/**
	 * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USUAESTA de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return array
	 */
	function getUSUAESTA($USUAID)
	{
		$sql = "SELECT USUAESTA FROM usuarios WHERE USUAID=$USUAID";
		return $this->connection->GetAll($sql);
	}


	/**
	 * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna ROLID_FK de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return array
	 */
	function getROLID_FK($USUAID)
	{
		$sql = "SELECT ROLID_FK FROM usuarios WHERE USUAID=$USUAID";
		return $this->connection->GetAll($sql);
	}


	/**
	 * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna CIUDID_FK de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return array
	 */
	function getCIUDID_FK($USUAID)
	{
		$sql = "SELECT CIUDID_FK FROM usuarios WHERE USUAID=$USUAID";
		return $this->connection->GetAll($sql);
	}


	/**
	 * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna TIPOSID_FK de la tabla: usuarios
	 * @author LittlePHP Framework
	 * @return array
	 */
	function getTIPOSID_FK($USUAID)
	{
		$sql = "SELECT TIPOSID_FK FROM usuarios WHERE USUAID=$USUAID";
		return $this->connection->GetAll($sql);
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
		/*
		$this->consult = $this->connection->Execute($sql);
		if ($this->consult->fields)
			return 1;
		*/	
	}
}
?>