/*Inicio de codigo en Jquery*/
	$(document).ready(function() {
		/*Json de formulario*/
		var formulario = 
		{
			padre: $('.Fcontent'),
			cantidadForm: $('#Fcontent').children('.Pform').length,
			posicion:1
		}
		/*Se aplica la posicion left en 0 al primer bloque del formulario*/
		formulario.padre.children('.Pform').first().css({
			left: 0
		});
		/*Funcion para cambiar el bloque del formulario al segundo bloque*/
		$('#botonUno').on('click', function(e) {
			e.preventDefault();
			
			$('.Fcontent .activo').removeClass('activo').next().addClass('activo').animate({
				'left': '0%'
			});
		});

		$('#botonDos').on('click', function(e) {
			e.preventDefault();
			
			$('.Fcontent .activo').removeClass('activo').next().addClass('activo').animate({
				'left': '0%'
			});
		});
	});