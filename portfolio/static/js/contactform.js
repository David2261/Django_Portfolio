jQuery(document).ready(function($) {
	$(".ajax-contact-form").submit(function() {
		const str = $(this).serialize();
		$.ajax({
			type: 'POST',
			url: 'https://bulatnasyrov.herokuapp.com/',
			data: str,
			success: function(msg) {
				if (msg == 'OK') {
					result = '<p>Спасибо за комментарий <img src="{% static "img/heartblack.gif" %}"></p>';
					$('.ajax-hidden').hide();
				} else {
					result = msg;
				}
				$('.ajax-response').html(result);
			}
		});
		return false
	});
});