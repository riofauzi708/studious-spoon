<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h1 class="mb-4">User List</h1>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success'); ?>
        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td class="actions">
                        <a href="/user/edit/<?= $user['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                        <form action="/user/delete/<?= $user['id']; ?>" method="post" class="d-inline">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="/user/create" class="btn btn-success">Add New User</a>
</body>

</html>