<html>
    <head>        
        <?php include 'content/head.php'; ?>    
    </head>
    <body>
        <?php include 'content/nav.php'; ?>

        <div class="container">

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
                            Moments
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
                        for ($x = 1; $x <= 4; $x++) {
                            echo '<div class="col-md-6">';
                            
                                echo '<div class="section-img-desc">';
                                    echo '<img src="asset/img/moments/'.$x.'.jpg">';
                                    echo '<div class="img-desc bg-white font-GothamLight fs-11 lh-29">';
                                    
                                        echo '<span class="small-desc font-CrimsonRoman fs-10 grey uppercase mb-10 ls-1">';
                                            echo '12.01.2020';
                                        echo '</span>';

                                        echo '<div class="font-CrimsonRoman fs-23 red uppercase mb-10 ls-1">';
                                            echo 'Engaged Promo';
                                        echo '</div>';
                                        
                                        echo '<div class="a">';
                                            echo 'Boncafe Steak & Ice Cream adalah resto dengan spesialisasi menu steak yang mengutamakan rasa dan kualitas masakan terbaik..';
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