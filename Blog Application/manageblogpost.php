<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog Post</title>
</head>
<body>
    <h2>Add New Blog Post</h2>
    <form action="php/actionblog.php" method="post">
        <label for="title">Title </label>
        <input type="text" name="title">
        <br>
        <label for="content">Content </label>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <br>
        <label for="url">URL </label>
        <input type="text" name="url">
        <br>
        <label for="published_at">Published At </label>
        <input type="date" name="published_at" id="">
        <br>
        <label for="category">Category</label>
        <select name="category" id="">
            <option disabled selected>Category</option>
            <option value="1">Education</option>
            <option value="2">Lifestyle</option>
            <option value="3">Health</option>
        </select>
        <br>
        <label for="uploadimage">Image</label>
        <input type="file" name="image" id="" placeholder="image">
        <br>
        <input type="submit" value="SUBMIT">
    </form>
    
</body>
</html>