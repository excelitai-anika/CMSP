<?php
session_start();
include("conn.php");
include("header.php");
include("outline/sidebar.php");
if($_SESSION['type']=="admin"){
$sql="SELECT * FROM admin_login where type='user' ";
  $result=mysqli_query($conn, $sql); 

}
 ?>   

<body class="hold-transition sidebar-mini layout-fixed">
<div >

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
      <section class="content">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">User Table</h3>
                  </div>

                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">Name</th>
                          <th style="width: 40px">Email</th>
                          <th style="width: 40px">Edit</th>
                          <th style="width: 40px">Delete</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                    
                        <?php  while($data =mysqli_fetch_assoc($result)) {    
                                      echo "<tr>
                                              <td>".$data["name"]."</td>
                                              <td>".$data["email"]."</td> 
                                             
                                             <td><a href = 'admin_edit_user_list.php?uid=$data[id] &nm=$data[name] &em=$data[email] &pw=$data[password]'>Edit</td> 

                                              <td><a href = 'admin_delete_user_list.php?xid=$data[id]'>Delete</td>
                                              </tr>
                                              "; }
                         ?>

                     <!-- <td><a href = 'admin_edit_user_list.php?uid=$data[id] &nm=$data[name] &em=$data[email] &pw=$data[password]'>Edit</td> -->
                     <!-- <td><a href='#' data-toggle='modal' data-target='#editUserModal' onclick='test'>Edit</td> -->

                     <!-- <div class="input-group mb-3">
                      <input type="input" class="form-control" name="ggg"  placeholder="Email">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div> -->
                        
                      <div class="col-6">
                      <a href="add_user.php" class="nav-link active">
                        <p>
                            Add User    
                          <i class="far fa-plus-square"></i>
                        </p>
                      </a>
          



                    </div>     
                </div>
                <!-- /.card -->
                </div>
            </div>
          </div>
    </section>
</div>


<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        sdfdfdff
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save-change-btn">Save changes</button>
      </div>
    </div>
  </div>


<script>
  function test () {
    console.log("H");
  }
  $('#editUserModal').on('show.bs.modal', function (event) {
    console.log("He");
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

<!-- 
  // var myModal = new bootstrap.Modal(document.getElementById('editUserModal'));
  //   document.getElementById('show-modal-btn').addEventListener('click', () => {
  //     myModal.show();
  // });

  // document.getElementById('save-change-btn').addEventListener('click', () => {
  //     log('dasd')  
  //   myModal.hide();    
  // });
  
  
  // $.get(`userDetailsJSON.php/`, function(data, status){
  //   alert("Data: " + data + "\nStatus: " + status);
  // }); -->
<!-- </script> -->
<?php
  include("scripts.php");
  ?>

            