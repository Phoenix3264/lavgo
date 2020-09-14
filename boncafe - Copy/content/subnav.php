<?php
    $navmenu = array("Story", "Menu", "Event", "Career", "Find Us");
    $counter = 0;
?>

<nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="index.php">
            logo
        </a>

        <?php 

        foreach ($navmenu as $row) {
            echo '<a class="py-2 d-none d-md-inline-block" href="'.str_replace(' ','_',strtolower($row)).'.php">'.$row.'</a>';
            $counter++;
        }

        ?>
    </div>
</nav>