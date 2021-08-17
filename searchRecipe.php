<?php include("assests/database/connection.php");?>
    <?php 
        $query = "SELECT COUNT(id) as count FROM allrecipe";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        $records = $row['count'];
        if($records >= 1)
        {
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            if($page > 0)
            {
                 
            $limit = 6;
            $offset = ceil(($page - 1) * $limit);
            $totalpage = ceil($records/$limit);
            $prev = $page;
            $next = $page;
            $query = "SELECT id, title, description FROM allrecipe LIMIT $limit OFFSET $offset";
            $result = mysqli_query($connection, $query);
            $output = "";
            foreach($result as $row)
            {
                $description = $row['description'];
                if(strlen($description)>100)
                {
                    $ans = str_split($description,100);
                    $split = $ans[0];
                }
                else
                {
                    $split = $description;
                }
                $output .= " <div class='float'>
                <p>Recipe Title:</p>
                <p class='detail'>{$row['title']}</p>
                <p>Recipe Description:</p>
                <p class='detail'>$split</p>
                <div class='a'><a href='readmore.php?id={$row['id']}' >Read more...</a></div>
            </div>";
            }
            $output .= "<div class='pagination'>";
            if($prev > 1)
            {
                $prev = $prev - 1;
                $output .= " <a href='searchRecipe.php?page=$prev' style='background-color:#b8b74d; color:white; padding:8px 12px; border-radius:10px;'>prev</a>
                ";
            }
            $count = 0;
            for($i = $page; $i <= $totalpage; $i++)
            {
                if($count != 3)
                {
                    if($page == $i)
                    {
                         $active = "background-color:#FE9178; color:black;";
                    }
                    else
                    {
                     $active = "";
                    }
                    $output .= " <a href='searchRecipe.php?page=$i' style='background-color:#b8b74d; color:white; padding:8px 12px; border-radius:10px; $active'>$i</a>
                    ";
                }
                else
                {
                    break;
                }
                $count = $count + 1;
                
            }
            if($next < $totalpage)
            {
                $next = $next + 1;
                $output .= " <a href='searchRecipe.php?page=$next' style='background-color:#b8b74d; color:white; padding:8px 12px; border-radius:10px;'>next</a>
                ";
            }
            $output .= "</div>";
            }
        }
        else
        {
             $output = "<p style='text-align:center;  background-color:#F5DAAF; font-size:20px;  padding:5px; max-width:80%; margin:auto; margin-bottom:2.3%;'>No records found<p>";
        }
        mysqli_close($connection);
    ?>
<?php include("includes/header.php");?>
<?php include("includes/search.php");?>  
<?php include("includes/footer.php");?>