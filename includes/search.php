<div id='search' >
    <div style="text-align:center; margin-bottom:20px;">  
          <form action="result.php" method="post">
     <div style="text-align:left; margin-left:12.8%;"><label for="recipe">Recipe</label></div>
        <input type="text" id="recipe" name="recipe"  minlength="3" maxlength="100"  onkeyup="alphabetOnly(this)" placeholder="Enter Recipe" style="margin-left:10px;margin-right:10px;">
        <input type="submit" name="search" value="Search" style="width:110px; padding-bottom:28px; margin-left:10px;margin-right:10px; font-weight:600; margin-left:2px; font-size:17px; background-color:#F2E7D5; color:rgb(103, 109, 10);">
        <a href="addrecipe.php" style="width:170px; padding:7px 16px; ; margin:4px 6px;   border-radius: 5px;
    border:2px solid rgb(225, 199, 157);
 font-weight:600; margin-left:2px; font-size:17px; background-color:#F2E7D5; color:rgb(103, 109, 10);">Add</a>

    </form>

        </div>
    <div style="margin-left:2.8%;">
        <?php if(isset($output))
        {
            echo $output; 
        }
        ?>
    </div>    

    </div>    