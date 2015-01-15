// JQuery Price calc
	$(document).ready(function(){
		$('label').click(function(){
			var total = 0;
			$('.option:checked').each(function(){
				total += parseInt($(this).val());
				$(this).parent().css('background','#FFFFB8');
			});
			$('.option:not(:checked)').each(function(){
				$(this).parent().css('background','#fff');
			});
			$('.total').val('TOTAL: $' + total);
		});
	});