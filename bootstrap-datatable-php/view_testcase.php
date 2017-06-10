<?php
include 'menu_testcase.html';?>
<?php
include_once 'dbconfig.php';
if(isset($_GET['Test_case_idpk']))
{
 $sql_query="SELECT * FROM testcases WHERE Test_case_idpk=".$_GET['Test_case_idpk'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data

 $Component = $_POST['Component'];
 $Iteration = $_POST['Iteration'];
 $Feature_Name = $_POST['Feature_Name'];
 $Module = $_POST['Module'];
 $TC_Prerequisites = $_POST['TC_Prerequisites']; 
 $Test_Case_ID = $_POST['Test_Case_ID']; 
 $Scenario = $_POST['Scenario']; 
 $Domain = $_POST['Domain']; 
 $Test_Case_Description = $_POST['Test_Case_Description']; 
 $Test_data = $_POST['Test_data']; 
 $Expected_result = $_POST['Expected_result']; 
 $Tester = $_POST['Tester']; 
 $Status = $_POST['Status']; 
 $Comments = $_POST['Comments']; 
 $Req_Ref = $_POST['Req_Ref']; 
 $Test_Case_Flow = $_POST['Test_Case_Flow'];
 $Level = $_POST['Level'];
 // variables for input data

 // sql query for update data into database
 //$sql_query = "UPDATE employee SET EMP_NAME='$EMP_NAME',EMP_SALARY='$EMP_SALARY',EMP_HIRE_DATE='$EMP_HIRE_DATE' WHERE EMP_ID=".$_GET['Test_case_idpk'];

 $sql_query = "UPDATE testcases SET Component = '$Component', Iteration = '$Iteration', Feature_Name = '$Feature_Name', Module = '$Module', TC_Prerequisites = '$TC_Prerequisites', Test_Case_ID = '$Test_Case_ID', Scenario = '$Scenario', Domain = '$Domain', Test_Case_Description = '$Test_Case_Description', Test_data = '$Test_data', Expected_result = '$Expected_result', Tester = '$Tester', Status = '$Status', Comments = '$Comments', Req_Ref = '$Req_Ref', Test_Case_Flow = '$Test_Case_Flow', Level = '$Level' WHERE Test_case_idpk=".$_GET['Test_case_idpk'];
 // sql query for update data into database

 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">

    window.location.href='home_testcase.php';
    alert('Data Are Updated Successfully');
  </script>
  <?php
}
else
{
  ?>
  <script type="text/javascript">
    alert('error occured while updating data');
  </script>
  <?php
}
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: home_testcase.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>View Test Case Details</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/Body.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>
<body class="dt-example">




 <div class="content">

   <div class="row">
    <div class="col-sm-13 col-sm-offset-0">
     <h1>Test Case Details</h1>
     <div class="col-sm-11.5">
     <a class="dashlink" href="home_testcase.php">back to Test Case</a>
     </div>
     <form method="post">
      <div class="col-sm-11.5" id="box">
       <div class="box-top">Test Case ID <span class="asteriskField">
        *
      </span></div>
      <div class="box-panel">
        <label>  <?php echo nl2br($fetched_row['Test_Case_ID']); ?> </label>
      </div>
    </div>
    <div class="col-sm-11.5" id="box">
        <!-- <div class="box-top">Test Case Title / Description </div>
      --> 
      <div class="box-panel">
       <label for="Scenario" class="h4">Test Case Title / Description </label>
       <span class="asteriskField">
        *
      </span>
      <div class="box-panel">
       <label>  <?php echo nl2br($fetched_row['Test_Case_Description']); ?></label>
     </div>
   </div>
 </div>


 <div class="col-sm-8.8" id="box">
   <!--  <div class="box-top">Scenarios & Requirements</div> -->
   <div class="box-panel"> 

     <label for="Scenario" class="h4">Scenario</label>
     <span class="asteriskField">
      *
    </span>
    <div class="box-panel">
     <label>  <?php echo nl2br($fetched_row['Scenario']); ?> </label>
   </div>


   <label for="TC_Prerequisites" class="h4">Prerequisites</label>
   <span class="asteriskField">
    *
  </span>
  <div class="box-panel"> 
   <label>  <?php echo nl2br($fetched_row['TC_Prerequisites']); ?></label>
 </div>

 <label for="Req_Ref" class="h4">Requirement Reference</label>
 <span class="asteriskField">
  *
</span>
<div class="box-panel"> 
 <label>  <?php echo nl2br($fetched_row['Req_Ref']); ?></label>
</div>
</div>
</div>

<div class="col-sm-5.11" id="box">
 <!--  <div class="box-top">Scenarios & Requirements</div> -->
 <div class="box-panel"> 
   <label for="Test_data" class="h4">Test data</label>
   <span class="asteriskField">
    *
  </span>
  <div class="box-panel"> 
   <label>  <?php echo nl2br($fetched_row['Test_data']); ?></label>
 </div>
</div>
</div>

<div class="col-sm-6.11" id="box">
 <!--  <div class="box-top">Scenarios & Requirements</div> -->
 <div class="box-panel"> 

   <label for="Expected_result" class="h4">Expected Result</label>
   <span class="asteriskField">
    *
  </span>
  <div class="box-panel"> 
   <label>  <?php echo nl2br($fetched_row['Expected_result']); ?></label>
 </div>
</div>
</div>


<!-- <div >
 <label for="Status" class="h4">Status</label>
 <span class="asteriskField">
  *
</span>
<input type="text" name="Status" class="form-control" placeholder="Status" value="<?php echo $fetched_row['EMP_NAME']; ?>" required  />
</div> -->
<!-- </div>
-->





<!--  <div class="box-top">Scenarios & Requirements</div> -->

  <div class="col-sm-4" id="box">
   <!--  <div class="box-top">Testing Component</div> -->
   <div class="box-panel">
    <div >
     <label for="Tester" class="h4">Tester</label>
     <span class="asteriskField">
      *
    </span> :  
    <label>  <?php echo nl2br($fetched_row['Tester']); ?></label>
  </div>
  <div >
   <label for="Status" class="h4">Status</label>
   <span class="asteriskField">
    *
  </span> :  
  <label>  <?php echo nl2br($fetched_row['Status']); ?></label>
</div>
<div >
 <label for="Iteration" class="h4">Iteration</label>
 <span class="asteriskField">
  *
</span> :  
<label>  <?php echo nl2br($fetched_row['Iteration']); ?></label>
</div>

</div>
</div>


<div class="col-sm-4" id="box">
 <!--  <div class="box-top">Testing Component</div> -->
 <div class="box-panel">
   <div >
     <label for="Feature_Name" class="h4">Feature Name</label>
     <span class="asteriskField">
      *
    </span> :  
    <label>  <?php echo nl2br($fetched_row['Feature_Name']); ?></label>
  </div>
  <div >
   <label for="Component" class="h4">Component</label>
   <span class="asteriskField">
    *
  </span> :  
  <label>  <?php echo nl2br($fetched_row['Component']); ?></label>
</div>
<div >
 <label for="Module" class="h4">Module</label>
 <span class="asteriskField">
  *
</span> :  
<label>  <?php echo nl2br($fetched_row['Module']); ?></label>
</div>

<!-- </div> -->
</div>
</div>



<div class="col-sm-3" id="box">
  <div class="box-panel"> 
   <div >
     <label for="Domain" class="h4">Domain</label>
     <span class="asteriskField">
      *
    </span> :  
    <label>  <?php echo nl2br($fetched_row['Domain']); ?></label>
  </div>
  <div >
   <label for="Test_Case_Flow" class="h4">Test Case Flow</label>
   <span class="asteriskField">
    *
  </span>
  <label>  <?php echo nl2br($fetched_row['Test_Case_Flow']); ?></label>
</div>
<div >
 <label for="Level" class="h4">Test Case Level</label>
 <span class="asteriskField">
  *
</span> :  
<label>  <?php echo nl2br($fetched_row['Level']); ?></label>
</div>
</div>


</div>

<div class="col-sm-11.5 " id="box" >
  <div class="box-panel"> 
   <div >
    <label for="Comments" class="h4">Comments</label>
    <span class="asteriskField">
      *
    </span>
      <div class="box-panel"> 
    <label>  <?php echo nl2br($fetched_row['Comments']); ?></label>
  </div>
  </div>

</div>
<div>


<br/>




</form>

</div>


</div>

</div>


</body>
<script  type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-datepicker3.css"/>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="EMP_HIRE_DATE"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form .input-group-addon').parent() : "body";
		date_input.datepicker({
			
			format: 'yyyy-mm-dd 00:00:00',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>



</html>