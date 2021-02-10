<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "blog_db";


    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    }


    // Create database
    $sql = "CREATE DATABASE $db";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $conn = new mysqli($servername, $username, $password, $db);
    if ($conn->connect_error) {
        echo "<br>";
        echo "Connection failed: " . $conn->connect_error;
    }
    else{
        echo "<br>";
        echo "connected with ". $db;
    }
    
    $prefix = $_POST["prefix"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["emailid"];
    $mobilenumber = $_POST["mobilenumber"];
    
    $password = $_POST["password"];
    $password_hash = md5($password);
    $information = $_POST["information"];
    $last_login_at = ""; 
    $created_at = "";
    $updated_at = "";
    $emailValid = True;
    $mobileValid = True;


    $entryQuery = "SELECT email, mobile_number FROM user_table";
    $exeQuery = $conn->query($entryQuery);
    while($result = $exeQuery->fetch_assoc()){
        if($email == $result["email"]){
            echo "<br>";
            echo "email already exists";
            echo "<br>";
            echo "<a href='../registration.php'>Try Again Using Different Email</a>";
            $emailValid = False;
            break;
        }
        if($mobilenumber == $result["mobile_number"]){
            echo "<br>";
            echo "mobilenumber alredy exists";
            echo "<br>";
            echo "<a href='../registration.php'>Try Again Using Different Mobile Number</a>";
            $mobileValid = False;
            break;
        }
    }
    
    
    if($emailValid && $mobileValid){
         $query = "INSERT INTO user_table (prefix, firstname, lastname, email, mobile_number, password, password_hash,
                last_login_at, information, created_at, updated_at) 
                VALUES ('$prefix', '$firstname', '$lastname', '$email', '$mobilenumber', '$password', '$password_hash',
                '$last_login_at', '$information', '$created_at', '$updated_at')";

        if($conn->query($query) === TRUE){
            echo "database added successfully";
             $conn->close();
            header("Location: ../login.php");
        } 
        else{
            echo $conn->error;
        }
    }

   
?>