<h2>Каталог</h2>
<?php
foreach ($books as $book):
    ?>
        <p>Книга: <a href="/catalog/book?id=<?=$book->id?>"><?=$book->name?></a></p>
    <br>
<?php endforeach; ?>