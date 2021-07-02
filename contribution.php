<?php
// database connection code
//if(isset($_POST['txtState']))
//{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_absidy');

// get the post records

$txtState = $_POST['txtState'];
$txtCity = $_POST['txtCity'];
$txtArea = $_POST['txtArea'];
$txtCrime = $_POST['txtCrime'];

// database insert SQL code
$sql = "INSERT INTO `tbl_data` (`id`, `fld_state`, `fld_city`, `fld_area`, `fld_crime`) VALUES ('0', '$txtState', '$txtCity', '$txtArea', '$txtCrime')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	//echo "Record Inserted.Thankyou for your contribution.\n Please close the tab.";
	echo  nl2br ("Record Inserted.Thankyou for your contribution. \n \n Please close the tab.");
}
//}
else
{
	echo "There seems to be a problem";
	
}

mysqli_close($con);
?>