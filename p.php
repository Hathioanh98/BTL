<div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
<?php
  include("inc/myconnct.php"); 
if($_SERVER['REQUEST_METHOD']=='POST')
{

  $errors= array();
  if(empty($_POST['Ten']))
{
    $errors[]='Ten';
}
else{
    $name=$_POST['Ten'];
}
if(empty($_POST['Pass']))
{
    $errors[]='Pass';
}
else{
    $pass=$_POST['Pass'];
}
}
?>



<!--form login-->
<fieldset style="width:350px; height:450px; border: 5px solid gainsboro;display:none; margin: 100px auto;background-color: grey;" id="form-login">
    <div class="login-dark" >
        <form method="POST">
            <h2 class="sr-only">Login Form</h2>
            <br>
            <div class="illustration"><i class="icon ion-ios-locked-outline" style="font-size:70px; color: blue;"></i></div>
            <br>
            <br>
            <div class="form-group">
            <input class="form-control " style="background-color: grey; width: 250px; margin: 0px auto;" type="text" name="Ten" placeholder="UserName">
            <?php
if(isset($errors) && in_array('Ten',$errors)) 
{
    echo "<p class='mess'> Bạn chưa nhập tên</p>";
}

?>
</div>
            <div class="form-group"><input class="form-control"  style="background-color: grey; width: 250px; margin: 0px auto;" type="password" name="Pass" placeholder="Password">
            <?php
if(isset($errors) && in_array('Pass',$errors)) 
{
    echo "<p class='mess'> Bạn chưa nhập Max</p>";
}

?>
            
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block" id="dang"  onclick="Nhan1()" style="  width: 250px;margin: 0px auto;" type="submit">Log In</button></div>
           
    </div>
        </fieldset>
      


        
        </div>
        </div>