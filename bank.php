<?php
session_start();
$con=mysqli_connect('localhost','root','','banking');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User_page</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: Bisque;
		background-image:url("images/111.jpeg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#66CDAA;
		padding:50px;
		border:2px ridge black;
	}
	.ho{
		padding-top:70px;
	}
	.butto1{
		background-color:#red;
	}
	.button{
		border-radius:10px;
		border: 1px solid blUE;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #D2601E;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#FF00FF;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Vishnu"){
				 var arr=["Bharathi","Dinesh","Hariprasath","Karthik","Mohan","Naresh","Naveen","sasi","Nirmal"];
				 }
				 else if(a==="Bharathi"){
					var arr=["Vishnu","Dinesh","Hariprasath","Karthik","Mohan","Naresh","Naveen","sasi","Nirmal"];
				}
				else if(a==="Dinesh"){
					var arr=["Bharathi","Vishnu","Hariprasath","Karthik","Mohan","Naresh","Naveen","sasi","Nirmal"];
				}
				else if(a==="Hariprasath"){
					var arr=["Bharathi","Dinesh","Vishnu","Karthik","Mohan","Naresh","Naveen","sasi","Nirmal"];
				 }
				 else if(a==="Karthik"){
					var arr=["Bharathi","Dinesh","Hariprasath","Vishnu","Mohan","Naresh","Naveen","sasi","Nirmal"];
				 }
				 else if(a==="Mohan"){
					var arr=["Bharathi","Dinesh","Hariprasath","Karthik","Vishnu","Naresh","Naveen","sasi","Nirmal"];
				 }
				 else if(a==="Naresh"){
					var arr=["Bharathi","Dinesh","Hariprasath","Karthik","Mohan","Vishnu","Naveen","sasi","Nirmal"];
				 }
				 else if(a==="Naveen"){
					var arr=["Bharathi","Dinesh","Hariprasath","Karthik","Mohan","Naresh","Vishnu","sasi","Nirmal"];
				 }
				 else if(a==="Sasi"){
					var arr=["Bharathi","Dinesh","Hariprasath","Karthik","Mohan","Naresh","Naveen","Vishnu","Nirmal"];
				 }
				 else if(a==="Nirmal"){
				 var arr=["Bharathi","Dinesh","Hariprasath","Karthik","Mohan","Naresh","Naveen","sasi","Vishnu"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#e0115f;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Bharathi">Bharathi</option>
			<option value="Dinesh">Dinesh</option>
			<option value="Hariprasath">Hariprasath</option>
			<option value="Karthik">Karthik</option>
			<option value="Mohan">Mohan</option>
			<option value="Naresh">Naresh</option>
			<option value="Nirmal">Nirmal</option>
			<option value="Naveen">Naveen</option>
			<option value="Sasi">Sasi</option>
			<option value="Vishnu">Vishnu</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount to be transfer: </label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='navy'"onMouseOut="this.style.color='#000080'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>