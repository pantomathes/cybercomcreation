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
    $query = "SELECT * FROM category";
    $exe_query = $conn->query($query);


    // delete process..
    if(isset($_GET['id'])){
        $deleteID = $_GET['id'];

        $deleteQuery = "DELETE FROM category WHERE id=$deleteID";

        $exe_Query = $conn->query($deleteQuery);
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
    <div>
        <a href="category.php">Manage Category</a>
        <a href="">My Profile</a>
        <a href="php/logout.php">LogOut</a>
    </div>

    <div>
        <h1>Blog Category</h1>
        <a href="managecategory.php">Add Category</a>
    </div>

    <table border="1">
        <thead>
            <tr>
                <th>Category ID</th>
                <th>Category Image</th>
                <th>Category Name</th>
                <th>Category Date</th>
 
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($result = $exe_query->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $result["id"]?></td>
                        <td><img src="images/<?php echo $result["Image"]?>" alt=""></td>
                        <td><?php echo $result["Title"]?></td>
                        <td><?php echo $result["Created_At"]?></td>
                        <td><a href="#">Edit</a> <a href="?id=<?php echo $result["id"]?>">Delete</a></td>
                    </tr>
                    <?php
                }
            ?>
            
        </tbody>
    </table>
    
</body>
</html>