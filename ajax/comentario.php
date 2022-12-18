<?php
session_start();
require_once "../model/comentario.php";

$comentario=new Comentario();

$id=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
$nombre_persona=isset($_POST["nombre_persona"])? limpiarCadena($_POST["nombre_persona"]):"";
$asunto=isset($_POST["asunto"])? limpiarCadena($_POST["asunto"]):"";
$cuerpo=isset($_POST["cuerpo"])? limpiarCadena($_POST["cuerpo"]):"";


switch ($_GET["op"]){
	case 'guardaryeditar':
		if(empty($id)) {
			$rspta=$comentario->insertar($nombre_persona, $asunto, $cuerpo);
			echo $rspta ? "Registro ingresado": "Registro no se pudo ingresar";
		}
	break;

	case 'eliminar':
		$rspta=$comentario->eliminar($id);
		echo $rspta ? "Registro Eliminado": "Registro no se puede Eliminar";
	break;

	case 'listar':

		$rspta=$comentario->listar();
		//Vamos a declarar un array

		$data= array();
		$a = '';

		while ($reg=$rspta->fetch_object()) {
			$a .='<div class="card text">';
			$a .='<div class="card-header"> <b>Nuevo comentario de : '.$reg->nombre_persona.'</b></div>';
			$a .='<div class="card-body">';
			$a .='<h5 class="card-title">'.$reg->asunto.'</h5>';
			$a .='<p class="card-text">'.$reg->cuerpo.'</p>';
			if($_SESSION["user_profile"] == 'A'){
				$a .=($reg->id)?'<button class="btn btn-danger" onclick="eliminar('.$reg->id.')"><i class="fa fa-close"> </i></button>':'<button class="btn btn-danger" onclick="eliminar('.$reg->id.')"><i class="fa fa-close"> </i></button>';
			
			}			
			$a .='</div>';
			$a .='<div class="card-footer text-muted"> Fecha : '.$reg->fecha_registro.'</div>';
			$a .='</div><br>';

		}

		echo $a;
	break;
}

?>