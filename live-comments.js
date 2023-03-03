$(document).ready(function() {
    // Carga los comentarios iniciales
    loadComments();

    // Envía el formulario de comentarios mediante AJAX
    $('#comment-form').submit(function(event) {
        event.preventDefault(); // Evita que se recargue la página al enviar el formulario

        $.ajax({
            type: 'POST',
            url: 'process-comment.php',
            data: $(this).serialize(),
            success: function() {
                $('#comment-form')[0].reset(); // Limpia el formulario después de enviar el comentario
                loadComments(); // Actualiza los comentarios después de enviar el comentario
            }
        });
    });

    // Actualiza los comentarios cada 5 segundos
    setInterval(loadComments, 5000);
});

function loadComments() {
    $.ajax({
        type: 'GET',
        url: 'get-comments.php',
        success: function(data) {
            $('#comments').html(data);
        }
    });
}
