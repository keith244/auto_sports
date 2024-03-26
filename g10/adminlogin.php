<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h1, h2 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div>
        <h1>Automated Sports System</h1>
        <h2>Admin Login Page</h2>
        <form action="" method="post">
            <label for="email">Enter Email:</label>
            <input type="email" id="email" name="Email" required><br>
            <label for="password">Enter Password:</label>
            <input type="password" id="password" name="Password" required><br>
            <button type="submit" name="login" value="Login">Login</button>
            <p>Register as admin <a href="adminregister.php">here</a></p>
        </form>
    </div>
</body>
</html>
