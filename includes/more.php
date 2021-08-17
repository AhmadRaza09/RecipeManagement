<div id="form">
<div style="margin:10px 0px;">
        <span style="font-size:25px; margin-left:8px;">Recipe Detail</span>
        <span style="margin-left:39%;"><a href="searchrecipe.php" style="width:170; padding:7px 16px; margin:4px 6px;   border-radius: 5px;
    border:2px solid rgb(225, 199, 157);
 font-weight:600; margin-left:2px; font-size:17px; background-color:#F2E7D5; color:rgb(103, 109, 10);">Back</a>
        <a href="addrecipe.php" style="width:170px; padding:7px 16px; margin:4px 6px;   border-radius: 5px;
    border:2px solid rgb(225, 199, 157);
 font-weight:600; margin-left:2px; font-size:17px; background-color:#F2E7D5; color:rgb(103, 109, 10);">Add</a>
</sapn>
        </div>
       <div style="padding-left:10px;">
       <?php
        if(isset($output))
        {
            echo $output; 
        }
       ?>
       </div>
    </div>