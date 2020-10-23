<section class="psot">
    <div class="post__wrapper">
        <form action="/newpost" method="post">
                <span>Название книги:</span>
                <input type="text" name="name">
                <span>Автор:</span>
                <input type="text" name="author">
                <span>Год выпуска:</span>
                <input type="text" name="year">
                <input type="hidden" name="type" value="newpost">
                <input type="submit">
            </form>
            <div class="psot__alert"><?php db::sendPost() ?></div>
        </div>
</section>