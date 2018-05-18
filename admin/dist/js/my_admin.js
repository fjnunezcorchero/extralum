
$('#enviar_form_usuario').on('click', function(){
    	$('#form_usuario_msg').html('');
        var msg = '';
        if ($('#nombre').val() == '') msg += 'Nombre';
        if ($('#apellido').val() == '') msg += ' Apellido';
        if ($('#correo').val() == '') msg += ' Correo';
        if ($('#perfil').val() == '0') msg += ' Perfil';
        if ($('#id_usuario').val() == '0' && $('#clave').val() == '') msg += ' Clave';
        if (msg != '')
        {
			$('#form_usuario_msg').html('Debe completar los campos: '+msg);
			return false;
        }
        /*
    	$.post("usuarios_data.php", 
    			{accion: $('#accion').val(), 
        		id: $('#id_usuario').val(),
        		id_perfil: $('#perfil').val(), 
    			nombre: $('#nombre').val(),
    			apellido: $('#apellido').val(),
    			correo: $('#correo').val(),
    			clave: $('#clave').val()}, 
    			function(result) {
					eval(result);
    			});
    	*/
		return true;
    });

function listadoUsuarios()
{
	$.post("usuarios_data.php", 
			{accion: 'Listado usuarios'}, 
			function(result) {
				$('#listado_usuarios').html(result);
			});
}

function activarUsuario(id_usuario)
{
	$.post("usuarios_data.php", 
			{accion: 'Activar usuario', 
    		id: id_usuario}, 
			function(result) {
				eval(result);
			});	
}

function borrarUsuario(id_usuario)
{
	$.post("usuarios_data.php", 
			{accion: 'Borrar usuario', 
    		id: id_usuario}, 
			function(result) {
				eval(result);
				listadoUsuarios();
			});
}