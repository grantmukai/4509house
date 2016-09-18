(function($){

		/* ---------------------------------------------- /*
		 * Contact form ajax
		/* ---------------------------------------------- */

		$("#contact-form").submit(function(e) {

			e.preventDefault();

			var c_name = $("#c_name").val();
			var c_email = $("#c_email").val();
			var c_message = $("#c_message ").val();
			var c_language = $("#c_language").val();
			var responseMessage = $('.ajax-response');

			if (( c_name== "" || c_email == "" || c_message == "") ||(!isValidEmailAddress(c_email) )) {
				responseMessage.fadeIn(500);
				responseMessage.html('<i class="fa fa-warning"></i> Check all fields.');
			}

			else {
				$.ajax({
					type: "POST",
					url: "assets/php/contactForm.php",
					dataType: 'json',
					data: {
						c_email: c_email,
						c_name: c_name,
						c_message: c_message,
						c_language: c_language
					},
					beforeSend: function(result) {
						$('#contact-form button').empty();
						$('#contact-form button').append('<i class="fa fa-cog fa-spin"></i> Wait..Attendez..Espera..');
					},
					success: function(result) {
						if(result.sendstatus == 1) {
							responseMessage.html(result.message);
							responseMessage.fadeIn(500);
							$('#contact-form').fadeOut(500);
						} else {
							$('#contact-form button').empty();
							$('#contact-form button').append('<i class="fa fa-retweet"></i> Try again. Reessayez. Intentar otra vez.');
							responseMessage.html(result.message);
							responseMessage.fadeIn(1000);
						}
					}
				});
			}

			return false;

		});

	});

})(jQuery);
