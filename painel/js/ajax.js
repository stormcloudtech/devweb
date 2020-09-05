$(function(){
	$('.ajax').ajaxForm({
		dataType: 'json',
		beforeSend: function() {
			$("#loadingImage").show();
			$('.ajax').animate({'opacity' : '0.6'})
			$('.ajax').find('input[type=submit]').prop('value', 'Cadastrando...')
			$('.ajax').find('input[type=submit]').attr('disabled', 'true')
		},
		success: function(data) {
			$("#loadingImage").hide();
			$('.ajax').animate({'opacity' : '1'})
			$('.ajax').find('input[type=submit]').prop('value', 'Cadastrar!')
			$('.ajax').find('input[type=submit]').removeAttr('disabled')
			$('.box-alert').remove()

			if (data.sucesso) {
				$('.ajax').prepend('<div class="box-alert sucesso"><i class="fa fa-check"></i> O cliente foi inserido com sucesso!</div>')
			} else {
				$('.ajax').prepend('<div class="box-alert erro"><i class="fa fa-times"></i> <strong>' + data.mensagem + '</strong></div>')
			}

			console.log(data)
		}
	})
})