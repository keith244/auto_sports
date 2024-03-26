<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both email and password are provided
    if (isset($_POST["Email"]) && isset($_POST["Password"])) {
        // Include your database connection file
        include_once "conn.php";

        // Escape user inputs for security
        $email = $mysqli->real_escape_string($_POST["Email"]);
        $password = $mysqli->real_escape_string($_POST["Password"]);

        // SQL query to check if the user exists in the database
        $query = "SELECT * FROM Players WHERE Email='$email' AND Password='$password'";

        // Execute the query
        $result = $mysqli->query($query);

        // Check if the query returned any rows
        if ($result && $result->num_rows == 1) {
            // User found, set session variables and redirect to dashboard or home page
            $_SESSION["Email"] = $email;
            header("Location: dashboard.php"); // Redirect to the dashboard or home page
            exit();
        } else {
            // User not found, show error message
            echo "Invalid email or password. Please try again.";
            echo "Create account here <a href='index.php'>Sign up</a>";
        }
    } else {
        // If email or password is not provided, show error message
        $error = "Email and password are required.";
    }
}
?>
