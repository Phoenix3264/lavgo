<div class="row">
	<div class="col-md-3 text-center">
		<img src="{{ asset('/public/')}}/logo/unnar.png" alt="unnar" width="200px">
	</div>
	<div class="col-md-6 text-center">
		<h3>
			{!!dmha_373_what_is_my_penelitian('nama')!!}
		</h3>
		<h4>
			{!!dmha_373_what_is_my_penelitian('deskripsi')!!}
		</h4>
		<h5>
			Tahun {!!dmha_373_what_is_my_penelitian('tahun')!!}
		</h5>
		
	</div>
	<div class="col-md-3 text-center">
		<img src="{{ asset('/public/')}}/logo/dikti_brin.png" alt="dikti_brin" width="75px">
	</div>
</div>


<div class="row">
    <div class="col-md-2">
        <div class="row">
            <div class="col-md-12">
                {!!dmha_364_show_dashboard_widget_stats()!!}
            </div>>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!!dmha_348_show_dashboard_widget_stats()!!}
            </div>
        </div>
    </div>
    <div class="col-md-10">
        <div class="panel panel-inverse">
            <div class="panel-body">
                <div id='map' style='width: 100%; height: 470px;'></div>
            </div>
        </div>
    </div>
</div>

