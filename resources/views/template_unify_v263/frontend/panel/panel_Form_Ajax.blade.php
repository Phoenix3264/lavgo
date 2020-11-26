<section class="g-bg-gray-light-v5">
    <div class="container g-py-100">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-9 col-lg-6">
                <div class="u-shadow-v21 g-bg-white rounded g-py-40 g-px-30">
                    <header class="text-center mb-4">
                        <h2 class="h2 g-color-black g-font-weight-600">
                            Pendaftaran Mind Suhu
                        </h2>
                    </header>
   
                    {!!unify_v263_open_form_with_id($id)!!}
                    @csrf
                    <div class=""  id="form"></div>                        
                    {!!unify_v263_submit('submit',$id,'submit','Sign Up',$dmha_271)!!}                

                    {!!UI_FORM_close_form()!!}
                </div>
            </div>
        </div>
    </div>
</section>