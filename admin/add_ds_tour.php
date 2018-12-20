<style type="text/css">
.mess 
{
    color:red;
}
.row
{
    height:2000px;
}
</style>

<?php include("a/header.php") ?>
<div class="row" style="height:2000px;">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
<?php
  include('../inc/myconnct.php'); 
if($_SERVER['REQUEST_METHOD']=='POST')
{

  $errors= array();
  if(empty($_POST['Tentour']))
{
    $errors[]='Tentour';
}
else{
    $name=$_POST['Tentour'];
}

if(empty($_POST['Thoigian']))
{
    $errors[]='Thoigian';
}
else{
    $time=$_POST['Thoigian'];
}

if(empty($_POST['Khoihanh']))
{
    $errors[]='Khoihanh';
}
else{
    $kh=$_POST['Khoihanh'];
}

if(empty($_POST['Gia']))
{
    $errors[]='Gia';
}
else{
    $g=$_POST['Gia'];
}
if(empty($_POST['Lichtrinh']))
{
    $errors[]='Lichtrinh';
}
else{
    $lt=$_POST['Lichtrinh'];
}
if(empty($_POST['Motalichtrinh']))
{
    $errors[]='Motalichtrinh';
}
else{
    $mt=$_POST['Motalichtrinh'];
}
if(empty($_POST['Hinhanh']))
{
    $errors[]='Hinhanh';
}
else{
    $ha=$_POST['Hinhanh'];
}
$a2=$_POST['Anh_2'];

if(empty( $errors))
{
    $query=" INSERT INTO tour(Tentour,Thoigian,Khoihanh,Gia,Lichtrinh,Motalichtrinh,Hinhanh,Anh_2) VALUES('{$name}','{ $time}','{$kh}','{$g}','{$lt}','{$mt}','{$ha}','{$a2}')";
    $result= mysqli_query($ketnoi,$query) or  die("Connection failed: " . mysqli_error($ketnoi));
    if(mysqli_affected_rows($ketnoi)==1)
    {
        echo "<p style='color:green;'> Thêm mới thành công </p>";
    }
    else
    {
        echo "<p  style='color:red;'> Thêm mới  không thành công </p>";
    }

}
else
{
    $message="<p class='mess'>Bạn hãy điền đầy đủ thông tin </p>";
}


}


?>


<form name= "frm_add_dm" method="POST" > 
    <?php
    if(isset($message))
    echo $message;
    ?>
    <h3>
        Thêm mới tour
    </h3>
    
  <div class="form-group"> 
    <label >
Tour Name
</label>
<input type="text" name="Tentour" class="form-control" placeholder="Tên tour">

<?php
if(isset($errors) && in_array('Tentour',$errors)) 
{
    echo "<p class='mess'> Bạn chưa nhập tên danh mục </p>";
}

?>
</div>

<div class="form-group"> 
    <label >
Thời gian
</label>
<input type="text" name="Thoigian" class="form-control" placeholder="Thời gian">

<?php
if(isset($errors) && in_array('Thoigian',$errors)) 
{
    echo "<p class='mess'> Bạn chưa nhập thời gian </p>";
}

?>
</div>



<div class="form-group"> 
    <label >
Khởi hành
</label>
<input type="text" name="Khoihanh" class="form-control" placeholder="Khởi hành">

<?php
if(isset($errors) && in_array('Khoihanh',$errors)) 
{
    echo "<p class='mess'> Bạn chưa nhập khởi hành </p>";
}

?>
</div>

<div class="form-group"> 
    <label >
Giá
</label>
<input type="text" name="Gia" class="form-control" placeholder="Giá">

<?php
if(isset($errors) && in_array('Gia',$errors)) 
{
    echo "<p class='mess'> Bạn chưa nhập giá </p>";
}

?>
</div>

<div class="form-group"> 
    <label >
Lịch trình
</label>
<input type="text" name="Lichtrinh" class="form-control" placeholder="Lịch trình">

<?php
if(isset($errors) && in_array('Lichtrinh',$errors)) 
{
    echo "<p class='mess'> Bạn chưa nhập lịch trình </p>";
}

?>
</div>


<div class="form-group"> 
    <label >
Mô tả lịch trình
</label>
<input type="text" name="Motalichtrinh" class="form-control" placeholder="Mô tả lịch trình">

<?php
if(isset($errors) && in_array('Motalichtrinh',$errors)) 
{
    echo "<p class='mess'> Bạn chưa nhập mô tả lịch trình </p>";
}

?>
</div>


<div class="form-group"> 
    <label >
Hình ảnh
</label>
<input type="text" name="Hinhanh" class="form-control" placeholder="Hình ảnh">

<?php
if(isset($errors) && in_array('Hinhanh',$errors)) 
{
    echo "<p class='mess'> Bạn chưa nhập hình ảnh </p>";
}

?>
</div>
<div class="form-group"> 
    <label >
Ảnh _2
</label>
<input type="text" name="Anh_2" class="form-control" placeholder="Hình ảnh">
</div>






<div class="form-group">
    <input type="submit" value="Thêm mới" name="submit" class=" btn btn-primary">
    </form>





                    </div>
</div>
<?php include("a/footer.php") ?>