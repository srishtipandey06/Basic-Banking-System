<?php include 'connection.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-image: url("https://image.freepik.com/free-photo/coins-one-another-pile-table-light-background_61608-52.jpg");
			background-repeat: no-repeat;
            background-size: 1600px 800px;
            margin: 0;
			
		}
		h2{
			text-align: center;
			font-size: 80px;
		}
		
		button{
      font-size: 30px;
      padding: 25px 50px;
      justify-content: center;
      background-color: #071a3d;
      color:white;


    }
    .container{
    	padding-left: 625px;

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
	
  <div class="navbar">
    <a href="Home.php"><b>Home Page</b></a>
    <a href="transaction.php" class="right"><b>Transaction History</b></a>
    <a href="userlist.php" class="right"><b>Users</b></a>
  </div>
	
	
	<?php 
	$sender = $_GET["sender"];
	$receiver = $_GET["receiver"];
	$amount = $_GET["amount"];
	
	?>

	<?php $sql5="SELECT Name, Balance FROM userlist WHERE Name='$sender'";
	$result5=mysqli_query($conn, $sql5); 
	$row=mysqli_fetch_array($result5) ;
	$money= $row['Balance'];
	?>
	<?php $sql3 = "SELECT Name,Id  FROM userlist WHERE Name='$receiver' ";
	$result3 = mysqli_query($conn, $sql3); 
	
	if (mysqli_fetch_array($result3)<1){ 
	 	include 'user.php';
	 } 
	elseif ($money<$amount) {
	 	include 'user3.php';
	 	
	 }

	else{
	 	$sql4 = "UPDATE userlist SET Balance=Balance-$amount WHERE Name='$sender'";
		$sql2= "UPDATE userlist SET Balance=Balance+$amount WHERE Name='$receiver' ";
 		$result2 = mysqli_query($conn, $sql2); 
 		$result3 = mysqli_query($conn, $sql4);
 		$sql = "INSERT INTO transaction VALUES ('$sender',                '$receiver',  $amount)";
		$result = mysqli_query($conn, $sql); 
		$sql9 = "INSERT INTO transaction(`Sender`, `Receiver`, `Amount`) VALUES ('$sender','$receiver','$amount')";
$query = mysqli_query($conn, $sql9);
 		include 'user1.php';
 	}
?>


<head>
<script>
alert("Thank you for banking with us!");

</script>
</head>
</body>
</html>
