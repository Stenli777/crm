<p>Книга: <?=$book->name;?></p>
<?php
$authors = $book->getAuthors();
foreach ($authors as $author):
?>
    <p>Автор: <?=$author->fullname()?></p>
<?php endforeach; ?>
