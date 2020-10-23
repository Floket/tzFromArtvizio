<section class="library">
    <div class="library__wrapper">
        <div class="psot__alert"><?php db::editPost()?></div>
        <?php
            $items = db::allPost();
            foreach ($items as $row){
            ?>
        <div class="book">
            <div class="book-img"></div>
                <div class="book-text">
                    <span class="book-name">

                        Название: <?php echo $row['name']?>
                    </span>
                    <br>
                    <span class="book-author">
                        Автор: <?php echo $row['author']?>
                    </span>
                    <br>
                    <span class="book-year">
                        Год выпуска: <?php echo $row['year']?>
                    </span>
                </div>
                <div class="edit-link">
                    <a href="/editPost?id=<?php echo $row['id']?>">Редактировать</a>
                </div>
                </div>
        <?php } ?>
    </div>
</section>

