<?php
$item = db::onePost();
?>

<section class="psot">
    <div class="post__wrapper">
        <form action="/edit" method="post">
                <span>Название книги:</span>
                <input type="text" name="name" value="<?php echo $item['name']?>">
                <span>Автор:</span>
                <input type="text" name="author" value="<?php echo $item['author']?>">
                <span>Год выпуска:</span>
                <input type="text" name="year" value="<?php echo $item['year']?>">
                <input type="hidden" name="type" value="edit">
                <input type="hidden" name="id" value="<?php echo $item['id']?>">
                <input type="submit" value="Сохронить">
            </form>

        </div>
</section>