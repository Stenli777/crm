<form action="/catalog/newbook" method="POST">
    <h2>Добавление новой книги</h2>
    <p>Введите название книги</p>
    <input type="text" name="name">
    <p>Выберите автора</p>
    <select name="authors[]" multiple>
        <?php foreach ($authors as $author):?>
        <option value="<?=$author->id?>"><?=$author->fullname()?></option>
        <?php endforeach;?>
    </select>
    <br>
    <input class="button" type="submit">
</form>
