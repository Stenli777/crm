<p>Автор: <?=$author->fullname();?></p>
<?php
$books = $author->getBooks();
foreach ($books as $book):
    ?>
    <p>Книга: <a href="/catalog/book?id=<?=$book->id?>"><?=$book->name?></a></p>
<?php endforeach; ?>
