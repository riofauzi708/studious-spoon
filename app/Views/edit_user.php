<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        form {
            width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }

        button {
            margin-top: 15px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1>Edit User</h1>
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success'); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($validation)): ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors(); ?>
            </div>
        <?php endif; ?>

        <form action="/user/update" method="post">
            <input type="hidden" name="id" value="<?= $user['id']; ?>">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?= $user['username']; ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= $user['email']; ?>" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Update</button>
        </form>
    </div>
</body>

</html>