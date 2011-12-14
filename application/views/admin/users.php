<div class="well">
    <h5>Users</h5>
    <table class="bordered-table zebra-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Group</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->username; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td><?php echo $user->group; ?></td>
                    <td>
                        <a class="user_delete" href="<?php echo base_url("users/delete/$user->id"); ?>">
                            <button class="btn small danger">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
