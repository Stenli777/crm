<h2>Каталог</h2>
<?php foreach ($books as $book):?>
<p class="inline">Книга: <?=$book->name;?></p>
    <div class="inline">
<?php
$authors = $book->getAuthors();
foreach ($authors as $author):
    ?>

        <p>Автор: <?=$author->fullname()?></p>

<?php endforeach; ?>
    </div>
    <br>
<?php endforeach; ?>