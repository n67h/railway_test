<?php
    require_once 'db.php';

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $id = mysqli_real_escape_string($conn, $_POST['id']);

        $query = "INSERT INTO names (id, full_name) VALUES ('$id', '$name');";
        $result = mysqli_query($conn, $query);
        if($result){
            header('location: index.php?submitted');
            die();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">ID: </label>
        <input type="text" name="id" id="id">
        <br>

        <label for="name">Name: </label>
        <input type="text" name="name" id="name">
        <br>
        
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>