<?php
include 'menu_testcase.html';?>

<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['Test_case_idpk']))
{
$sql_query="DELETE FROM testcases WHERE Test_case_idpk=".$_GET['Test_case_idpk'];
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


<style type="text/css">
	
</style>

<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="css/dataTables.responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="css/responsive.dataTables.min.css"/>
<script type="text/javascript" language="javascript" src="js/dataTables.responsive.min.js"></script>
<script type="text/javascript" language="javascript" src="js/dataTables.responsive.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery-1.12.0.min.js"></script> -->

<script src="js/res/jquery.min.js"></script>
<script src="js/res/bootstrap.min.js"></script>

<link href="css/res/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="js/res/jquery.dataTables.min.js"></script>

<link href="css/res/jquery.dataTables.min.css" rel="stylesheet">
<script type="text/javascript" src="js/res/dataTables.responsive.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/res/dataTables.responsive.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/Body.css">
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="css/style.css"></link>
<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

<!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script> -->
<script type="text/javascript" language="javascript" class="init">

$(document).ready(function() {
$('#example').dataTable( {
 "aProcessing": true,
 "aServerSide": true,
  responsive: true,
"ajax": "server-response_testcase.php"
} );
} );
</script>
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {

 	/*edit button as popup*/

 var dlg=$('#edit_dialog').dialog({
         title: 'Register for LifeStor',
         resizable: true,
         autoOpen:false,
         modal: true,
         hide: 'fade',
         width:600,
         height:400
      });
         
         dlg.load('edit_testcase.php?Test_case_idpk='+id, function(){
             dlg.dialog('open');
     
      }); 
 // window.location.href='edit_testcase.php?Test_case_idpk='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='home_testcase.php?Test_case_idpk='+id;
 }
}
</script>

</head>

<body class="dt-example">

<div class="content">
 <div class="row">
<div class="col-sm-10 col-sm-offset-0">
 <h3>Test Case Management</h3>
 
 <a href='add_testcase.php'>AddTestCase</a>
 <a href='download.php'>ExcelExport</a>
 
</div> 
<div id="edit_dialog"></div>
 
 
<div class="col-sm-11 col-sm-offset-0">
 <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
<thead>

<tr>
<th>SNO</th>
<th>Test Case Name</th>
<th>Status</th>
<th>Module</th>
<th>Component</th>

<th>Iteration</th>
<th>Level</th>
<th>Actions</th>
</tr>
</thead>
</table>
</div>
<a class="dashlink" href="index.php">back to Dashboard</a>
</div>
 
</div>


</body>
</html>