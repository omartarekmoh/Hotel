$(document).ready(function () {
	$('#search').keyup(function () {
		var value = $('#search').val();
		console.log(value);
		$('#rr').load('get_user.php', {
			value: value,
		});
	});
});
