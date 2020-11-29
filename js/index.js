$(document).ready(function () {
    $('#sendTask').on('click', function () {
        try {
            var name = $('#name').val();
            var tel = $('#tel').val();
            $('#response').load('main.php', {'name': name, 'tel': tel});

        } catch (e) {
            alert(e);
        }
    })

    var tbname = 'users';

    $('#sign').on('click', function () {
        try {
            /*var name = $('#name').val();
            var tel = $('#tel').val();*/

            $('.modal-body').load('php/sign.php', { 'tbname':tbname });

            alert("ok");

        } catch (e) {
            alert(e);
        }
    })

})