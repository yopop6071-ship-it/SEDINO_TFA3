<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>
<body>
    <h1>Customer Accounts</h1>

    <p>
        <a href="<?= base_url('customers') ?>">Customer Accounts</a> |
        <a href="<?= base_url('customers/new') ?>">Add New Customer</a> |
        <a href="<?= base_url('users') ?>">User Accounts</a>
    </p>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= esc($customer['id']) ?></td>
                <td><?= esc($customer['full_name']) ?></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone']) ?></td>
                <td>
                    <a href="<?= base_url('customers/edit/' . $customer['id']) ?>">
                        Edit
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>