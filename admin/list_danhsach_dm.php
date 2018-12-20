

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
        ID
    </th>
    <th>
        TenDM
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
 $query=" SELECT * FROM danhmuc";
 $result= mysqli_query($ketnoi,$query) or  die("Connection failed: " . mysqli_error($ketnoi));
 while($dm= mysqli_fetch_array($result, MYSQLI_ASSOC))
 {

    ?>
<tr>
    <td>
<?php
echo $dm['MaDM'];
?>
    </td>
    <td>
    <?php
echo $dm['TenDM'];
?>
    </td>
    <td>
<a href="edit_dm.php?MaDM=<?php echo $dm['MaDM']; ?>"> <img width="20" src="../images/a1.png"></a>
    </td>
    <td>
    <a href="delete_dm.php? MaDM=<?php echo $dm['MaDM']; ?>" onclick="return confirm('Bạn có muốn xóa không?');" > <img  width="20" src="../images/a2.png"> </a>
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