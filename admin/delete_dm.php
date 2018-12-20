<?php
include('../inc/myconnct.php');
if(isset($_GET['MaDM']) && filter_var($_GET['MaDM'],FILTER_VALIDATE_INT,array('min_range'=>1)))
{

 $id= $_GET['MaDM'];
$query=" DELETE  FROM danhmuc WHERE MaDM={$id}";
$result= mysqli_query($ketnoi,$query) or  die("Connection failed: " . mysqli_error($ketnoi));
header('Location: list_danhsach_dm.php');
}
else
{
    echo " Bi loi roi kia";
}
?>