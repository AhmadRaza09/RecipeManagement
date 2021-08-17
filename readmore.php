<?php include("assests/database/connection.php")?>
<?php
    if(isset($_GET['id']) && $_GET['id'] >= 1)
    {
        $query = "SELECT * FROM allrecipe ";
    $query .= "WHERE id={$_GET['id']}";
    $result  = mysqli_query($connection, $query);
    mysqli_close($connection);
    $row = mysqli_fetch_assoc($result);
    $output = " <p>Recipe Title:</p>
    <p class='detail'>{$row['title']}</p>
    <p>Time To Cook:</p>
    <p class='detail'>{$row['time']} minutes</p>
    <p>Recipe Description:</p>
    <p class='detail'>{$row['description']}</p>
    <p>Ingredients:</p>
    <p class='detail'>{$row['ingredients']}</p>";
    }
?>
<?php include("includes/header.php"); ?>
<?php include("includes/more.php"); ?>
<?php include("includes/footer.php"); ?>