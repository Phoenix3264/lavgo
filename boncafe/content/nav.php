<?php
    $navmenu = array("Story", "Menu", "Event", "Career", "Find Us");
    $counter = 0;
?>

<!--
<nav class="sticky-top py-1">
    <div class="container d-flex  flex-md-row justify-content-between">
        <a class="py-2" href="index.php">
            logo
        </a>

        <?php 

        foreach ($navmenu as $row) {
            echo '<a class="py-2 " href="'.str_replace(' ','_',strtolower($row)).'.php">'.$row.'</a>';
            $counter++;
        }

        ?>
    </div>
</nav>
    -->


<nav class="navbar navbar-expand-lg ">

    <div class="collapse navbar-collapse justify-content-md-center">
        <ul class="navbar-nav">
            <?php 
                foreach ($navmenu as $row) {
                    echo '
                    <li class="nav-item active">
                        <a class="nav-link" href="'.str_replace(' ','_',strtolower($row)).'.php">'.$row.'</a>
                    </li>
                    ';
                    $counter++;
                }
            ?>
        </ul>
    </div>
</nav>