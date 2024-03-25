<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both email and password are provided
    if (isset($_POST["Email"]) && isset($_POST["Password"])) {
        // Include your database connection file
        include_once "conn.php";

        // Escape user inputs for security
        $email = mysqli_real_escape_string($con, $_POST["Email"]);
        $password = mysqli_real_escape_string($con, $_POST["Password"]);

        // SQL query to check if the user exists in the database
        $query = "SELECT * FROM Players WHERE Email='$email' AND Password='$password'";

        // Execute the query
        $result = mysqli_query($con, $query);

        // Check if the query returned any rows
        if (mysqli_num_rows($result) == 1) {
            // User found, set session variables and redirect to dashboard or home page
            $_SESSION["username"] = $email; // You can set any other session variables you need
            header("Location: dashboard.php"); // Redirect to the dashboard or home page
            exit();
        } else {
            // User not found, show error message
            $error = "Invalid email or password. Please try again.";
            header("location: index.php");
        }
    } else {
        // If email or password is not provided, show error message
        $error = "Email and password are required.";
    }
}
