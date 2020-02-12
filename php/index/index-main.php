<?php 
    $news = getNews(6);
?>

<main>
    <div class="wrapper">

        <section id="news" class="news">
            <h1 class="news__title title">
                Новости спорта
            </h1>

            <div class="news-items">
                <?php for($i = 0; $i < count($news); $i++): ?>
                <?php require("news-item.php"); ?>
                <?php endfor; ?>
            </div>

            <div class="news__more">
                <div class="news__btn btn btn--md">Еще новости</div>
            </div>
        </section>

    </div>
</main>