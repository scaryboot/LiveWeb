<html>
    <head>
        <title>Upload File</title>
        <style>
            body{
                width: 960px;
                margin: 0 auto;
                text-align: center;
                padding: 20px 0px 20px 0px;
                background-color: #555;
            }
            a{
                -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
                -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
                box-shadow:inset 0px 1px 0px 0px #ffffff;
                background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
                background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
                background-color:#ededed;
                -webkit-border-top-left-radius:6px;
                -moz-border-radius-topleft:6px;
                border-top-left-radius:6px;
                -webkit-border-top-right-radius:6px;
                -moz-border-radius-topright:6px;
                border-top-right-radius:6px;
                -webkit-border-bottom-right-radius:6px;
                -moz-border-radius-bottomright:6px;
                border-bottom-right-radius:6px;
                -webkit-border-bottom-left-radius:6px;
                -moz-border-radius-bottomleft:6px;
                border-bottom-left-radius:6px;
                text-indent:0;
                border:1px solid #dcdcdc;
                display:inline-block;
                color:#777777;
                font-family:arial;
                font-size:15px;
                font-weight:bold;
                font-style:normal;
                height:50px;
                line-height:50px;
                width:100px;
                text-decoration:none;
                text-align:center;
                text-shadow:1px 1px 0px #ffffff;
            }
            a:hover {
                olor: #333;
                background-color: #EBEBEB;
            }
            a:active {
                position:relative;
                top:1px;
            }
            
            h3{
                font-family: sans-serif;
                color: #FFFFFF;
            }
            h2{
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
        <h3>Data Berhasil Disimpan!</h3>
        <?php
        $attr = array(
            "src" => "uploads/" . $upload_data['orig_name'],
            "height" => 100
        );
        $kode_konten=$_POST['kode_konten'];
        $judul_konten=$_POST['judul_konten'];
        $harga_konten=$_POST['harga_konten'];
        $isi=$_POST['isi'];
        $kode_kategori=$_POST['kode_kategori'];
        $data_insert=array(
            'kode_konten'=>$kode_konten,
            'judul_konten'=>$judul_konten,
            'harga_konten'=>$harga_konten,
            'isi'=>$isi,
            'kode_kategori'=>$kode_kategori,
            "path" => "uploads/" . $upload_data['orig_name'],
            );
    
        echo img($attr);
        echo br(2);
        $path = array("uploads/" . $upload_data['orig_name']);
        
        $this->mymodel->InsertData('konten', $data_insert);
        ?>
        <table align="center" style="border-collapse:collapse;background-color:FFFFFF" width="100%" border="1">
            <tr style="background-color:FFCCFF;">
                <th><h2><?php echo "Kode Barang"; ?></h2></th>
                <th><h2><?php echo "Nama Barang"; ?></h2></th>
                <th><h2><?php echo "Harga"; ?></h2></th>
                <th><h2><?php echo "Deskripsi"; ?></h2></th>
                <th><h2><?php echo "Jenis Barang"; ?></h2></th>
            </tr>
            <tr align="center">
                <td><h2><?php echo $kode_konten; ?></h2></td>
                <td><h2><?php echo $judul_konten; ?></h2></td>
                <td><h2><?php echo $harga_konten; ?></h2></td>
                <td><h2><?php echo $isi; ?></h2></td>
                <td><h2><?php echo $kode_kategori; ?></h2></td>
            </tr>
        
        </table>
        <p><?php echo anchor('upload', 'input'); ?></p>
        <a href="<?php echo base_url()."index.php/crud/index";?>">Kembali</a>
        
    </body>
</html>