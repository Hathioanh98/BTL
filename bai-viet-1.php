<?php include("layout/header.php") ?>

<?php
  include("inc/myconnct.php"); 
  $sql = "SELECT * from tour where Matour=1";
  $result =   mysqli_query($ketnoi,$sql);
while($row= mysqli_fetch_assoc($result)){ 
    echo '<h2 style="color:blue; margin-left:100px; margin-top:30px;"><i>'.$row['Tentour'].'</i></h2><br>';
    echo '<p style="color:red; font-weight:bold;margin-left:50px;">'.$row['Khoihanh'].'</p>';
    echo '<p style="color:brown; font-weight:bold;margin-left:50px;">'.$row['Thoigian'].'</p>';
    echo '<p style="color:green; font-weight:bold;margin-left:50px;"><i>'.$row['Lichtrinh'].'</i></p>';
    echo  '<img src='.$row['Hinhanh'].' width="700px;" height="300px;"  style="margin-left:100px;"/><br> <br>';
    $string= $row['Motalichtrinh'];
    echo '<p style="width:1000px; font-size:13px;margin-left:50px;">'. nl2br($string).'</p>';
    echo  '<img src='.$row['Anh-2'].' width="700px;" height="300px;"  style="margin-left:100px;"/><br> <br>';
    echo '<p style="color:green; font-weight:bold;margin-left:50px;"><i>'.$row['Lichtrinh-1'].'</i></p><br>';
    echo  '<img src='.$row['Anh-3'].' width="700px;" height="300px;"  style="margin-left:100px;"/><br>';
    $string_1= $row['Mota-1'];
     echo '<p style="width:1000px; font-size:13px; margin-left:50px;">'. nl2br($string_1).'</p>';
     echo  '<img src='.$row['Anh-4'].' width="700px;" height="300px;"  style="margin-left:100px;"/><br> <br>';
     echo '<p style="color:green; font-weight:bold;margin-left:50px;"><i>'.$row['Lichtrinh-2'].'</i></p>';
     $string_2= $row['Mota-2'];
     echo '<p style="width:1000px; font-size:13px; margin-left:50px;">'. nl2br($string_2).'</p>';
     echo  '<img src='.$row['Anh-5'].' width="700px;" height="300px;"  style="margin-left:100px;"/><br><br>';

     $string_3= $row['Gia'];
     echo '<p style="width:1000px; font-size:13px; margin-left:50px;">'. nl2br($string_3).'</p> <br>';
     echo  '<img src='.$row['Anh-6'].' width="700px;" height="300px;"  style="margin-left:100px;"/><br> <br>';

     $string_4= $row['Quydinh'];
     echo '<p style="width:1000px; font-size:13px; margin-left:50px;">'. nl2br($string_4).'</p>';
    
     

}
mysqli_close($ketnoi);

?>
  
    <?php include("layout/footer.php") ?>