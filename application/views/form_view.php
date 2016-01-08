<html>
    <head>
        <title>Upload File</title>
        <link href="<?php echo base_url()."asset/";?>css/css_form_view.css" rel="stylesheet">

    </head>

    <body class="tambahdata">
        <div>
            <?php
            echo $error;
            echo form_open_multipart('upload/do_upload');
            ?>
        </div>
        
        
        <form action="" method="post" >
            
            <div><h2>Input Barang</h2></div>
            <div>
                <label>
                    <span>Kode Konten</span>
                    <input id="kode_konten" type="text" name="kode_konten"/>
                </label>
            </div>
            
            <div>
                <label>
                    <span>Judul Konten</span>
                    <input id="judul_konten" type="text" name="judul_konten"/>
                </label>
            </div>
            
            <div>
                <label>
                    <span>Harga Konten</span>
                    <input id="harga_konten" type="text" name="harga_konten"/>
                </label>
            </div>
            
            <div>
                <label>
                    <span>Isi</span>
                    <input id="isi" type="text" name="isi"/>
                </label>
            </div>
            
            <div>
                <label>
                    <span>Kode Kategori</span>
                    <input id="kode_kategori" type="text" name="kode_kategori"/>
                </label>
            </div>
                
            <div>
                <label>
                    <span>Upload Foto</span>
                    <input class="button" type="file" name="userfile" size="20" />
                </label>
             </div>
            <div>
                <label>
                    <span>&nbsp;</span>
                    <input class="button" type="submit" value="upload" />
                </label>
            </div>
            
            
        </form>
        
        <div>
            <?php
            echo form_close();
            ?>
        <div>
                
            
    </body>
</html>