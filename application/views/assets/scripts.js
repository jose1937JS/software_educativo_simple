$(function(){

	var div = $('bd-toc-item')

	$('.a').each(function(i, el){
		$(this).click(function(){
			$(this).parent().parent().parent().hide('slow')
		})
	})

// funcionalidades ajax

// --------------------------------------------------------------------------------------------------

	var a = $('li a:not(.btn)')

	a.click(function(e){
		e.preventDefault();
		(this.attributes[0].value.slice(1) == 'prueba') ? $('main').load('http://127.0.0.1/JFLO/nadales/application/views/'+this.attributes[0].value.slice(1)+'.php') : $('main').load('http://127.0.0.1/JFLO/nadales/application/views/temas/'+this.attributes[0].value.slice(1)+'.php');
	})

// ---------------------------------------------------------------------------------------------------------------------------

	$('#aniadirUser').submit(function(e){
		e.preventDefault()

		$.ajax({
			method: 'post',
			url : 'http://127.0.0.1/JFLO/nadales/index.php/insertar',
			dataType : 'json', 
			data : $('#aniadirUser').serialize()
		})
		.done(function(data)
		{
			$('#cedhelp').text('')
			$('#userhelp').text('')
			if (data.hasOwnProperty('ced')) {
				$('#cedhelp').text('Esta cédula ya tiene un usuario asignado.')
			}
			else if (data.hasOwnProperty('usu')) {
				$('#userhelp').text('Este usuario ya existe.')
			}
		})
		.fail(function(fail){
			document.write(fail.responseText)
		})
	})

// ----------------------------------------------------------------------------------------------------------------------------


	$('#testform').submit(function(e){
		e.preventDefault()

		$.ajax({
			method: 'post',
			url : 'http://127.0.0.1/JFLO/nadales/index.php/enviar_test',
			data : $('#testform').serialize()
		})
		.done(function(resp){
			console.log('Prueba enviada satisfactoriamente al servidor. Ahora espera a que un prfesor la evalue')
			location.href = "http://127.0.0.1/JFLO/nadales/index.php/inicio"
		})
		.fail(function(err){
			document.write(err.responseText)
		})
	})


// ------------------------------------------------------------------------------------------------------------------------------

	$('#calificacion').submit(function(e){
		e.preventDefault()

		$.ajax({
			method: 'post',
			url : 'http://127.0.0.1/JFLO/nadales/index.php/calificar',
			data : $('#calificacion').serialize()
		})
		.done(function(resp){
			console.log('evaluado correctamente!')
			$('#cal').val('')
			$('#r').text('Calificación enviada satisfactoriamente!')
		})
		.fail(function(err){
			document.write(err.responseText)
		})
	})

})