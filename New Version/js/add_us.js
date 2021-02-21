$(document).ready(function () {
    $('#formmmm').submit(function (e) {
        e.preventDefault();
        var dist_name = $('#inputCity').val();
        var check_in = $('#inputCheckIn').val();
        var check_out = $('#inputCheckOut').val();
        var adult = $('#adult').val();
        var child = $('#children').val();
        var room = $('#room').val();
        var submit = $('#submit').val();
        $('#tmmmm').load('db/check.php', {
            dist_name: dist_name,
            check_in: check_in,
            check_out: check_out,
            adult: adult,
            child: child,
            room: room,
            submit: submit,
        });
    });
});