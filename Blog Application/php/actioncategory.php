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

    $title = $_POST["title"];
    $content = $_POST["content"];
    $url = $_POST["url"];
    $metaTitle = $_POST["metaTitle"];
    $parentcategory = $_POST["parentcategory"];
    $uploadImage = $_POST["uploadImage"];
    $created_at = getdate();
    
    $query = "INSERT INTO category (Parent_Category_Id, Title, Meta_Title, Url, Content, Image, Created_At, Updated_At)
                VALUES('$parentcategory', '$title', '$metaTitle', '$url', '$content', '$uploadImage', '$created_at', '')";


    $exe_Query = $conn->query($query);

    header("Location: ../category.php");
?>