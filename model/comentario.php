<?php

//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";

Class Comentario
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un metodo para insertar registros
	public function insertar($nombre_persona, $asunto, $cuerpo)
	{
		$sql = "INSERT INTO blog (`nombre_persona`, `asunto`, `cuerpo`)
		VALUES ('$nombre_persona', '$asunto', '$cuerpo')";

		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idblog,$nombre_persona, $asunto, $cuerpo)
	{
		$sql = "UPDATE blog SET nombre_persona='$nombre_persona', asunto='$asunto' , cuerpo='$cuerpo'
		WHERE id='$idblog'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para eleminiar registros
	public function eliminar($idblog)
	{
		$sql = "DELETE FROM blog
    WHERE id = '$idblog'";
		return ejecutarConsulta($sql);
	}


	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idblog)
	{
		$sql = "SELECT * FROM blog
		WHERE id='$idblog'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql = "SELECT * FROM blog";
		return ejecutarConsulta($sql);
	}


}
?>