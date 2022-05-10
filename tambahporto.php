<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

  
    body{
       background-color: rgb(13, 13, 52);
    }

    p{
        color: white;
    }

    h3{
        color: white;
    }
</style>
<body>
    <h3>Tambahkan Portofolio</h3>
    <div>
        <p>Nama Karya</p>
        <form action="tambahporto.php" method="post" enctype="multipart/form-data">
            <input type="text" required name="nama">

 

        <p>Kategori</p>
       
 
                <select name="kategori" id="">

                    <option value="Animasi">Animasi</option>
                    
                    <option value="Web Design">Web Design</option>
                    
                    <option value="">Web Developing</option>
                    
                    <option value="Animasi">Game Developing</option>
                </select>
      

        <p>Tahun Pembuatan</p>
   
            <input type="text" required name = "tahun">
      
    

        <p>Nama Karya</p>
    
            <input type="file" name="img" required>
    
        <br>
        
        <button type="submit">Tambah</button>
        </form>
    </div>
</body>
</html>

<?php  
include "config/conn.php";

    if(isset($_POST["nama"])){
        echo "not work";
        $nama = $_POST["nama"];
        $kategori = $_POST["kategori"];
        $tahun = $_POST["tahun"];
        $namafile = $nama." ".$tahun.".png";
        $filenya = $_FILES["img"]["tmp_name"];
        $folder = "assets/animasi/$namafile";
        echo $folder;

        $insert = mysqli_query($connect, "INSERT INTO piece (nama_karya,kategori,tahun,gambar) VALUES ('$nama','$kategori','$tahun','$namafile')");

        if (move_uploaded_file( $filenya, $folder)){
            echo "work";
            echo "<script>window.location = 'tambahporto.php'</script>";
        }else{
            echo 'gagal';
        }
    }


?>