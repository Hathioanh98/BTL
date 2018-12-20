<?php
include('../inc/myconnct.php');
if(isset($_GET['UserID']) && filter_var($_GET['UserID'],FILTER_VALIDATE_INT,array('min_range'=>1)))
{

 $id= $_GET['UserID'];
$query=" DELETE  FROM users WHERE UserID={$id}";
$result= mysqli_query($ketnoi,$query) or  die("Connection failed: " . mysqli_error($ketnoi));
header('Location: list_danhsach_user.php');
}
else
{
    echo " Bi loi roi kia";
}
?>