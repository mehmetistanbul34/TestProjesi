<!DOCTYPE html>
<html>
<header>

</header>
<body>
    <?php 
        for($i=0;$i<count($kayitlar);$i++){
            print_r($kayitlar[$i]->Game_id." ".$kayitlar[$i]->Game_title." ".$kayitlar[$i]->Unique_users." ".$kayitlar[$i]->Total_play_count);
            echo "<br>";
        } ;
    ?>
</body>
</html>
