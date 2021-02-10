<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>
<body>
    <h2>Add New Category</h2>
    <form action="php/actioncategory.php" method="post">
        <label for="title">Title </label>
        <input type="text" name="title" required>
        <br>
        <label for="content">Content </label>
        <textarea name="content" id="" cols="30" rows="10" required></textarea>
        <br>
        <label for="url">URL </label>
        <input type="text" name="url" required>
        <br>
        <label for="metaTitle">Meta Title </label>
        <input type="text" name="metaTitle" required>
        <br>
        <label for="parentcategory">Parent Category</label>
        <select name="parentcategory" id="" required>
            <option disabled selected>Select Parent Category</option>
            <option value="1">Education</option>
            <option value="2">Lifestyle</option>
            <option value="3">Health</option>
        </select>
        <br>
        <label for="uploadimage">Upload Image</label>
        <input type="file" name="uploadImage" id="" placeholder="Upload Image" required>
        <br>
        <input type="submit" value="SUBMIT">
    </form>
    
</body>
</html>