<?php ?>
<html>

<body>

<div class="data-action">
	<table class="action-button-table">
		<td class="action-button">
			<td class="action-button-pic"><img src="images/t04.png" /></td>
			<td class="action-button-text"><a href="listTable/more_listMore1.php">More Info</a></td>
		</td>
	</table>
</div>


<table class="data-table">
    <thead>
    <tr>
	<!--<th><input name="" type="checkbox" value="" checked="checked"/></th>-->
    <th>Student ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
	<th>Telephone</th>
	<th>Gender</th>
	<th>Status</th>
	<th>Semester</th>
	<th>Year</th>
	<th>Internship Status</th>
    </tr>
    </thead>
	<tbody>
	<tr>
<?php  
session_start(); 
?>
<?php
$con=mysqli_connect("localhost","root","123456");   
if(!$con) echo "Connection failed!";  
mysqli_select_db($con,"imis");   
$sql = "SELECT student_ID, stu_FName, stu_LName, email, telephone, gender, status, semenster, year, intern_status FROM student where student_ID=1001";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
	//output data of each row
$a = "checkbox";
$b="";	
	while($row = mysqli_fetch_assoc($result)) {		
	    
		echo "<tr>";
		//echo "<td> <input type=$a> </td>";
	    foreach($row as $x => $x_value) {			
           echo "<td>". $x_value . "</td>";
       }
	    echo "</tr>";
	}	
} else {
	echo "no result";
}
mysqli_close($con);
?> 
    </tr>
    </tbody>
<table>
    	
</body>
</html>