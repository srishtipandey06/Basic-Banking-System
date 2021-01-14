<?php include 'connection.php' ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User List</title>
    <style type="text/css">
        table, th,tr,td{
            border: 1px solid black;
        }
        .center{
            margin-left: auto;
            margin-right: auto;
        }
        table{
            width: 900px;
            height: 500px;
            color: black;
            font-size: 30px;
            border-color: white;
        }
        h1{
            text-align: center;
            color: black;
            font-size: 50px;
            text-shadow: 1px 1px 2px white, 0 0 25px lightblue, 0 0 5px white;

        }
        body{
            background-image: url("https://image.freepik.com/free-photo/coins-one-another-pile-table-light-background_61608-52.jpg");
            background-repeat: no-repeat;
            background-size: 1600px 800px;
            margin: 0;
        }
        th, td{
            text-align: center;
            border: 1px solid white ;
        }
        th{
            background-color: #071a3d ;
            color: white;

        }
        tr{
            background-color: #071a3d;
            color:white;
            text-shadow: 1px 1px 2px white;

        }
        tr:hover {
            background-color: #ddd;
            color: black;
            animation: rotate 1.5s linear infinite;
            border-radius: 50px;
            -webkit-animation: glow 1s ease-in-out infinite alternate;
            -moz-animation: glow 1s ease-in-out infinite alternate;
            animation: glow 1s ease-in-out infinite alternate;
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

    <h1>User List</h1>
    <table class="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Balance</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php $sql = "SELECT Id, Name, Email, Balance FROM userlist";
        $result = mysqli_query($conn, $sql);?>
        <?php while( $row = mysqli_fetch_array($result)) : ?>
        
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['Id']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Balance']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>

</body>
</html>
