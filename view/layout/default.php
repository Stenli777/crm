<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title><?=$title;?></title>
</head>
<body>
    <header>
        <p>Здесь хэдер</p>
        <p><a href="/catalog/">Каталог</a></p>
        <p><a href="/catalog/book_form">Добавление книги</a></p>
        <p><a href="/catalog/author_form">Добавление автора</a></p>
    </header>
    <div class="container"><?=$content;?></div>
    <footer>
        <p>Здесь футер</p>
    </footer>
</body>
</html>
