<?php
    $navmenu = array("History", "Present Time", "Founder", "Philosophy");
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