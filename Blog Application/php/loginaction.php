<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "blog_db";

    $conn = new mysqli($servername, $username, $password, $db);
    if ($conn->connect_error) {
        echo "<br>";
        echo "Connection failed: " . $conn->connect_error;
    }
    else{
        echo "<br>";
        echo "connected with ". $db;
    }

    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_hash = md5($password);

    $entryQuery = "SELECT email, password_hash FROM user_table";
    $exeQuery = $conn->query($entryQuery);

    while($result = $exeQuery->fetch_assoc()){
        if($email == $result["email"] && $password_hash == $result["password_hash"]){
            header("Location: ../blog.php");
            session_start();
        }
        else{
            echo "<br>";          
            echo "Invalid Credentials";
            echo "<br>";
            echo "<a href='../login.php'>Try Again Using Valid Credentials Else Register Your Self</a>";
            break;
        }
        
    }
    
?>