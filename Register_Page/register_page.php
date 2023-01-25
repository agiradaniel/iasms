<?php
$student_fname = $_COOKIE["student_first_name"];
$student_lname = $_COOKIE["student_last_name"];
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
  <link rel="stylesheet" href="register_page.css"/>

  <script type="text/javascript" src="../js/jquery-3.1.1.min.js"/></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"/></script>

</head>
<body>

<div id="top-navigation">
  <div id="header_logo"><img src="../img/header_log.png" class="img-responsive" alt="logo" style="float:left;width:150px; height:50px;position:relative;left:20px"/></div>
<div id="student_name"><span style="color:rgb(255, 198, 0);font-size:1.1em"><em>Welcome,</em>&nbsp; </span><span style="font-family:serif"><?php echo $student_fname." ".$student_lname;?></span></div>
</div>

<div id="left_side_bar">
<ul id="menu_list">
  <a class="menu_items_link" href="../instructions_page/instructions_page.php"><li class="menu_items_list">Instructions</li></a>
  <a class="menu_items_link" href="register_page.php"><li class="menu_items_list"style="background-color:orange;padding-left:16px">Register</li></a>
  <a class="menu_items_link" href="../student_assumption/student_assumption.php"><li class="menu_items_list">Submit Assupmtion</li></a>
  <a class="menu_items_link" href="../e-logbook/elogbook.php"><li class="menu_items_list">E-Logbook</li></a>
  <a class="menu_items_link" href="../company_supervisor/company_supervisor_login.php"><li class="menu_items_list">Company Supervisor</li></a>
  <a class="menu_items_link" href="../visiting_supervisor/visiting_supervisor_login.php"><li class="menu_items_list">Visiting Supervisor</li></a>
  <a class="menu_items_link" href="../submit_report/submit_report.php"><li class="menu_items_list">Submit Report</li></a>
  <a class="menu_items_link" href="../index.php"><li class="menu_items_list">Logout</li></a>
</ul>
</div>

<div id="main_content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class = "panel">
           <div class = "panel-body pbody pbody_vira">
              <span>In case you have decided and paid to do your Industrial
              Attachment at Koforidua Technical Univeristy,<br><em style="font-weight:bold;color:#2B3775"> Please Click On The Button Below </em></span>
          <br><br>
            <button type="button" class="btn btn-primary btn-medium" style="padding:10px;color:white" id="btn_vira">VIRA</button>
           </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class = "panel">
           <div class = "panel-body pbody pbody_industrial">
              <span>In case you are interning with a company or institution other than Koforidua Technical University,<br><em style="font-weight:bold;color:#2B3775"> Please Click On The Button Below </em></span>
          <br><br>
            <button type="button" class="btn btn-primary btn-medium" style="padding:10px;color:white" id="btn_industrial">INDUSTRIAL</button>
           </div>
        </div>
      </div>
</div>

</div>
</div>

<script>
$(document).ready(function(){
  $("#btn_vira").click(function(){
    var url = "vira_registration_page.php";
    $(location).attr('href',url);
  });

  $("#btn_industrial").click(function(){
    var url = "industrial_registration_page.php";
    $(location).attr('href',url);
  });
});
</script>

</body>
</html>
