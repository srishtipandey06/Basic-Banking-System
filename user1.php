<!DOCTYPE html>
<html>
<head>
	<title>Successful</title>
<style type="text/css">  
h2{
      font-size: 90px;
      text-align: center;
      color: black;
      text-shadow: 10px 1px 10px white;
    }

.glow {
  font-size: 60px;
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
        .container{
			width: 400px;
			
			padding-left: 600px;
		}
		.container input{
			width:100%;
			clear: both;
			height: 60px;
		}

</style>  
	
</head>
<body>


  
	<?php include 'connection.php' ?>
	
	<?php 
	$sender = $_GET["sender"];
	$receiver = $_GET["receiver"];
	$amount = $_GET["amount"];
	?>
	<h2><i>Congratulations!! Transfer to <?php echo $receiver ?> successful</i></h2>
	
	<div class="container">
	<form action="transaction.php" method="get">
	<input class="click" type="submit" name="" value="Check Transaction History">
	</div>	
</body>
</html>