<?php include 'connection.php' ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Basic Banking System</title>
	<style type="text/css">
		body{
			background-image: url("https://blog.newrelic.com/wp-content/uploads/mobile-banking-background-min.jpg");
			background-repeat: no-repeat;
  			background-size: 1600px 800px;
        margin: 0;
        
		}
    
    	h1{
      font-size: 80px;
      text-align: center;
      color: black;
      text-shadow: 1px 1px 2px black, 0 0 25px lightblue, 0 0 5px white;
    }
    	button{
      font-size: 30px;
      padding: 25px 50px;
      justify-content: center;
      background-color: #0f1011;
      color:rgb(34, 2, 2);
      text-decoration: none;


    }
    	h5{
      text-align: center;
      font-size: 35px;
      color:  black;
      text-shadow: 1px 1px #3b5278;


    }
    	div{
      
      margin-left: auto;
      margin-right: auto;

    }
    .container{
    	<padding-left: 1px;

    }
    h3{
    	text-align: center;
    	font-size: 20px;
    	color: #2a0061;
      text-shadow: 1px 1px #3b5278;

    }
    a{
      color: white;
    }
    button:hover{
      background-color: rgb(11, 58, 119);
      -webkit-animation: glow 1s ease-in-out infinite alternate;
      -moz-animation: glow 1s ease-in-out infinite alternate;
      animation: glow 1s ease-in-out infinite alternate;
    }

/* navigation bar styling */
.navbar {
  overflow: hidden;
  background-color: rgb(37, 3, 36);
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
.navbar a:hover{
  background-color: #ddd;
  color: black;
  animation: rotate 1.5s linear infinite;
  border-radius: 50px;
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


  </style>
  <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
	
  
  <div class="navbar">
    <a href="Home.php"><i class="fa fa-home"></i><b> Home Page</b></a>
    <a href="transaction.php" class="right"><i class="fa fa-history"></i><b> Transaction History</b></a>
    <a href="userlist.php" class="right"><i class="fa fa-users"></i><b> Users</b></a>
    
    
  </div>

   <h1>Basic Banking System</h1>
  <h5 class="glow">TASK 1</h5>
  <h3><marquee direction="left"> TRANSFER MONEY WITH EASE </marquee> <h3>
  
  
  <div class="container">
    <button><a href="money.php">Send Money</a></button>
    <!-- <button id="user"><a href="table.php">View user list</button>
      <button><a href="transaction.php">Transaction History</a></button> -->
  </div>
  <br><br><br><br><br><br><br><br>
  
  <?php include 'footer.php';?>
</body>
</html>