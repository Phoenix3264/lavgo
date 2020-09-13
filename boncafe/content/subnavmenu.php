<?php
    $navmenu = array("Appetizer", "Main Course", "Kids Menu", "Desert", "Take Out Menu");
    $counter = 0;
?>

<div class="bg-white font-CrimsonRoman text-center sub-menu-div">
    <?php
        foreach ($navmenu as $row) {
            echo '<a class="sub-menu-boncafe fs-12 uppercase ls-1" href="'.str_replace(' ','_',strtolower($row)).'.php">'.$row.'</a>';
            $counter++;
        }
    ?>
</div>