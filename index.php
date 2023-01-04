<?php require_once "config.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>My Website kelompok 1 </title>
  </head>
  <body>
    <h1>Welcome to My Website</h1>
    
    <a href="index.php">Home</a> |
    <a href="index.php?page=page1.php">Page 1</a> |
    <a href="index.php?page=page2.php">Page 2</a> |
    <a href="index.php?page=page3.php">Page 3</a> |
    <a href="index.php?page=page4.php">Page 4</a> |
    <a href="index.php?page=page5.php">Page 5</a> 
    
    <hr/>
    
    <?php 
    
    if (isset($_GET['page'])) 
    {   
        include $_GET['page']; 
    } 
    echo"<img src='image/poto.jpeg'width='1350'height='700'/>";
    
    
    echo"
    <br>
    <br>
    <table width='700' height='200' border='0' >
    <tr>
    <td width='50'>&nbsp;</td>
    <td width='200' height='5'>DATA DIRI</td>
    </tr>
    <tr>
    <td width='50'>&nbsp;</td>
    <td width='200' height='5'>Nama Anggota</td>
    <td>:</td>
    <td width='500'> - Adif Akram (2055201072)</td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td>- Taufik Pahlevi (2155201129)</td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td></td>
    <td> </td>
    <td>- Rahmat Karindra (2155201203)</td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>  </td>
    <td></td>
    <td>- Wahyu Redo Ilahi (2155201029) </td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td> </td>
    <td></td>
    <td>- Yudistira Tri Putra (2155201006)</td>
    </tr>
    <tr>
    <td height='21'>&nbsp;</td>
    <td> </td>
    <td></td>
    <td>  </td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>Mata Kuliah</td>
    <td>:</td>
    <td>Keamanan Sistem Jaringan 5.1</td>
    </tr>
    <tr>
    <td height='21'>&nbsp;</td>
    <td> </td>
    <td></td>
    <td>  </td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td> Dosen Pengajar</td>
    <td>:</td>
    <td>Harry Witriyono S.P,M.Kom</td>
    </tr>
    <tr>
    <td height='21'>&nbsp;</td>
    <td> </td>
    <td></td>
    <td>  </td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td> Asal Kampus</td>
    <td>:</td>
    <td>Universitas Muhammadya Bengkulu</td>
    </tr>
    <tr>
    <td height='21'>&nbsp;</td>
    <td> </td>
    <td></td>
    <td>  </td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>Motto</td>
    <td>:</td>
    <td>'Berbuat Baiklah Tanpa Perlu Alasan'/td>
    </tr>
    <tr>
    <td height='21'>&nbsp;</td>
    <td> </td>
    <td></td>
    <td>  </td>
    </tr>
    <tr>
<td height='21'>&nbsp;</td>
<td> </td>
<td></td>
<td> </td>
</tr>
<tr>
<td height='21'>&nbsp;</td>
<td> </td>
<td></td>
<td> </td>
</tr>
<tr>
<td height='21'>&nbsp;</td>
<td> </td>
<td></td>
<td> </td>
</tr>
<tr>
<td height='21'>&nbsp;</td>
<td> </td>
<td></td>
<td> </td>
</tr>
<tr>
<td height='21'>&nbsp;</td>
<td> </td>
<td></td>
<td> </td>
</tr>
<tr>
<td height='21'>&nbsp;</td>
<td> </td>
<td></td>
<td> </td>
</tr>
<tr>
<td height='21'>&nbsp;</td>
<td> </td>
<td></td>
<td> </td>
</tr>
<tr>
<td height='21'>&nbsp;</td>
<td> </td>
<td></td>
<td> </td>
</tr>
<tr>
<td height='21'>&nbsp;</td>
<td> </td>
<td></td>
<td> </td>
</tr>
<tr>
<td height='21'>&nbsp;</td>
<td> </td>
<td></td>
<td> </td>
</tr>
<tr>
<td height='21'>&nbsp;</td>
<td> </td>
<td></td>
<td> </td>
</tr>
<tr>
<td height='21'>&nbsp;</td>
<td> </td>
<td></td>
<td> </td>
</tr>
<tr>
<td height='21'>&nbsp;</td>
<td> </td>
<td></td>
<td> </td>
</tr>
<tr>
<td height='21'>&nbsp;</td>
<td> </td>
<td></td>
<td> </td>
</tr>
<tr>
<td height='21'>&nbsp;</td>
<td> </td>
<td></td>
<td> </td>
</tr>
<tr>
<td height='21'>&nbsp;</td>
<td> </td>
<td></td>
<td> </td>
</tr>
    </table>";
    ?>



     