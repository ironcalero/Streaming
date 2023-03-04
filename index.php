<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SERVIDOR</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>SERVIDOR STREAMING</h1>
        <div id="chat">
            <div id="comments"></div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="live-comments.js"></script>

            <form id="comment-form">
                <input type="text" name="name" placeholder="Nombre"><br>
                <textarea name="comment" placeholder="Comentario"></textarea><br>
                <input type="submit" value="Enviar comentario">
            </form>
        </div>

        <pre>
            <div class="video">
                <iframe src="https://rtsp.me/embed/bRhQ5zZn/" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
            </div>
        </pre>

    </body>
</html>
