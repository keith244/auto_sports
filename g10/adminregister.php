<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <div class="container">
        <h1>Automatic Sports System</h1>
        <h2>Admin Registration</h2>
        <form action="adminsignup.php" method="post" novalidate>
            <div>
            <label for="username">Username</label><br>
            <input type="text" id="username" name="Username"><br>
            </div>
            <div>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="Email" ><br>
            </div>
            <div>
            <label for="password">Password</label><br>
            <input type="password" id="password" name="Password" ><br>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
