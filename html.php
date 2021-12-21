<!DOCTYPE html>
<html>
<head>
    <title>Halaman Pendaftaran Online</title>
    <link rel="stylesheet" type="text/css" href="forstyle.css">
</head>
<body bgccolor="#999">
    <div class="box-form">
        
        <div class="title-form">
            Formulir Pendaftaran Online
        </div>
        
        <div class="content-form">
            <form action="" method="post">
                Nama Lengkap<br>
                <input type="text" name="nama"/><br> 

                Tempat Lahir<br>
                <input type="text" name="tmp_lhr"/><br>

                Tanggal Lahir<br>
                <input type="text" name="nama"/><br>
                    <select name="tgl">
                        <option>Tanggal</option>
                        <?php for($tgl = 1; $tgl<=31; $tgl++){ ?>
                            <option value="<?php echo $tgl ?>"><?php echo $tgl ?></option>
                        <?php }?>   
                    </select>
                    <select name="bln">
                        <option>Bulan</option>
                        <?php
                        $bln = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                        foreach ($bln as $array) { ?>    
                            <option><?php echo $array ?></option>
                         <?php } ?>   
                    </select>
                    <select name="thn">
                        <option>Tahun</option>
                        <?php for ($thn = 1980; $thn<=2017; $thn++){ ?>
                            <option value="<?php echo $thn ?>"><?php echo $thn ?></option>
                        <?php }?>
                    </select><br>       

                    Nomor Telepon<br>
                    <input type="text" name="telp"/><br>
                    
                    Alamat<br>
                    <textarea name="Alamat"></textarea><br>
                    <input type="submit" name="tombol" value="Daftar"/>
                </form>
                <?php
                    if(isset($_POST['tombol'])){
                        include 'koneksi.php';
                        $daftar = mysqli_query($conn, "Insert Into tb_user values(
                            Null,
                            '".$_POST['nama']."',
                            '".$_POST['tgl']."-".$_POST['bln']."-".$_POST['thn']."',
                            '".$_POST['tmp_lhr']."',      
                            '".$_POST['telp']."',    
                            '".$_POST['alamat']."')");
                        if($daftar){
                            echo 'berhasil daftar';
                        }else{
                            echo 'gagal daftar';
                        }
                    }
                ?>
        </div>
    </div>
</body>
</html>
