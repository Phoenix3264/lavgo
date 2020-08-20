<?php 

    function UI_dashboard_widget_stats($color,$icon,$nama,$count)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
        // ------------------------------------------------------------------------- ACTION
            $isi = '
            <div class="widget widget-stats '.$color.'">
                <div class="stats-icon">'.$icon.'</div>
                <div class="stats-info">
                    <h5>'.$nama.'</h5>
                    <p>'.$count.'</p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
            ';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
        //////////////////////////////////////////////////////////////////////////// 		
    }  

    function UI_dashboard_stats_link($color,$icon,$nama,$count)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
        // ------------------------------------------------------------------------- ACTION
            $isi = '
            <div class="stats-link">
                <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
            </div>
            ';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
        //////////////////////////////////////////////////////////////////////////// 		
    }  
    
    
    