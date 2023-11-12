<?php
    require_once 'db.php';

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $query = "INSERT INTO names (full_name) VALUES ('$name');";
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
        <label for="name">Your name: </label>
        <input type="text" name="name" id="name">
        <button type="submit" name="submit">Submit</button>
    </form>
    
</body>
</html>