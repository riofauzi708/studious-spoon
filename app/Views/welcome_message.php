<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .container {
            text-align: center;
            animation: fadeIn 2s ease-in-out;
        }

        .btn-animated {
            position: relative;
            display: inline-block;
            padding: 12px 24px;
            font-size: 18px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out;
        }

        .btn-animated:hover {
            background-color: #0056b3;
            transform: scale(1.1);
            animation: bounce 1s;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-30px);
            }

            60% {
                transform: translateY(-15px);
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .title {
            font-size: 2.5rem;
            color: #007bff;
            animation: slideInFromLeft 2s ease-in-out;
        }

        @keyframes slideInFromLeft {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .description {
            font-size: 1.5rem;
            color: #333;
            animation: slideInFromRight 2s ease-in-out;
        }

        @keyframes slideInFromRight {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="title">Welcome to the User Management System</h1>
        <p class="description">Your ultimate solution for managing users efficiently.</p>
        <a href="/user" class="btn-animated">Go to User List</a>
    </div>
</body>

</html>