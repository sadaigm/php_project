<?php
include 'menu_testcase.html';?>
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $Test_case_idpk = 0;  
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

 // sql query for inserting data into database
 $sql_query = "INSERT INTO testcases (Component,Iteration,Feature_Name,Module,TC_Prerequisites,Test_Case_ID,Scenario,Domain,Test_Case_Description,Test_data,Expected_result,Tester,Status,Comments,Req_Ref,Test_Case_Flow,Level)  VALUES ('$Component','$Iteration','$Feature_Name','$Module','$TC_Prerequisites','$Test_Case_ID','$Scenario','$Domain','$Test_Case_Description','$Test_data','$Expected_result','$Tester','$Status','$Comments','$Req_Ref','$Test_Case_Flow','$Level')";
echo mysql_error();
 // sql query for inserting data into database

 // sql query execution function

$value = mysql_query($sql_query) or die("A MySQL error has occurred.<br />Your Query: " . $sql_query . "<br /> Error: (" . mysql_errno() . ") " . mysql_error());
 if($value)
 {
  ?>
  <script type="text/javascript">
    window.location.href='index.php';
    alert('Data Are Inserted Successfully ');
  </script>
  <?php
}
else
{
  ?>
  <script type="text/javascript">


    alert('error occured while inserting your data');
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
  <title>CRUD Operations With PHP and MySql</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/Body.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>
<body class="dt-example">




 <div class="content">

   <div class="row">
    <div class="col-sm-13 col-sm-offset-0">
     <h1>Add Test Case</h1>
      <div class="col-sm-11.5">
     <a class="dashlink" href="home_testcase.php">back to Test Case</a>
     </div>
     <form method="post">
      <div class="col-sm-11.5" id="box">
       <div class="box-top">Test Case ID <span class="asteriskField">
          *
        </span></div>
       <div class="box-panel">
       <input type="text"  name="Test_Case_ID" class="form-control" placeholder="Test Case ID" required />
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
          <textarea rows="3"  name="Test_Case_Description" class="form-control" placeholder="Test Description" required ></textarea>
        </div>
      </div>



      <div class="col-sm-8.8" id="box">
       <!--  <div class="box-top">Scenarios & Requirements</div> -->
       <div class="box-panel"> 
         <div >
           <label for="Scenario" class="h4">Scenario</label> 
           <span class="asteriskField">
        *
      </span>
      
          <textarea rows="3" name="Scenario" class="form-control" placeholder="Scenario" required></textarea>
        </div>
        <div >
         <label for="TC_Prerequisites" class="h4">Prerequisites</label>
        <input type="text" name="TC_Prerequisites" class="form-control" placeholder="Prerequisites"  />
      </div>

      <div >
       <label for="Test_data" class="h4">Test data</label>
       <span class="asteriskField">
        *
      </span>
      <textarea rows="5" name="Test_data" class="form-control" placeholder="Test data" required ></textarea>
    </div>


    <div >
     <label for="Expected_result" class="h4">Expected Result</label>
     <span class="asteriskField">
      *
    </span>
    <textarea rows="5" name="Expected_result" class="form-control" placeholder="Expected Result" required ></textarea>
  </div>

  <div >
   <label for="Req_Ref" class="h4">Requirement Reference</label>
   <span class="asteriskField">
    *
  </span>
  <input type="text" name="Req_Ref" class="form-control" placeholder="FRD 1.2 & TD 4.8 " required />
</div>
<!-- <div >
 <label for="Status" class="h4">Status</label>
 <span class="asteriskField">
  *
</span>
<input type="text" name="Status" class="form-control" placeholder="Status" required />
</div> -->
<!-- </div>
--></div>
</div>


<div class="col-sm-4" id="box">
 <!--  <div class="box-top">Testing Component</div> -->
 <div class="box-panel">
  <div >
   <label for="Tester" class="h4">Tester</label>
   <span class="asteriskField">
    *
  </span>
  <input type="text" name="Tester" class="form-control" placeholder="Tester" required />
</div>
<div >
 <label for="Status" class="h4">Status</label>
 <span class="asteriskField">
  *
</span>
<input type="text" name="Status" class="form-control" placeholder="Status" required />
</div>
<div >
 <label for="Iteration" class="h4">Iteration</label>
<input type="text" name="Iteration" class="form-control" placeholder="Iteration" />
</div>

</div>
</div>


<div class="col-sm-4" id="box">
 <!--  <div class="box-top">Testing Component</div> -->
 <div class="box-panel">
   <div >
     <label for="Feature_Name" class="h4">Project Name</label>
    <input type="text" name="Feature_Name" class="form-control" placeholder="Project Name" />
  </div>
  <div >
   <label for="Component" class="h4">Component</label>
   <input type="text" name="Component" class="form-control" placeholder="Component" />
</div>
<div >
 <label for="Module" class="h4">Module</label>
<input type="text" name="Module" class="form-control" placeholder="Module" />
</div>

<!-- </div> -->
</div>
</div>



<div class="col-sm-3" id="box">
  <div class="box-panel"> 
 <div >
 <label for="Domain" class="h4">Domain</label>
<input type="text" name="Domain" class="form-control" placeholder="Domain" />
</div>
<div >
 <label for="Test_Case_Flow" class="h4">Test Case Flow</label>
 <span class="asteriskField">
  *
</span>
<input type="text" name="Test_Case_Flow" class="form-control" placeholder="+ve or -ve " required />
</div>
<div >
 <label for="Level" class="h4">Test Case Level</label>
 <span class="asteriskField">
  *
</span>
<input type="text" name="Level" class="form-control" placeholder="Level 0,1" required />
</div>
</div>
</div>




<div class="col-sm-3.3" id="box">
  <div class="box-panel"> 
   <div >
  <label for="Comments" class="h4">Comments</label>
   <textarea rows="4" name="Comments" class="form-control" placeholder="Comments" ></textarea>
</div>

</div>
</div>


<br/>
<div class="form-group  text-left" style="padding-left: 20px;">
 <button type="submit" name="btn-save" class="btn btn-primary btn-xs "> <strong>Save</strong></button>
<button type="submit" name="btn-cancel" formnovalidate class="btn btn-primary btn-xs"> <strong>Cancel</strong></button>


</div>




</form>

</div>

<!-- <a href="home.php" >back to Customer page</a> -->

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


<script>
function add() {
//We first get the current value of the textarea
/*document.getElementById('Test_case_idpk').value ='Sample'; */
document.getElementById('Component').value ='Sample'; 
document.getElementById('Iteration').value ='Sample'; 
document.getElementById('Feature_Name').value ='Sample';  
document.getElementById('Module').value ='Sample';  
document.getElementById('TC_Prerequisites').value ='Sample';  
document.getElementById('Test_Case_ID').value ='Sample';  
document.getElementById('Scenario').value ='Sample';  
document.getElementById('Domain').value ='Sample';  
document.getElementById('Test_Case_Description').value ='Sample'; 
ocument.getElementById('Test_data').value ='Sample'; 
document.getElementById('Expected_result').value ='Sample'; 
document.getElementById('Tester').value ='Sample';  
document.getElementById('Status').value ='Sample';  
document.getElementById('Comments').value ='Sample';  
document.getElementById('Req_Ref').value ='Sample'; 
document.getElementById('Test_Case_Flow').value ='Sample';  
document.getElementById('Level').value ='Sample';
}
</script>
</html>