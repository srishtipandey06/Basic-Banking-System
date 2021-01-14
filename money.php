<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>send money</title>
	<style type="text/css">
		form{
			font-size: 40px;
			font-weight:30px;
			text-align: center;
			margin: auto;
			padding-top: 150px;
		}
		label{
			padding: 20px;
			justify-content: left;
			font-weight: 100px;
		}
		.container{
			width: 500px;
			
			padding-left: 500px;
		}
		.container input{
			width:100%;
			clear: both;
			height: 35px;
		}
		/*button{
			font-size: 30px;
      		padding: 10px 10px;
      		background-color: #071a3d; 
      		color: white;
		}*/
		.press{
			padding-top: 20px;
			padding-left: 650px;
		}
		body{
			background-image: url("https://blog.newrelic.com/wp-content/uploads/mobile-banking-background-min.jpg");
			margin: 0;
		}
		.click{
		    width: 20px;
			background-color: #071a3d;
			color: white;
			font-size: 25px;
		}
		.click:hover{
			background-color: black
			-webkit-animation: glow 1s ease-in-out infinite alternate;
  			-moz-animation: glow 1s ease-in-out infinite alternate;
  			animation: glow 1s ease-in-out infinite alternate;

		}
		.glow {
  			font-size: 30px;
  			color: rgb(0, 0, 0);
  			text-align: center;
  			-webkit-animation: glow 1s ease-in-out infinite alternate;
  			-moz-animation: glow 1s ease-in-out infinite alternate;
  			animation: glow 1s ease-in-out infinite alternate;
		}

		@-webkit-keyframes glow {
 		 from {
    		text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #10e6f5, 0 0 40px #3368f8, 0 0 50px #0036e6, 0 0 60px #0c057a, 0 0 70px #ffffff;
  		}
  
  		to {
    		text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px  #fff;
  		}
		}
        /* navigation bar styling */
        .navbar {
            height: 50px;
            background-color: #071a3d;
        }

        /* navigation links  */
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }   

        /* Right-link navigation */
        .navbar a.right {
            float: right;
        }

        /* Change color on hover */
        .navbar a:hover {
            background-color: #ddd;
            color: black;
			animation: rotate 1.5s linear infinite;
  			border-radius: 50px;
  			-webkit-animation: glow 1s ease-in-out infinite alternate;
  			-moz-animation: glow 1s ease-in-out infinite alternate;
  			animation: glow 1s ease-in-out infinite alternate;
        }
	</style>
	<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
   <?php include'connection.php' ?>	
        <div class="navbar">
  <a href="Home.php"><i class="fa fa-home"></i><b> Home Page</b></a>
  <a href="transaction.php" class="right"><i class="fa fa-history"></i> <b> Transaction History</b></a>
  <a href="userlist.php" class="right"><i class="fa fa-users"></i><b> Users</b></a>
        </div>
	<div class="container">
		<form action="transfer.php" method="get">
			<label><b><i>Sender</i></b></label>
			<input list="names" type="text" name="sender", placeholder="Enter name here" required>
			<datalist id="names">
				<option value="Srishti"></option>
				<option value="Rakesh"></option>
				<option value="Pratima"></option>
				<option value="Sanjana"></option>
				<option value="Riya"></option>
				<option value="Ashish"></option>
				<option value="Isha"></option>
				<option value="Mahesh"></option>
				<option value="Vishnu"></option>
				<option value="Jeel"></option>
				
			</datalist>
		</br>
			<label><b><i>Receiver</i></b></label>
			<input list="namess" type="" name="receiver" placeholder="Enter name here" required>
			<datalist id="namess">
				<option value="Srishti"></option>
				<option value="Rakesh"></option>
				<option value="Pratima"></option>
				<option value="Sanjana"></option>
				<option value="Riya"></option>
				<option value="Ashish"></option>
				<option value="Isha"></option>
				<option value="Mahesh"></option>
				<option value="Vishnu"></option>
				<option value="Jeel"></option>
				
			</datalist>
		</br>
			<label><b><i>Amount</i></b></label>
			<input type="" name="amount" placeholder="Enter amount here" required>
			<input class="click" type="submit" name="" value="Send Money">
		</form>
	</div>
<!-- 	</div>
	<script type="text/javascript" src="alert.js"></script>
	<div class="press">
		<button >Send Amount</button>
	</div> -->
	<br><br><br><br><br><br><br><br><br>
	<?php include 'footer.php';?>	

</body>
</html>