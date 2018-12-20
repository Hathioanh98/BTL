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
  if(empty($_POST['UserName']))
{
    $errors[]='UserName';
}
else{
    $username=$_POST['UserName'];
}

if(empty($_POST['UserPass']))
{
    $errors[]='UserPass';
}
else{
    $userpass=$_POST['UserPass'];
}
if(empty( $errors))
{
    $query=" INSERT INTO users(UserName,UserPass) VALUES('{$username}','{$userpass}')";
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


<form name= "frm_addvideouser" method="POST"> 
    <?php
    if(isset($message))
    echo $message;
    ?>
    <h3>
        Thêm mới User
    </h3>
    
  <div class="form-group"> 
    <label >
UserName
</label>
<input type="text" name="UserName" class="form-control" placeholder="UserName">

<?php
if(isset($errors) && in_array('UserName',$errors))
{
    echo "<p class='mess'> Bạn chưa nhập tên </p>";
}

?>
</div>

<div class="form-group">
 <label >
Password
</label>
<input type="text" name="UserPass" class="form-control" placeholder="Password">

<?php
if(isset($errors) && in_array('UserPass',$errors))
{
    echo "<p class='mess'> Bạn chưa nhập password </p>";
}

?>
    </div>
    <input type="submit" value="Thêm mới" name="submit" class=" btn btn-primary">
    </form>





                    </div>
</div>
<?php include("a/footer.php") ?>