<div class="well">
    <h5>Groups</h5>
    <table class="bordered-table zebra-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th id="th_actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($groups as $group): ?>
                <tr>
                    <td><?php echo $group->id; ?></td>
                    <td><?php echo $group->name; ?></td>
                    <td><?php echo $group->description; ?></td>
                    <td>---</td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
