$(function(){
	$('[name=cpf]').mask('999.999.999-99')
	$('[name=cnpj]').mask('00.000.000/0000-00')

	$('[name=tipo_cliente]').change(function(){
		var val = $(this).val();
		if (val == 'fisico') {
			$('[name=cpf]').parent().show();
			$('[name=cnpj]').parent().hide();
		} else {
			$('[name=cpf]').parent().hide();
			$('[name=cnpj]').parent().show();
		}
	})

})