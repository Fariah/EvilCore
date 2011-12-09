<div class="well">
    <h5>Some Evil news...</h5>

    <?php foreach ($news as $news_item): ?>

        <h6><?php echo $news_item['title'] ?></h6>
        <p><?php echo $news_item['description'] ?></p>
        <p><a href="evil_news/<?php echo $news_item['id'] ?>">View article</a><span class="help-block"> создано <?php echo $news_item['date'] ?></span></p>

    <?php endforeach ?>
</div>