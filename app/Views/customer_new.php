<!DOCTYPE html>
<html>
<head>
    <title>New Customer</title>
</head>
<body>
    <h1>Add New Customer</h1>

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

    <form action="<?= base_url('customers/store') ?>" method="post">
        <p>
            <label>Full Name:</label><br>
            <input type="text" name="full_name" value="<?= old('full_name') ?>">
        </p>

        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="<?= old('email') ?>">
        </p>

        <p>
            <label>Phone:</label><br>
            <input type="text" name="phone" value="<?= old('phone') ?>">
        </p>

        <button type="submit">Save Customer</button>
    </form>
</body>
</html>