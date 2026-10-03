<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>
    <h1>Edit Customer</h1>

    <?php $errors = session()->getFlashdata('errors'); ?>

    <?php if ($errors): ?>
        <ul style="color: red;">
            <?php foreach ($errors as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="<?= base_url('customers/update/' . $customer['id']) ?>" method="post">
        <p>
            <label>Full Name:</label><br>
            <input type="text" name="full_name"
                   value="<?= old('full_name', $customer['full_name']) ?>">
        </p>

        <p>
            <label>Email:</label><br>
            <input type="email" name="email"
                   value="<?= old('email', $customer['email']) ?>">
        </p>

        <p>
            <label>Phone:</label><br>
            <input type="text" name="phone"
                   value="<?= old('phone', $customer['phone']) ?>">
        </p>

        <button type="submit">Update Customer</button>
    </form>

    <p><a href="<?= base_url('customers') ?>">Back to Customer Accounts</a></p>
</body>
</html>