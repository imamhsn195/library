<?php 
    include('config.php');


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "select * from book where id=$id";
        $result = $con->query($sql);
        $book = $result->fetch_assoc();
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        $sql = "update book set title='$title', price='$price', description='$description' where id = $id;";

        if($con->query($sql) === TRUE){
            header("Location: index.php");
        }else{
            $sql . " </br>";
            echo "Error: " . $sql . "<br>" . $con->error;
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
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $book['id'] ?>">
        <div>
            <label for="title">Title</label></br>
            <input type="text" name="title" id="title" placeholder="Title" value="<?php echo $book['title'] ?>" required >
        </div>
        <div>
            <label for="price">Price</label></br>
            <input type="number" name="price" id="price" placeholder="price" value="<?php echo $book['price'] ?>" required>
        </div>
        <div>
            <label for="description">Description</label></br>
            <input type="text" name="description" id="description" placeholder="description" value="<?php echo $book['description'] ?>">
        </div>
        <div>
            <button type="submit">Save</button>
        </div>
    </form>
</body>
</html>