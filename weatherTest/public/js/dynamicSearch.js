$(function () {

    $('form').on('submit', function (e) {

        e.preventDefault();

        $.ajax({
            type: 'post',
            url: 'post.php',
            data: $('form').serialize(),
            success: function () {
                alert('form was submitted');
            }
        });

    });

});