<div class="borderer-A4-Portrait"></div>

<div class="A4-Portrait-padding-10 font-roman yellow line-onehalf">
    <div class="">
        <div class="width-20 float-left text-center">
            <img src="{{ asset('/public/')}}/logo/unnar.png" alt="unnar" width="120px">
        </div>

        <div class="width-60 float-left text-center">
            <div class="font-size-13 bold">
                {!!dmha_373_what_is_my_penelitian('nama')!!}
            </div>
            <div>
                {!!dmha_373_what_is_my_penelitian('deskripsi')!!}
            </div>
            <div>
                Tahun {!!dmha_373_what_is_my_penelitian('tahun')!!}
            </div>
        </div>
        
        <div class="width-20 float-left text-center">
            <img src="{{ asset('/public/')}}/logo/dikti_brin.png" alt="dikti_brin" width="50px">
        </div>

    </div>

    <div class="clear"></div>
    <hr>

    <br>

    {!!dmha_364_show_table_print($PARAM_2,$PARAM_1)!!}

    <div class="clear"></div>
</div>
