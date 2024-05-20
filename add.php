<?php 
    include('config.php');
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $title = $_POST['title'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        $sql = "insert into book(title, price, description) values ('$title', '$price','$description')";

        if($con->query($sql) === TRUE){
            header("Location: index.php");
        }else{
            $sql . " </br>";
            $con->error;
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    Create book
    <form action="add.php" method="post">
        <div>
            <label for="title">Title</label></br>
            <input type="text" name="title" id="title" placeholder="Title" required>
        </div>
        <div>
            <label for="price">Price</label></br>
            <input type="number" name="price" id="price" placeholder="price" required>
        </div>
        <div>
            <label for="description">Description</label></br>
            <input type="text" name="description" id="description" placeholder="description">
        </div>
        <div>
            <button type="submit">Save</button>
        </div>
    </form>
</body>
</html>