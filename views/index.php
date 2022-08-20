<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

        <h1>Send with royal mail</h1>
        <form action="/send" method="POST">
            <input type="hidden" name="method" value="royal-mail">
            <input type="submit">
        </form>
        <h1>Send with ups</h1>
        <form action="/send" method="POST">
            <input type="hidden" name="method" value="ups">
            <input type="submit">
        </form>
         <?= $message['message'] ?? '' ?>
    </body>

</html>
