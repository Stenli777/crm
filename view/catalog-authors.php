<h2>Каталог</h2>
<?php
foreach ($authors as $author):
    ?>
        <p>Автор: <a href="/catalog/author?id=<?=$author->id?>"><?=$author->fullname()?></a></p>
    <br>
<?php endforeach; ?>