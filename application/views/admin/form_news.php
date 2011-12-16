<div class="well">
    <h5>Новая новость</h5>
    <?php echo form_open('admin/news/set_news'); ?>
    <fieldset>
        <div class="clearfix">
            <label for="xlInput">Дата</label>
            <div class="input">
                <input type="text" size="30" name="news_date" id="" class="medium disabled" disabled="" value="<?php echo $date; ?>">
            </div>
        </div>
        <div class="clearfix">
            <label for="xlInput">Название</label>
            <div class="input">
                <input type="text" size="30" name="news_title" id="" class="xlarge" value="">
            </div>
        </div>
        <div class="clearfix">
            <label for="textarea">Текст</label>
            <div class="input">
                <textarea rows="12" name="news_textarea" id="" class="xxlarge"></textarea>
            </div>
        </div>
        <div class="clearfix">
            <input class="btn primary" id="save_news_btn" type="submit" value="Сохранить" />
        </div>
    </fieldset>
    <?php echo form_close(); ?>
</div>