<div class="well">
    <h5>News</h5>
    <?php echo form_open('admin/save_news/'.$id, 'method="post"'); ?>
    <fieldset>
        <div class="clearfix">
            <label for="xlInput">Дата</label>
            <div class="input">
                <input type="text" size="30" name="news_date" id="" class="medium disabled" disabled="" value="<?php echo $news['date']; ?>">
            </div>
        </div>
        <div class="clearfix">
            <label for="xlInput">Название</label>
            <div class="input">
                <input type="text" size="30" name="news_title" id="" class="xlarge" value="<?php echo $news['title']; ?>">
            </div>
        </div>
        <div class="clearfix">
            <label for="textarea">Текст</label>
            <div class="input">
                <textarea rows="12" name="news_textarea" id="news_textarea" class="xxlarge"><?php echo $news['description']; ?></textarea>
            </div>
        </div>
        <div class="clearfix">
            <input class="btn primary" id="save_news_btn" type="submit" value="Сохранить" />
        </div>
    </fieldset>
    <?php echo form_close(); ?>
</div>