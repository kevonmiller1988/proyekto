<html>
<head><title></title></head>
<body background = "sa.gif">
<br>
<br>
<br>
<br>
<h1 align=center><font color='black' size=10><b>ADDING</font></h1>
<div id="wrap">
		<div id="menu">
			<h3 align="center"><a href="1.php">ADD</a>&nbsp&nbsp&nbsp&nbsp&nbsp 
			<a href="5.php">SEARCH</a>&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="7.php">UPDATE</a></h3>
</div>
<br>
<br>	
<?php

			$server = 'localhost';
			$user = 'root';
			$pass = '';
			$database = 'projectdb';
			
			$Id_num = $_POST['Id_num'];
			$Lastname = $_POST['Lastname'];
			$Firstname = $_POST['Firstname'];
			$Middlename = $_POST['Middlename'];
			$Address = $_POST['Address'];
			$Bdate = $_POST['Bdate'];
			$Bplace = $_POST['Bplace'];
			$Age = $_POST['Age'];
			$Gender = $_POST['Gender'];
			$Mobileno = $_POST['Mobileno'];
			$Contactno = $_POST['Contactno'];
			$Email = $_POST['Email'];
			$Civilstatus = $_POST['Civilstatus'];
			$Svc_datefrom = $_POST['Svc_datefrom'];
			$Svc_dateto = $_POST['Svc_dateto'];
			$Designation = $_POST['Designation'];
			$Status = $_POST['Status'];
			$Salary_annum = $_POST['Salary_annum'];
			$office_station = $_POST['office_station'];
			$division = $_POST['division'];
			$leave_nopay = $_POST['leave_nopay'];
			$separation = $_POST['separation'];
		
		//Add
			$db_handle = mysql_connect($server, $user, $pass);
			$db_found = mysql_select_db($database, $db_handle);

			if ($db_found){
				$SQL = "INSERT INTO registerprofile(Id_num, Lastname, Firstname, Middlename, Address, Bdate, Bplace,Age, Gender, Mobileno, Contactno, Email, Civilstatus)
				values ('$Id_num', '$Lastname', '$Firstname', '$Middlename', '$Address', '$Bdate', '$Bplace', '$Age', '$Gender', '$Mobileno', '$Contactno', '$Email', '$Civilstatus')";
				$result = mysql_query($SQL);
				
				$Y = "INSERT INTO servicerecord(Id_num, Svc_datefrom,Svc_dateto,Designation, Status, Salary_annum, office_station,division,leave_nopay,separation)
				values('$Id_num', '$Svc_datefrom','$Svc_dateto', '$Designation', '$Status', '$Salary_annum', '$office_station', '$division', '$leave_nopay','$separation')";
				$result = mysql_query($Y);

				mysql_close($db_handle);
					print "<center>	<br><br><br><font face= 'Candara' size= '5' color= 'lime'> Record has been added</marquee></center>";
				
			}

			else{
				print "<font face= 'Candara' size= '5' color= 'lime'>Database Not Found";
				mysql_close($db_handle);
			}
		?>
		

	</body>
</html>