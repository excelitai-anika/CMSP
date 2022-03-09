<?php
session_start();
include("conn.php");
include("outline/nav.php");
include("outline/sidebar.php");
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> 
<?php
include("header.php");
?>