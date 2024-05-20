<?php
include("config.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "delete from book where id = $id";

        if($con->query($sql)){
            header("Location: index.php");
        }else{
            $con->error;
        }
    }
?>