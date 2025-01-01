$(document).ready(function() {
    $('#login-form').submit(function(e) {
        e.preventDefault();

        var form = $(this);
        var url = form.attr('action');
        var data = form.serialize();

        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            success: function(response) {
                $('#alert-container').html('<div class="alert alert-success">' + response.message + '</div>');
                window.location.href = response.redirectUrl;
            },
            error: function(xhr) {
                var errors = xhr.responseJSON.errors;
                var errorMessage = '<div class="alert alert-danger">';

                $.each(errors, function(key, value) {
                    errorMessage += '<p>' + value[0] + '</p>';
                });

                errorMessage += '</div>';
                $('#alert-container').html(errorMessage);
            }
        });
    });
});
