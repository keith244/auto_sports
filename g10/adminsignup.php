<?php
if (empty($_POST['Username'])){
    die("Name is required");
}
if(! filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){
    die("Valid email is required");
}
$mysqli = require "conn.php";
$sql = "INSERT INTO admins (Username,Email, Password) VALUES(?,?,?)";
$stmt = $mysqli -> stmt_init();
if (! $stmt -> prepare ($sql)){
    die("SQL Error: ". $mysqli -> error);
}

$stmt ->bind_param ("sss",$_POST["Username"], $_POST["Email"],$_POST["Password"]); 
if($stmt -> execute()){
    echo "Signup successful";
}else {
    if ($mysqli->errno == 1062) { // Duplicate entry error
        die("Email is already in use. Please choose another email.");
    } else {
        die("Error: " . $mysqli->error);
    }
}                

?>