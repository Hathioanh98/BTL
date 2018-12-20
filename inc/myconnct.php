 <?php

// kết nối với CSDl
$ketnoi =  mysqli_connect('localhost', 'root','','du_lich');
// Check connection
if (!$ketnoi) {
    die("Connection failed: " . mysqli_connect_error());
} 

else
{
    mysqli_set_charset($ketnoi,"utf8");
}
?>