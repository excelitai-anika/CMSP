<?php
session_start();
include("conn.php");
include("header.php");
include("outline/sidebar.php");
if($_SESSION['type']=="admin"){
    $userId = $_GET['userId'];
    echo  $userId;
$sql="SELECT * FROM admin_login where type='user' ";
  $result=mysqli_query($conn, $sql); 

}
 ?> 
                    
    <?php  
        while($data =mysqli_fetch_assoc($result)) {    
                    echo "<tr>
                            <td>".$data["name"]."</td>
                            <td>".$data["email"]."</td> 
                            <td><a href='#' data-toggle='modal' data-target='#editUserModal'>Edit</td>
                            <td><a href = 'admin_delete_user_list.php?xid=$data[id]'>Delete</td>
                            </tr>
                            "; }
        ?>


<?php
  include("scripts.php");
  ?>

            