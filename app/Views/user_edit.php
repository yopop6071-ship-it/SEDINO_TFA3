<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>

    <?php $errors = session()->getFlashdata('errors'); ?>

    <?php if ($errors): ?>
        <ul style="color: red;">
            <?php foreach ($errors as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="<?= base_url('users/update/' . $user['id']) ?>"
          method="post"
          enctype="multipart/form-data">

        <p>
            <label>Username:</label><br>
            <input type="text" name="username"
                   value="<?= old('username', $user['username']) ?>">
        </p>

        <p>
            <label>Full Name:</label><br>
            <input type="text" name="full_name"
                   value="<?= old('full_name', $user['full_name']) ?>">
        </p>

        <?php if (!empty($user['avatar'])): ?>
            <p>
                Current Avatar:<br>
                <img src="<?= base_url('uploads/avatars/' . $user['avatar']) ?>"
                     width="100"
                     alt="User avatar">
            </p>
        <?php endif; ?>

        <p>
            <label>Profile Picture (JPG or PNG, maximum 2MB):</label><br>
            <input type="file"
                   name="avatar"
                   accept=".jpg,.jpeg,.png,image/jpeg,image/png">
        </p>

        <button type="submit">Update User</button>
    </form>

    <p><a href="<?= base_url('users') ?>">Back to User Accounts</a></p>
</body>
</html>