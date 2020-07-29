<!DOCTYPE html>
<html>
<head>
    <title>Membuat kalkulator sederhana dengan PHP dan CSS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1+$bil2;
            break;
            case 'kurang':
                $hasil = $bil1-$bil2;
            break; 
            case 'kali':
                $hasil = $bil1*$bil2;
            break;  
            case 'bagi':
                $hasil = $bil1/$bil2;
            break;  
        }
    }    
    ?>
    <div class="kalkulator">
        <h2 class="judul">KALKULATOR</h2>
        <form method="post" action="index.php">
            <input type text="text" name="bil1" class="bil" autocomplete="off" placeholder="masukan bilangan pertama">
            <input type text="text" name="bil2" class="bil" autocomplete="off" placeholder="masukan bilangan kedua">
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="hitung" value="hitung" class="tombol">
        </form>
        <?php if(isset($_POST['hitung'])){ ?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
        <?php }else{ ?>
            <input type="text" value="0" class="bil">
        <?php } ?>
    </div>
</body>
</html>    
