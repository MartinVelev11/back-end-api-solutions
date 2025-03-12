<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
        }

        .error {
            background-color: #ffebee;
            color: #c62828;
        }

        .success {
            background-color: #e8f5e9;
            color: #2e7d32;
        }
    </style>
</head>
<body>
    <?php
    $username = 'Martin';
    $password = 'Martiniscool';
    $message = '';

    // check if form is submitted
    if (isset($_POST['submit'])) {
        $inputUsername = $_POST['username'];
        $inputPassword = $_POST['password'];

        // chech username and password
        if ($inputUsername === $username && $inputPassword === $password) {
            $message = "<div class='message success'>Welcome, $username!</div>";
        } else {
            $message = "<div class='message error'>There was an error logging in. Please try again!</div>";
        }
    }
    ?>

    <h1>Login</h1>

    <form action="post.php" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </li>
        </ul>
        <input type="submit" name="submit" value="Login">
    </form>

    <?php

    echo $message;
    ?>
</body>
</html>