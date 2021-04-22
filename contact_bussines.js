jQuery(document).ready(function($) {
	$("#contact-bussines").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/Greenway/mail_bussines.php",
			data: str,
			success: function(msg) {
				if(msg == 'OKK') {
					result = '<div class="ok-bussines">Сообщение отправлено!</div>';
					$("#fields-bussines").hide();
					$("#title-bussines").hide();
				}
				else {result = msg;}
				$('#note-bussines').html(result);
			}
		});
		return false;
	});
});