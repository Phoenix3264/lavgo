
        <?php
        
        $kode_provinsi = dmha_69_generate_data('kode_provinsi');
        $kode_kabupaten_kota = dmha_73_generate_data('kode_kabupaten_kota',$kode_provinsi);    
        $kode_kecamatan = dmha_77_generate_data('kode_kecamatan',$kode_kabupaten_kota);
        $kode_desa_kelurahan = dmha_81_generate_data('kode_desa_kelurahan',$kode_kecamatan);
    
        echo 'Kode Provinsi : '.$kode_provinsi.'<br/>';
        echo 'Kode Kabupaten Kota : '.$kode_kabupaten_kota.'<br/>';
        echo 'Kode Kecamatan : '.$kode_kecamatan.'<br/>';
        echo $kode_desa_kelurahan.'<br/>';
        ?>
        