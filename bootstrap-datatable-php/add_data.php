<?php
include 'menu.html';?>
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $EMP_NAME = $_POST['EMP_NAME'];
 $EMP_SALARY = $_POST['EMP_SALARY'];
 $EMP_HIRE_DATE = $_POST['EMP_HIRE_DATE'];
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO employee(EMP_NAME,EMP_SALARY,EMP_HIRE_DATE) VALUES('$EMP_NAME','$EMP_SALARY','$EMP_HIRE_DATE')";
 // sql query for inserting data into database

 // sql query execution function
 if(mysql_query($sql_query))
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
<div class="col-sm-10 col-sm-offset-0">
 <h3>Add & Update Customer</h3>

    <form method="post">
	<div class="row">
	<div class="col-sm-10 col-sm-offset-0">
	<div class="form-group col-sm-6">
   <label for="name" class="h4">EMP_NAME</label>
   <span class="asteriskField">
        *
       </span>
   <input type="text" name="EMP_NAME" class="form-control" placeholder="EMP_NAME" required />
   </div>
    <div class="form-group col-sm-6">
                <label for="email" class="h4">EMP_SALARY</label>
				<span class="asteriskField">
        *
       </span>
               <input type="text" class="form-control" name="EMP_SALARY" placeholder="EMP_SALARY" required />
            </div>
       
        <div class="form-group col-sm-6">
            <label for="message" class="h4 ">EMP_HIRE_DATE</label>
            <span class="asteriskField">
        *
       </span>
			
        
	
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
       
  </i>
        </div>
        <input class="form-control" id="date" name="EMP_HIRE_DATE" placeholder="MM/DD/YYYY" type="text" required />
       
      </div>
    
     </div>
		
     
      </div>
	  <br/>
	   <div class="form-group col-sm-5  text-right">
   <button type="submit" name="btn-save" class="btn btn-primary btn-md "> <strong>Save</strong></button>
  
    
  
    </div>
    </div>
   
	
	
	</form>
	
    </div>
	
<a href="home.php" >back to Customer page</a>

</div>
	 
 </div>


</body>
<script  type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/form-scripts.js"></script>
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