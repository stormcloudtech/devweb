$(function(){
    $('.form-contatos').ajaxForm({
        dataType: 'json',
        beforeSend: function() {
            $('#loadingImage').show();
            $('.form-contatos').animate({'opacity': '0.6'});
            $('.form-contatos').find('input[type=submit]').prop('value', 'Enviando...');
			$('.form-contatos').find('input[type=submit]').attr('disabled', 'true');
        }, 
        success: function(data) {
            $("#loadingImage").hide();
			$('.form-contatos').animate({'opacity' : '1'})
			$('.form-contatos').find('input[type=submit]').prop('value', 'Enviar')
            $('.form-contatos').find('input[type=submit]').removeAttr('disabled')
            
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
        }
    });
});