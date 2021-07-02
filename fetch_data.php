<!DOCTYPE html>
<html lang="en">
<!--HTML code to display data in tabular format-->
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

	<!-- Bootstrap core JavaScript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Page level plugin JavaScript-->
	<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
	
	
	<title>Crime Details</title>
	
	<style>
		body
		{
			background:url("https://cdn.pixabay.com/photo/2015/10/15/21/44/texture-990115_960_720.jpg");
			background-size: cover;
			background-position: cover;
			
			font-family: 'poppins', sans-serif;
		}
		
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid white;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		p {
			text-align: center;
			color: #4be3e0;
			font-size: 20px;
			font-weight: lighter;
		}

		td {
			background-color: #d5d4f5;
			border: 1px solid white;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid white;
			padding: 10px 125px 10px 125px;
			text-align: center;
		}
		th{
			color: white;
		}

		td {
			font-weight: lighter;
		}
		
		.navbar
		{
			margin: auto;
			display: flex;
			align-items: center;
			padding: 35px 10%;
			justify-content: space-between;
    
		}
		nav ul
		{
			display: inline-block;
			list-style: none;
		}
		nav ul li
		{
			display: inline-block;
			padding: 0px 20px;
		}
		nav ul li a
		{
			text-decoration: none;
			font-size: 20px;
			color:white;
			justify-content: space-between;
		}
		a{
			text-decoration: none;
			color: white;
			font-size: 28px;
		}
		nav li a:hover
		{
			color: green;
		}
	</style>
</head>

<body>
	<div class="navbar">
		<div class="logo">
		 
		 </div>
		 <nav>
		 <ul id="menu">
		   <li><a href="index.html">Home</a></li>
		   <li><a href="laws_tr.html">Laws</a></li>
		   <li><a href="map_h.html">Hospitals</a></li>
		   <li><a href="map_p.html">Police</a></li>
		   <li><a href="contribute.html">Contribute</a></li>
		   <li><a href="contact_us.html">Contact us</a></li>
		 </ul> 
	   </nav>
	 </div>
	 
		<p>Incase, there are no results, it likely means we don't have data for the place yet.</p>
		
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<tr>
				<th>City</th>
				<th>Area</th>
				<th>Crime</th>
				<th>Entries</th>
			</tr>

			<!-- to fetch data from rows-->
			<?php
			//connect to database
			$con = mysqli_connect('localhost', 'root', '','db_absidy');
			
			//taking state and city inputs from index.html
			$State = $_POST['State'];
			$City = $_POST['City'];
			
			// mysql_query will execute the query to fetch data
			
			$sql = "SELECT fld_city,fld_area,fld_crime,count(*) FROM `tbl_data` WHERE fld_state='$State' AND fld_city='$City' group by fld_city,fld_crime,fld_area order by count(*) desc ";
	
			//loop will iterate until all data is fetched
			$rs = mysqli_query($con, $sql);	
               while($rows=mysqli_fetch_assoc($rs)):?>
          
            <tr>
				<td><?php echo $rows["fld_city"];?></td> 
                <td><?php echo $rows["fld_area"];?></td>
                <td><?php echo $rows["fld_crime"];?></td>
				<td><?php echo $rows["count(*)"];?></td>
            </tr>
			<?php endwhile;?> 
            
		</table>
		<script>
    $(document).ready(function() {
          $('#dataTable').DataTable();
    });
</script>
</body>

</html>
