<div class="well">
    <h5>Users</h5>
    <table class="bordered-table zebra-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Group</th>
                <th>Active</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->username; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td><?php echo $user->group; ?></td>
                    <td><?php echo $user->active; ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
