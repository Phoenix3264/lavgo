
            <section>
                <div class="row justify-content-md-center">
                    <div class="col-md-3">
                        <div class="subtitle">
                            tes
                        </div>      
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
                <div class="row">

                    <?php
                        for ($x = 1; $x <= 4; $x++) {
                            echo '<div class="col-md-6">';

                                // echo '<img src="asset/img/moments/'.$x.'.jpg">';
                                // echo '<div class="desc-img">';
                                //     echo 'Boncafe Steak & Ice Cream adalah resto dengan spesialisasi menu steak yang mengutamakan rasa dan kualitas masakan terbaik..';
                                // echo '</div>';

                            echo '</div>';
                        }
                    ?>
                </div>
            </section>
