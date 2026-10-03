<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>
    <h1>User Accounts</h1>

    <p>
        <a href="<?= base_url('customers') ?>">Customer Accounts</a> |
        <a href="<?= base_url('users') ?>">User Accounts</a> |
        <a href="<?= base_url('users/new') ?>">Add New User</a>
    </p>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Avatar</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= esc($user['id']) ?></td>

                <td>
                    <?php if (!empty($user['avatar'])): ?>
                        <img src="<?= base_url('uploads/avatars/' . $user['avatar']) ?>"
                             width="80"
                             height="80"
                             style="object-fit: cover;"
                             alt="User avatar">
                    <?php else: ?>
                        <img src="<?= base_url('uploads/avatars/placeholder.svg') ?>"
                             width="80"
                             height="80"
                             alt="Placeholder avatar">
                    <?php endif; ?>
                </td>

                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['full_name']) ?></td>

                <td>
                    <a href="<?= base_url('users/edit/' . $user['id']) ?>">
                        Edit
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>