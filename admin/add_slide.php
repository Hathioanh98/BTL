
<style type="text/css">
.mess 
{
    color:red;
}
</style>

<?php include("a/header.php") ?>
<div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
<?php
  include('../inc/myconnct.php'); 
if($_SERVER['REQUEST_METHOD']=='POST')
{

  $errors= array();
  if(empty($_POST['TenSlide']))
{
    $errors[]='TenSlide';
}
else{
    $name=$_POST['TenSlide'];
}

  if(empty($_POST['Anh']))
{
    $errors[]='Anh';
}
else{
    $anh=$_POST['Anh'];
}
if(empty($_POST['Link']))
{
    $errors[]='Link';
}
else{
    $link=$_POST['Link'];
}


if(empty( $errors))
{
    $query=" INSERT INTO slideshow(TenSlide,Anh,Link) VALUES('{$name}','{$anh}','{$link}')";
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


<form name= "frm_add_sli" method="POST"  enctype="multipart/form-data"> 
    <?php
    if(isset($message))
    echo $message;
    ?>
    <h3>
        Thêm mới Slide
    </h3>
    
  <div class="form-group"> 
    <label >
Tên SlideShow
</label>
<input type="text" name="TenSlide" class="form-control" placeholder="Tên SlideShow">

<?php
if(isset($errors) && in_array('TenSlide',$errors)) 
{
    echo "<p class='mess'> Bạn chưa nhập tên Slide</p>";
}

?>
</div>


<div class="form-group"> 
    <label >
Ảnh
</label>
<input type="file" name="Anh" value=" " >
<?php
if(isset($errors) && in_array('Anh',$errors))
{
    echo "<p class='mess'> Bạn chưa nhập ảnh</p>";
}

?>
</div>

<div class="form-group"> 
    <label >
URL
</label>
<input type="text" name="Link" class="form-control" placeholder="Link">

<?php
if(isset($errors) && in_array('Link',$errors)) 
{
    echo "<p class='mess'> Bạn chưa nhập tên Link</p>";
}

?>
</div>


    <input type="submit" value="Thêm mới" name="submit" class=" btn btn-primary">
    </form>





                    </div>
</div>
<?php include("a/footer.php") ?>

















