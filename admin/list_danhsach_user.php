

<?php include("a/header.php") ?>
 <?php  include('../inc/myconnct.php');?>
<div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
<h3>
    Danh sách người dùng
</h3>
<table class="table table-hover">
<thead>
<tr>
    <th>
        ID
    </th>
    <th>
        UserName
    </th>
    <th>
        Password
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
 $query=" SELECT * FROM users";
 $result= mysqli_query($ketnoi,$query) or  die("Connection failed: " . mysqli_error($ketnoi));
 while($user= mysqli_fetch_array($result, MYSQLI_ASSOC))
 {

    ?>
<tr>
    <td>
<?php
echo $user['UserID'];
?>
    </td>
    <td>
    <?php
echo $user['UserName'];
?>
    </td>
    <td>
    <?php
echo $user['UserPass'];
?>
    </td>
    <td>
<a href=""> <img width="20" src="../images/a1.png"></a>
    </td>
    <td>
    <a href="delete_user.php? UserID=<?php echo $user['UserID']; ?>" onclick="return confirm('Bạn có muốn xóa không?');" > <img  width="20" src="../images/a2.png"> </a>
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