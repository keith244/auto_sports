<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Submit'])) {
    // Include your database connection file
    include_once "conn.php";

    // Check if all required fields are provided
    if (isset($_POST['Fullname']) && isset($_POST['RegNumber']) && isset($_POST['Email']) && isset($_POST['Password'])) {
        // Escape user inputs for security
        $name = $mysqli->real_escape_string($_POST['Fullname']);
        $regNumber = $mysqli->real_escape_string($_POST['RegNumber']);
        $email = $mysqli->real_escape_string($_POST['Email']);
        $password = $mysqli->real_escape_string($_POST['Password']);

        // SQL query to insert player details into the database
        $sql = "INSERT INTO Players (FullName, RegNumber, Email, Password) VALUES ('$name', '$regNumber', '$email', '$password')";

        // Execute the query
        $result = $mysqli->query($sql);

        if ($result) {
            // Registration successful, redirect to index.php
            $_SESSION["success_message"] = "Registration successful";
            header("Location: index.php");
            exit();
        } else {
            // Error inserting into database
            echo "Error: " . $mysqli->error;
        }
    } else {
        // If any required field is missing, show error message
        echo "Error: All fields are required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
        h1, h2 {
            color: #333;
        }
        form {
            max-width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #0056b3;
        }
        p {
            margin-top: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>Automatic Sports System</h1>
    <h2>Sign Up Here!!</h2>
    <form method="post" action="register.php">
        <label for="FullName">Full Name</label><br>
        <input type="text" id="FullName" name="Fullname" required placeholder="Enter Full Name" autocomplete="off"><br>
        <label>Registration Number</label><br>
        <input type="text" id="RegNumber" name="RegNumber" required placeholder="BCSC01/1556/2020" autocomplete="off"><br>
        <label for="Email">Email</label><br>
        <input type="email" id="Email" name="Email" required placeholder="example@domain.com" autocomplete="off"><br>
        <label for="Password">Password</label><br>
        <input type="password" id="Password" name="Password" placeholder="Enter your password" required autocomplete="off"><br>
        <button type="submit" name="Submit">Sign Up</button>
        <p>Already have an account? <a href="index.php">Log in</a></p><br><br>
        <p>Login as coach <a href="adminlogin.php">here</a></p>
    </form>
</body>
</html>
