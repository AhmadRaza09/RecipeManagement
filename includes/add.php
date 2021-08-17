<div id="form">
        <p><?php
                if(isset($_SESSION['done']))
                {
                        echo $_SESSION['done'];
                }
                else
                {
                       if(isset($_SESSION['not']))
                       {
                        echo $_SESSION['not'];
                       }
                }
        ?></p>
        <h1 style="float:left">Add Recipe</h1>
        <div style="margin-top:3%; margin-left:74%;"><a href="searchrecipe.php" style="width:170; padding:7px 16px; margin:4px 6px;  border-radius: 5px;
    border:2px solid rgb(225, 199, 157);
 font-weight:600; margin-left:2px; font-size:17px; background-color:#F2E7D5; color:rgb(103, 109, 10);">Recipes</a></div>
        <div style="clear:both;">
        <form action="" method="post">
        <label for="title">Recipe Title</label><br>
        <input type="text"id="title" name="title" pattern="[A-Za-z| ]{3,100}" title="Recipe title should be minimum 3 alphabetic character" required><br>
        <label for="time">Time To Cook(minutes)</label><br>
        <input type="number" id="time" name="time" min="0" required><br>
        <label for="description">Recipe Description</label><br>
        <textarea name="description" id="description" cols="30" rows="10" minlength="8"  title="Alphanumeric only with no special characters" onkeyup="alphanumericOnly(this)" required></textarea><br>
        <label for="ingredients">Required Ingredients</label><br>
        <textarea name="ingredients" id="ingredients" cols="30" rows="10" minlength="3" title="Alphanumeric only with no special characters" onkeyup="alphanumericOnly(this)" required></textarea><br>
        <div style="text-align:right; margin-right:49px;"><input type="submit" value="Save" name="save" style="width:110px; padding:4px 8px; margin:4px 6px; font-weight:600; margin-left:2px; font-size:17px; background-color:#F2E7D5; color:rgb(103, 109, 10);"><input type="reset" value="Clear" style="width:100px; padding:4px 8px;font-size:17px;  margin:4px 6px; background-color: #F2E7D5;
"></div>
        </form>        
        </div>
</div>
    