<?php
    include 'conn.php';
    if(isset($_POST['Submit'])){
        $name= $_POST ['Fullname'];
        $regNumber = $_POST['RegNumber'];
        $email = $_POST['Email'];
        $password= $_POST['Password'];

        $sql= "INSERT INTO Players (FullName, RegNumber, Email, Password ) Values('$name','$regNumber','$email','$password')";

        $result= mysqli_query($con, $sql);
        if ($result==TRUE) {
            echo "SUCCESS";
            header( "Location: index.php" );
        } else {
            echo  "Error:" . $sql . "<br>";
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
        <p>Already have an account? <a href="index.php">Log in</a></p>
    </form>
</body>
</html>
