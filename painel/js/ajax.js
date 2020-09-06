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
			$('.box-alert').remove()

			if (data.sucesso) {
				$('.form-clientes').prepend('<div class="box-alert sucesso"><i class="fa fa-check"></i> ' + data.mensagem + '</div>')
			} else {
				$('.form-clientes').prepend('<div class="box-alert erro"><i class="fa fa-times"></i> <strong>' + data.mensagem + '</strong></div>')
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
			$('.box-alert').remove()

			if (data.sucesso) {
				$('.form-depoimentos').prepend('<div class="box-alert sucesso"><i class="fa fa-check"></i> ' + data.mensagem + '</div>')
			} else {
				$('.form-depoimentos').prepend('<div class="box-alert erro"><i class="fa fa-times"></i> <strong>' + data.mensagem + '</strong></div>')
			}

			//console.log(data)
		}
	})
})