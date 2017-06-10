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
<script type="text/javascript" language="javascript" class="init">

$(document).ready(function() {
$('#example').dataTable( {
 "aProcessing": true,
 "aServerSide": true,
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
  window.location.href='index.php?delete_id='+id;
 }
}
</script>

</head>

<body class="dt-example">

<div class="content">
				<h1>Dashboard</h1>
				<p>Welcome to SATestAutomation Wiki</p>
				<div class="row">
				<div class="col-sm-4" id="box">
				<div class="box-top">Add Customer</div>
				<div class="box-panel">This tutorial will cover creating a simple pagination script using PHP MySQL with jQuery, i have used here "bootpag - jQuery plugin for dynamic pagination" this plugin is easy to use which creates dynamic pagination with jQuery using PHP, when we have number of records in MySQL table, we must paginate them, we already have a pagination tutorial using PHP OOP and PDO without jQuery, now in this tutorial i have used jQuery which makes pagination easy, so before proceed you can see live demo of jQuery pagination or you can download and try it, have a look. </div>
				</div>
				<div class="col-sm-4" id="box">
				<div class="box-top">Update Customer</div>
				<div class="box-panel">This tutorial will cover creating a simple pagination script using PHP MySQL with jQuery, i have used here "bootpag - jQuery plugin for dynamic pagination" this plugin is easy to use which creates dynamic pagination with jQuery using PHP, when we have number of records in MySQL table, we must paginate them, we already have a pagination tutorial using PHP OOP and PDO without jQuery, now in this tutorial i have used jQuery which makes pagination easy, so before proceed you can see live demo of jQuery pagination or you can download and try it, have a look. </div>
				</div>
				<div class="col-sm-4" id="box">
				<div class="box-top">Update Customer</div>
				<div class="box-panel">This tutorial will cover creating a simple pagination script using PHP MySQL with jQuery, i have used here "bootpag - jQuery plugin for dynamic pagination" this plugin is easy to use which creates dynamic pagination with jQuery using PHP, when we have number of records in MySQL table, we must paginate them, we already have a pagination tutorial using PHP OOP and PDO without jQuery, now in this tutorial i have used jQuery which makes pagination easy, so before proceed you can see live demo of jQuery pagination or you can download and try it, have a look. </div>
				</div>
				</div>
				<div id="box">
				<div class="box-top">Update Customer</div>
				<div class="box-panel">This tutorial will cover creating a simple pagination script using PHP MySQL with jQuery, i have used here "bootpag - jQuery plugin for dynamic pagination" this plugin is easy to use which creates dynamic pagination with jQuery using PHP, when we have number of records in MySQL table, we must paginate them, we already have a pagination tutorial using PHP OOP and PDO without jQuery, now in this tutorial i have used jQuery which makes pagination easy, so before proceed you can see live demo of jQuery pagination or you can download and try it, have a look. </div>
				</div>
				<div id="box">
				<div class="box-top">Update Customer</div>
				<div class="box-panel">This tutorial will cover creating a simple pagination script using PHP MySQL with jQuery, i have used here "bootpag - jQuery plugin for dynamic pagination" this plugin is easy to use which creates dynamic pagination with jQuery using PHP, when we have number of records in MySQL table, we must paginate them, we already have a pagination tutorial using PHP OOP and PDO without jQuery, now in this tutorial i have used jQuery which makes pagination easy, so before proceed you can see live demo of jQuery pagination or you can download and try it, have a look. </div>
				</div>
				<div id="box">
				<div class="box-top">Update Customer</div>
				<div class="box-panel">This tutorial will cover creating a simple pagination script using PHP MySQL with jQuery, i have used here "bootpag - jQuery plugin for dynamic pagination" this plugin is easy to use which creates dynamic pagination with jQuery using PHP, when we have number of records in MySQL table, we must paginate them, we already have a pagination tutorial using PHP OOP and PDO without jQuery, now in this tutorial i have used jQuery which makes pagination easy, so before proceed you can see live demo of jQuery pagination or you can download and try it, have a look. </div>
				</div>
				<div id="box">
				<div class="box-top">Update Customer</div>
				<div class="box-panel">This tutorial will cover creating a simple pagination script using PHP MySQL with jQuery, i have used here "bootpag - jQuery plugin for dynamic pagination" this plugin is easy to use which creates dynamic pagination with jQuery using PHP, when we have number of records in MySQL table, we must paginate them, we already have a pagination tutorial using PHP OOP and PDO without jQuery, now in this tutorial i have used jQuery which makes pagination easy, so before proceed you can see live demo of jQuery pagination or you can download and try it, have a look. </div>
				</div>
				<div id="box">
				<div class="box-top">Update Customer</div>
				<div class="box-panel">This tutorial will cover creating a simple pagination script using PHP MySQL with jQuery, i have used here "bootpag - jQuery plugin for dynamic pagination" this plugin is easy to use which creates dynamic pagination with jQuery using PHP, when we have number of records in MySQL table, we must paginate them, we already have a pagination tutorial using PHP OOP and PDO without jQuery, now in this tutorial i have used jQuery which makes pagination easy, so before proceed you can see live demo of jQuery pagination or you can download and try it, have a look. </div>
				</div>
				<div id="box">
				<div class="box-top">Update Customer</div>
				<div class="box-panel">This tutorial will cover creating a simple pagination script using PHP MySQL with jQuery, i have used here "bootpag - jQuery plugin for dynamic pagination" this plugin is easy to use which creates dynamic pagination with jQuery using PHP, when we have number of records in MySQL table, we must paginate them, we already have a pagination tutorial using PHP OOP and PDO without jQuery, now in this tutorial i have used jQuery which makes pagination easy, so before proceed you can see live demo of jQuery pagination or you can download and try it, have a look. </div>
				</div>
			</div>
</body>
</html>