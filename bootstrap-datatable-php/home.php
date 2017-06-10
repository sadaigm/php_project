<?php
include 'menu.html';?>

<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM employee WHERE EMP_ID=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/Body.css">
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="css/style.css"></link>


<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="css/dataTables.responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="css/responsive.dataTables.min.css"/>
<script type="text/javascript" language="javascript" src="js/dataTables.responsive.min.js"></script>
<script type="text/javascript" language="javascript" src="js/dataTables.responsive.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery-1.12.0.min.js"></script> -->

<script type="text/javascript" language="javascript" class="init">

$(document).ready(function() {
$('#example').dataTable( {
 "aProcessing": true,
 "aServerSide": true,
  responsive: true,
"ajax": "server-response.php",
} );
} );
 
</script>
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='home.php?delete_id='+id;
 }
}
</script>

</head>

<body class="dt-example">

<div class="content">
 <div class="row">
<div class="col-sm-10 col-sm-offset-0">
 <h3>CRUD Operations With PHP and MySql</h3>
 
 <a href='add_data.php'><button type='button' class='btn btn-primary btn-md'>Add New Member</button></a>
</div> 

 
 
<div class="col-sm-10 col-sm-offset-0">
 <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
<thead>

<tr>
<th>EMP_ID</th>
<th>EMP_NAME</th>
<th>EMP_SALARY</th>
<th>EMP_HIRE_DATE</th>
<th>OPERATIONS</th>
</tr>
</thead>
</table>
</div>
<a href="index.php">back to Dashboard</a>
</div>
 
</div>


</body>
</html>