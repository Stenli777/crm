<img src="<?="/" . $book->image?>"
<p>Книга: <?=$book->name;?></p>
<?php
$authors = $book->getAuthors();
foreach ($authors as $author):
?>
    <p>Автор: <a href="/catalog/author?id=<?=$author->id?>"><?=$author->fullname()?></a></p>
<?php endforeach; ?>
