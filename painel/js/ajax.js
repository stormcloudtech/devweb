$(function(){

	/**
	 * A partir da classe do formulário, realiza à requisição
	 * ao arquivo PHP responsável por manipular os dados na
	 * base de dados, contido no diretório ajax/
	 */

	$('.form-clientes').ajaxForm({
		dataType: 'json',
		beforeSend: function() {
			$("#loadingImage").show();
			$('.form-clientes').animate({'opacity' : '0.6'})
			$('.form-clientes').find('input[type=submit]').prop('value', 'Cadastrando...')
			$('.form-clientes').find('input[type=submit]').attr('disabled', 'true')
		},
		success: function(data) {
			$("#loadingImage").hide();
			$('.form-clientes').animate({'opacity' : '1'})
			$('.form-clientes').find('input[type=submit]').prop('value', 'Cadastrar!')
			$('.form-clientes').find('input[type=submit]').removeAttr('disabled')
			//$('.box-alert').remove()

			if (data.sucesso) {
				Swal.fire({
					title: 'Sucesso!',
					text: data.mensagem,
					icon: 'success',
					confirmButtonText: 'OK!'
				})
			} else {
				Swal.fire({
					title: 'Erro!',
					text: data.mensagem,
					icon: 'error',
					confirmButtonText: 'OK!'
				})
			}

			//console.log(data)
		}
	})
	$('.form-depoimentos').ajaxForm({
		dataType: 'json',
		beforeSend: function() {
			$("#loadingImage").show();
			$('.form-depoimentos').animate({'opacity' : '0.6'})
			$('.form-depoimentos').find('input[type=submit]').prop('value', 'Cadastrando...')
			$('.form-depoimentos').find('input[type=submit]').attr('disabled', 'true')
		},
		success: function(data) {
			$("#loadingImage").hide();
			$('.form-depoimentos').animate({'opacity' : '1'})
			$('.form-depoimentos').find('input[type=submit]').prop('value', 'Cadastrar!')
			$('.form-depoimentos').find('input[type=submit]').removeAttr('disabled')
			//$('.box-alert').remove()

			if (data.sucesso) {
				Swal.fire({
					title: 'Sucesso!',
					text: data.mensagem,
					icon: 'success',
					confirmButtonText: 'OK!'
				})
			} else {
				Swal.fire({
					title: 'Erro!',
					text: data.mensagem,
					icon: 'error',
					confirmButtonText: 'OK!'
				})
			}

			//console.log(data)
		}
	})

	$('.form-slides').ajaxForm({
		dataType: 'json',
		beforeSend: function() {
			$("#loadingImage").show();
			$('.form-slides').animate({'opacity' : '0.6'})
			$('.form-slides').find('input[type=submit]').prop('value', 'Cadastrando...')
			$('.form-slides').find('input[type=submit]').attr('disabled', 'true')
		},
		success: function(data) {
			$("#loadingImage").hide();
			$('.form-slides').animate({'opacity' : '1'})
			$('.form-slides').find('input[type=submit]').prop('value', 'Cadastrar!')
			$('.form-slides').find('input[type=submit]').removeAttr('disabled')
			//$('.box-alert').remove()

			if (data.sucesso) {
				Swal.fire({
					title: 'Sucesso!',
					text: data.mensagem,
					icon: 'success',
					confirmButtonText: 'OK!'
				})
			} else {
				Swal.fire({
					title: 'Erro!',
					text: data.mensagem,
					icon: 'error',
					confirmButtonText: 'OK!'
				})
			}

			//console.log(data)
		}
	})
})