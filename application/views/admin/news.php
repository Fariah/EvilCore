<div class="well">
    <h5>News</h5>
    <table class="bordered-table zebra-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th id="th_actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($news as $one_news): ?>
                <tr>
                    <td><?php echo $one_news['id']; ?></td>
                    <td>
                        <a href="<?php echo base_url("news/view/".$one_news['id']); ?>">
                            <?php echo $one_news['title']; ?>
                        </a>
                    </td>
                    <td>
                        <a class="item_delete" href="<?php echo base_url("admin/news#"); ?>">
                            <button class="btn small danger">Delete</button>
                        </a>
                        <a class="news_edit" href="<?php echo base_url("admin/news#"); ?>">
                            <button class="btn small info">Edit</button>
                        </a>
                        <a class="news_hide" href="<?php echo base_url("admin/news#"); ?>">
                            <button class="btn small success">Show</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>