<?php
    if($_POST) {    
        $q=$_POST['searchword'];    
        $result=mysql_query("SELECT * FROM table_name WHERE title LIKE '$q%' LIMIT 5");
    
        while($row=mysql_fetch_array($result)) {
            $title=stripslashes($row[title]);
            $author=stripslashes($row[author]);
            $no=$row[no];
            $cover_img=$row[cover_img];
            
            echo "
                <div class='display_box' onclick='javascript:goDetail($no);'> 
                    <img src='images/$cover_img' width='50' class='boximage'/><b>$title</b><br/>$author
                </div>                
            ";
        }
    }
?>