

<?php include("a/header.php") ?>
 <?php  include('../inc/myconnct.php');?>
<div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
<h3>
    Danh sách danh mục
</h3>
<table class="table table-hover">
<thead>
<tr>
    <th>
        Mã Slide
    </th>
    <th>
        Tên Slide
    </th>
    <th>
       Ảnh
    </th>
    <th>
       Tình trạng
    </th>
    <th>
      Link
    </th>
    <th>
      Edit
    </th>
    <th>
      Delete
    </th>
</tr>
 </thead>
 <tbody>
     <?php
 $query=" SELECT * FROM slideshow";
 $result= mysqli_query($ketnoi,$query) or  die("Connection failed: " . mysqli_error($ketnoi));
 while($sl= mysqli_fetch_array($result, MYSQLI_ASSOC))
 {

    ?>
<tr>
    <td>
<?php
echo $sl['MaSlide'];
?>
    </td>
    <td>
    <?php
echo $sl['TenSlide'];
?>
    </td>
    <td>
<?php
echo $sl['Anh'];
?>
    </td>
    <td>
<?php
echo $sl['TrangThai'];
?>
    </td>
    <td>
<?php
echo $sl['Link'];
?>
    </td>

    <td>
<a href="edit_dm.php?MaSlide=<?php echo $dm['MaSlide']; ?>"> <img width="20" src="../images/a1.png"></a>
    </td>
    <td>
    <a href="delete_dm.php?MaSlide=<?php echo $dm['MaSlide']; ?>" onclick="return confirm('Bạn có muốn xóa không?');" > <img  width="20" src="../images/a2.png"> </a>
    </td>
</tr>

<?php

 }
     ?>



</tbody>
</table>

                        </div>
                        </div>

<?php include("a/footer.php") ?>