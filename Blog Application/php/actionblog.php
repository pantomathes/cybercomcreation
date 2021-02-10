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
    $published_at = $_POST["published_at"];
    $category = $_POST["category"];
    $uploadImage = $_POST["uploadImage"];
    $created_at = getdate();

    $query = "INSERT INTO blog_post (user_id, Title, Url, Content, Image, Published_At, Created_At, Updated_At)
                VALUES('$user_id', '$title', '$url', '$content', '$uploadImage', '$published_at', '$created_at', '')";


    $exe_Query = $conn->query($query);

    header("Location: ../blog.php");
?>