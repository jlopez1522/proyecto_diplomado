var tabla;
//funcion que se ejecuta al inicio

function init()
{
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);
	})

	$("#login").on("submit",function(e)
	{
		
        login(e);
	})

}

//Función limpiar 
function limpiar()
{
	$("#nombre_persona").val("");
	$("#asunto").val("");
	$("#cuerpo").val("");
}


//Funcion cancelarform
function cancelarform()
{
	limpiar();

}
//Funcion Listar
function listar()
{	

	$.post("../ajax/comentario.php?op=listar&id=",function(r){
		$("#permisos").html(r);
	});
	
}
//Funcion para guardar o editar

function guardaryeditar(e)
{
    e.preventDefault(); //No se activará la accion predeterminada del evento
    $("#btnGuardar").prop("disabled",true);
    var formData = new FormData($("#formulario")[0]);
    
    $.ajax({

    	url: "../ajax/comentario.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos)
        {
            alert(datos);
			
        }
    });
	location.reload();
    limpiar();
}


function login(e)
{
    e.preventDefault(); //No se activará la accion predeterminada del evento
    var formData = new FormData($("#login")[0]);
    
    $.ajax({

    	url: "../ajax/usuario.php?op=login",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos)
        {

            alert(datos);
            
        }
    });

    location.reload();
	

}

function logout()
{

    var formData = '';
    
    $.ajax({

    	url: "../ajax/usuario.php?op=logout",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos)
        {

            alert(datos);
            
        }
    });

    location.reload();
	

}


//Funcion para desactivar registros
function eliminar(iddato)
{

			$.post("../ajax/comentario.php?op=eliminar", {id: iddato}, function(e){
				alert(e);
				location.reload();

			});
}
init();