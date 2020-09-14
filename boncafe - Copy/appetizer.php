<html>
    <head>        
        <?php include 'content/head.php'; ?>    
    </head>
    <body>
        <?php include 'content/nav.php'; ?>
        <?php include 'content/subnavmenu.php'; ?>

        <div class="container-md">

            <section>
                <div class="row">
                    <div class="col-md-3 text-right">    
                        <div class="">
                            Our Events
                        </div>                
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-3 text-right">    
                        <div class="subtitle">
                            Main<br/>Course
                        </div>                
                    </div>
                    <div class="col-md-7">
                        <p class="text-justify paragraf">
                            Boncafe Steak & Ice Cream adalah resto dengan spesialisasi menu steak yang mengutamakan rasa dan kualitas masakan terbaik. Boncafe Steak & Ice Cream bukan hanya menjadi tempat dining dengan atmosfir yang nyaman, tetapi juga menjadi rekomendasi venue untuk perayaan acara private ataupun korporasi.
                        </p>
                    </div>
                </div>
            </section>

            <section>
                <div class="row justify-content-md-center">

                    <?php
                        for ($x = 1; $x <= 9; $x++) {
                            echo '<div class="col-md-4">';
                            
                                echo '<div class="section-img-desc-three-coloumn">';
                                    echo '<img src="asset/img/menu/'.$x.'.jpg">';
                                    echo '<div class="img-desca bg-white font-GothamLight fs-11 lh-29">';
                                    
                                        echo '<div class="font-CrimsonRoman text-center ls-1 fs-12">';
                                            echo 'Tenderloin';
                                        echo '</div>';

                                    echo '</div>';
                                echo '</div>';

                            echo '</div>';
                        }
                    ?>
                </div>
                
                <div class="row justify-content-md-center text-center">
                    <div class="col-md-2 fs-13 uppercase">
                        Page
                    </div>
                </div>
                
                <div class="row justify-content-md-center text-center">
                    <a href="" class="col-md-1 fs-13 uppercase button-page">Previous</a>
                    <div class="col-md-2 fs-30 uppercase">
                        01 / 10
                    </div>
                    <a href="" class="col-md-1 fs-13 uppercase button-page">Next</a>
                </div>
            </section>
        </div>

        <?php include 'content/footer.php'; ?>
    </body>
</html>