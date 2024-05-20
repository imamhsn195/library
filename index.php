<?php
    include("config.php");
    $sql = "select *, date_format(created_at, '%d-%m-%Y') as creation_date from book";
    $result = $con->query($sql);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Books</h1>
    <a href="add.php">Add new Book</a>
    <table border="1">

        <thead>
            <tr>
                <th>SL</th>
                <th>Title</th>
                <th>Price</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $sl = 1; ?>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $sl++ ?></td>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['description'] ?></td>
                <td><?php echo $row['creation_date'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a> /
                    <a href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
            </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>