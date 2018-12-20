
<?php ob_start();  
// tạo nên bộ nhớ đệm khi ng dùng ấn với id linh tinh
// quay lại trang chủ   ?>
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
  if(isset($_GET['MaDM']) && filter_var($_GET['MaDM'],FILTER_VALIDATE_INT,array('min_range'=>1)))
  {
      // kiểm tra xem MADM có tồn tại hay không và có phải dạng số hay k và lớn>=1
      // nếu đúng thì tạo biến$id

    $id= $_GET['MaDM'];
  }
  else
  {
    header('Location: list_danhsach_dm.php');
    exit();
    // không đún thì quay lại list
  }
 // kiểm tra lỗi  
if($_SERVER['REQUEST_METHOD']=='POST')
{

  $errors= array();
  // khởi tạo mạng kiểm tra rỗng
  if(empty($_POST['TenDM']))
{
    // nếu mảng này là rỗng thì thêm lỗi vào mảng trên
    $errors[]='TenDM';
}
else{
    $name=$_POST['TenDM'];
    // ngược lại k rỗng thì lấy giá trị
}


if(empty($errors))
{
    // nếu biến error là rỗng thì mới tiến hành update
$query=" UPDATE danhmuc SET TenDM='{$name}' WHERE MaDM={$id}" ;
    $result= mysqli_query($ketnoi,$query) or  die("Connection failed: " . mysqli_error($ketnoi));
    if(mysqli_affected_rows($ketnoi)==1)
    {
        echo "<p style='color:green;'> Sửa thành công </p>";
    }
    else
    {
        echo "<p  style='color:red;'> Sửa không thành công </p>";
    }

}
else
{
    $message="<p class='mess'>Bạn hãy điền đầy đủ thông tin </p>";
}


}
// đỏ dl ra text
$query_id="SELECT TenDM FROM danhmuc WHERE MADM={$id}";
$result_id= mysqli_query($ketnoi,$query_id) or  die("Connection failed: " . mysqli_error($ketnoi));
// kiểm tra cái id này có tồn tại hay không
if(mysqli_num_rows($result_id)==1)
{ // câu truy vấn tồn tại
    list($name)=mysqli_fetch_array($result_id,MYSQLI_NUM);
}
else
{
    echo "<p  style='color:red;'> ID không tồn tại </p>";
}


?>


<form name= "frm_add_dm" method="POST"> 
    <?php
    if(isset($message))
    echo $message;
    ?>
    <h3>
        Sửa danh mục: <?php if (isset($name)) {echo $name;}?> 
    </h3>
    
  <div class="form-group"> 
    <label >
CatName
</label>
<input type="text" name="TenDM" class="form-control" placeholder="Tên danh mục" value= "<?php
// nếu tồn tại cái name này thì hiển thị name
 if(isset($name)){ echo $name;}   ?> ">


<?php
if(isset($errors) && in_array('TenDM',$errors))
{
    echo "<p class='mess'> Bạn chưa nhập tên danh mục </p>";
}

?>
</div>
<div class="form-group">
    <input type="submit" value="Sửa" name="submit" class=" btn btn-primary">
    </form>





                    </div>
</div>
<?php include("a/footer.php") ?>
<?php ob_flush();     ?>