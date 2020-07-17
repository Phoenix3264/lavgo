<div class="panel panel-inverse">
    <div class="panel-heading">
        <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
        </div>
        <h4 class="panel-title">Panel Title here</h4>
    </div>
    <div class="panel-body">
        Panel Content Here

        <?php
        
    $kode_provinsi = dmha_69_generate_data('kode_provinsi');
    $kode_kabupaten_kota = dmha_73_generate_data('kode_kabupaten_kota',$kode_provinsi);    
    $kode_kecamatan = dmha_77_generate_data('kode_kabupaten_kota',$kode_kabupaten_kota);
    $kode_desa_kelurahan = dmha_81_generate_data('kode_desa_kelurahan',$kode_kecamatan);

    echo $kode_provinsi.'<br/>';
    echo $kode_kabupaten_kota.'<br/>';
    echo $kode_kecamatan.'<br/>';
    echo $kode_desa_kelurahan.'<br/>';
    ?>
    
    </div>
</div>