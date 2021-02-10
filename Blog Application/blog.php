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
       
    $query = "SELECT * FROM blog_post";
    $exe_query = $conn->query($query);

    // delete process..
    if(isset($_GET['id'])){
        $deleteID = $_GET['id'];

        $deleteQuery = "DELETE FROM blog_post WHERE id=$deleteID";

        $exe_Query = $conn->query($deleteQuery);
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    
</head>
<body>
    <div>
        <a href="category.php">Manage Category</a>
        <a href="">My Profile</a>
        <a href="php/logout.php">LogOut</a>
    </div>

    <div>
        <h1>Blog Post</h1>
        <a href="manageblogpost.php">Add Blog Post</a>
    </div>

    <table border='1'>
        <thead>
            <tr>
                <th>Post ID</th>
                <th>Category Name</th>
                <th>Title</th>
                <th>Published Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($result = $exe_query->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $result["id"]?></td>
                        <td></td>
                        <td><?php echo $result["Title"]?></td>
                        <td><?php echo $result["Published_At"]?></td>
                        <td><a href="#">Edit</a> <a href="?id=<?php echo $result["id"]?>">Delete</a></td>
                    </tr>
                    <?php
                }
            ?>
            
        </tbody>
    </table>
    
</body>
</html>