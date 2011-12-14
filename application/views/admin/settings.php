<div class="well">
    <h5>Settings</h5>
    <table class="bordered-table zebra-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Code</th>
                <th>Setting data</th>
                <th>Description</th>
                <th id="th_actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($settings as $setting): ?>
                <tr>
                    <td><?php echo $setting['id']; ?></td>
                    <td><?php echo $setting['code']; ?></td>
                    <td><?php echo $setting['set_data']; ?></td>
                    <td><?php echo $setting['description']; ?></td>
                    <td>
                        <a class="item_delete" href="#<?php //echo base_url("settings/delete/$setting->id"); ?>">
                            <button class="btn small danger">Delete</button>
                        </a>
                        <a class="news_edit" href="<?php echo base_url("admin/settings#"); ?>">
                            <button class="btn small info">Edit</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
