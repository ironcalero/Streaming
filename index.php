<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SERVIDOR STREAMING</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>SERVIDOR STREAMING</h1>
        <div id="mishuevos">
            <form id="comment-form">
                <input type="text" name="name" placeholder="Nombre"><br>
                <textarea name="comment" placeholder="Comentario"></textarea><br>
                <input type="submit" value="Enviar comentario">
            </form>

            <div id="comments"></div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="live-comments.js"></script>
        </div>

        <div id="video">
            <iframe width="1280" height="720" src="https://rtsp.me/embed/bRhQ5zZn/" frameborder="0" allowfullscreen></iframe>
        </div>

    </body>
</html>
