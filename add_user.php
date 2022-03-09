<?php
include("header.php");
?>
<body class="hold-transition register-page">
  <?php

include("conn.php");
  if(isset($_POST["register"])){
      $mail=$_POST["mail"];
      $name=$_POST["name"];

            $sql= "INSERT INTO admin_login (email,name,type) 
                    VALUES('$mail','$name','user')";
            $result1=mysqli_query($conn, $sql); 
           if($result1){
            header("Location:userlist.php");
           }
    }

  ?>
<div class="register-box">
  <div class="register-logo">
      <b>Admin</b>LTE</a>
  </div>


  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">User Add </p>

      <form action="add_user.php" method="post" enctype="multipart/form-data">
      <!-- <div class="input-group mb-3">
          <label class="fas fa-user">  Choose Profile Picture</label>
          <input type="file" name="profile_picture" alt="User Image" placeholder="Profile Picture">
        </div>
           -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="mail" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
  
        <div class="row">
          <!-- /.col -->
          <div class="col-6">
            <button name="register" type="submit" class="btn btn-primary btn-block">Add</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
     
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
