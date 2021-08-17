<?php session_start(); ?>
<?php include('assests/database/connection.php')?>
<?php
    if(isset($_POST['save']))
    {
        $title = $_POST['title'];
        $time = $_POST['time'];
        $description = $_POST['description'];
        $ingredients  =$_POST['ingredients'];
        $query = "INSERT INTO allrecipe(title, time, description, ingredients) ";
        $query .= "VALUES('$title', $time, '$description', '$ingredients')";
        $result = mysqli_query($connection, $query);
        mysqli_close($connection);
        if(isset($result))
        {
            
            
            $_SESSION['done'] = "Your recipe is added";
        }
        else
        {
             $_SESSION['not'] = "Your recipe is not added";
        }
    }
?>
<?php include("includes/header.php");?>
<?php include("includes/add.php");?>    
<?php include("includes/footer.php");?>
<?php session_destroy(); ?>