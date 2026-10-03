<!DOCTYPE html>
<html>
<head>
    <title>New User</title>
</head>
<body>
    <h1>Add New User</h1>

    <p>
        <a href="<?= base_url('customers') ?>">Customer Accounts</a> |
        <a href="<?= base_url('users') ?>">User Accounts</a>
    </p>

    <?php $errors = session()->getFlashdata('errors'); ?>

    <?php if ($errors): ?>
        <ul style="color: red;">
            <?php foreach ($errors as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="<?= base_url('users/store') ?>" method="post">
        <p>
            <label>Username:</label><br>
            <input type="text" name="username" value="<?= old('username') ?>">
        </p>

        <p>
            <label>Full Name:</label><br>
            <input type="text" name="full_name" value="<?= old('full_name') ?>">
        </p>

        <button type="submit">Save User</button>
    </form>
</body>
</html>