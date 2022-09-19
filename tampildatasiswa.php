<?php
    include 'koneksi.php' 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
  <nav>
    <div class="logo">
      <p>STARBHAKPUSTAKA</p>
    </div>

    <div class="profil">
      <i class="fa-solid fa-user"></i>
    </div>
  </nav>

  <div class="sidebar">
    <div class="foto"></div>
    <p class="nama">NAME NAME NAME</p>

    <div class="link">
      <ul>
        <li><a href="">Dashboard</a></li>
        <li><a href="">Members Registration</a></li>
        <li><a href="">Members Date Tabel</a></li>
        <li><a href="">Book Registration</a></li>
        <li><a href="">Book Data Table</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </div>
  </div>

  <div class="kotak-kanan">
    <p>Tambah Data Siswa</p>
    <a href="pelanggan.html" class="tambah-data">[+] Tambah Baru</a>
    <table border="1">
      <tr>
        <th>NISN</th>
        <th>NAMA</th>
        <th>KELAS</th>
        <th>JURUSAN</th>
        <th>TELEPON</th>
        <th>EMAIL</th>
        <th>ALAMAT</th>
        <th>ACTION</th>
      </tr>

      <?php
        $sql = "SELECT * FROM dataanggota"; 
        $qeury = mysqli_query($connect, $sql);
        while($pel = mysqli_fetch_array($qeury)){ 
          echo "
          <tr>
            <td>$pel[0]</td>
            <td>$pel[1]</td>
            <td>$pel[2]</td>
            <td>$pel[3]</td>
            <td>$pel[4]</td>
            <td>$pel[5]</td>
            <td>$pel[6]</td>
            <td>
              <a href='formedit.php?nisn=".$pel['nisn']."'>Edit</a>      
              <a href='hapus.php?nisn=".$pel['nisn']."'>Hapus</a>
            </td>
        </tr>";
        }

      ?>
    </table>
  </div>
</body>
</html>