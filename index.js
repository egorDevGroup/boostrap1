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

})