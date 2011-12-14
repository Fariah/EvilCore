<div class="well">
    <h5>Admin menu</h5>
    <ul>
        <?php foreach ($menu as $link): ?>
            <li<?php if ($menu[0] == $link) echo " class='active'"; ?>>
                <a href="<?php echo base_url("admin/$link"); ?>"><?php echo $link; ?></a>
            </li>
            <?php endforeach ?>
    </ul>
</div>
