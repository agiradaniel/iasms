<?php
include '../database_connection/database_connection.php';

if(isset($_POST["btn_login"])){
  if($_POST["admin_password"]!=""){
	$entered_password = $_POST["admin_password"];
    $check_password_query = "SELECT * FROM system_admin WHERE password='$entered_password' LIMIT 1";
    $execute_check_password_query = mysqli_query($conn,$check_password_query);
    $check_admin_validity = mysqli_num_rows($execute_check_password_query);

    if($check_admin_validity==1){
      header("Location:view_registered_students/view_registered_students.php");
    }else{
		echo "<script>alert('Entered Password Is Incorrect')</script>";
	}
  }
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IASMS</title>

  <link rel="stylesheet" href="../css/bootstrap-theme.min.css"/>
  <link rel="stylesheet" href="../css/bootstrap.min.css"/>
  <link rel="stylesheet" href="../css/bootstrap-select.css"/>
  <link rel="stylesheet" href="../css/main_page_style.css"/>
  <link rel="stylesheet" href="index.css"/>

  <script type="text/javascript" src="../js/jquery-3.1.1.min.js"/></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"/></script>

</head>
<body>
<div id="top-navigation">
  <div id="header_logo"><img src="../img/header_log.png" class="img-responsive" alt="logo" style="float:left;width:150px; height:50px;position:relative;left:20px"/></div>
<div id="student_name"><span style="color:rgb(255, 198, 0);font-size:1.1em"><em>Welcome,</em>&nbsp; </span><span style="font-family:serif">Admin</span></div>
</div>

<div id="main_content">
  <div class="container-fluid">
    <div class = "panel panel-adjusted">
       <div class = "panel-heading phead">
          <h2 class = "panel-title ptitle">Login - Administrator</h2>
       </div>
       <form method="post" action="">
        <div class = "panel-body pbody">
          <div class="panel">
           <div class="panel-body pbody_login_holder">
             <br>
             <div style="text-align:center;font-size:1.2em"><strong>PASSWORD</strong></div>
             <hr>
                  <input type="password" class="form-control form-control-adjusted" id="admin_password" name="admin_password" placeholder="Enter Password"/><br>
                <div id="btn_login_holder" style="float: right">
                <input type="submit" class="btn btn-primary" value="Login" id="btn_visiting_login" name="btn_login"/>
            </div>
       </div>
       </panel>
      </div>
     </div>
     </form>
     
  
   </div>
 </div>
    <div style="margin-left: 35%">
     	<span><a href="../index.php"><u>Go Back To Main Login</u></a></span>
     </div>
</body>
</html>
