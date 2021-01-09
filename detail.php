<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking');

$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);


?>
<html>
<head>
   <title>View_Customer</title>
   <link rel="stylesheet" href="style.css">
   
	<style>
		body{
			text-align:center;
		}
		.flat-table-1 {
			background: #00008b;
		}
		.flat-table-1 tr:hover {
			background: rgba(0,0,0,0.19);
		}
		h1{
			font-family: Arial, Times, serif;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			}
		th{
			color:violet;
			font-size:24px;
			padding:16px;
		}
		
		td{
			text-align:center;
			font-size:22px;
			color: #92c6df;
			padding: 0px 20px 0px 20px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
			text-shadow: 1px 1px black;
		}
		.css-button{
			margin-left:auto;
			margin-right:auto;
		}
		.button1{
			background-color:lime;
			text-align:center;
			padding-top:2px;
		}
		
		.button1:hover{
			background-color:blues;
		}
		.view{
			top:50%;
			padding-top:20px;
			text-align:center;
		}
		.ho{
			padding-top:50px;
			padding-bottom:100px;
		}
		body{
		background-image:url("images/111.jpeg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
	
</head>
	
<body>
	<h1 style="color:#ffff00;text-shadow: 2px 2px black;">Customer Details</h1>
    <table class="flat-table-1">
		<thead>
			<th>S.No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Balance</th>
			<th></th>
		</thead>
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1.</td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email_id"]; ?></td>
			<td><?php echo  $row["Amount"]; ?></td>
			<td>
				<form action="customer.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="Bharathi">View</button>
				</form>
			</td>
		</tr>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 2.</td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email_id"]; ?></td>
			<td><?php echo  $row["Amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Dinesh">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 3.</td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email_id"]; ?></td>
			<td><?php echo  $row["Amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Hariprasath">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 4.</td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email_id"]; ?></td>
			<td><?php echo  $row["Amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Karthik">View</button>
				</form>
			</td>
   

        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 5.</td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email_id"]; ?></td>
			<td><?php echo  $row["Amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Mohan">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 6.</td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email_id"]; ?></td>
			<td><?php echo  $row["Amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Naresh">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
     
				$row=mysqli_fetch_array($result);
			?>
			<td> 7.</td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email_id"]; ?></td>
			<td><?php echo  $row["Amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Naveen">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td> 8.</td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email_id"]; ?></td>
			<td><?php echo  $row["Amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Nirmal">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 9.</td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email_id"]; ?></td>
			<td><?php echo  $row["Amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Sasi">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 10.</td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email_id"]; ?></td>
			<td><?php echo  $row["Amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Vishnu">View</button>
				</form>
			</td>
		</tr>
		</tbody>
	</table><br><br>

<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>
