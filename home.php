<?php
session_start(); # session starts
if (!isset($_SESSION['LOGIN_STATUS'])) { #checks the login status
    header('location:index.php');
}
?>

<!-- Latest compiled and minified CSS................................................ -->

 <head>
      <link rel="stylesheet" href="css/Main.css">  
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<!-<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>

<div style="text-align:center;margin-top:50px;font-family:arial;font-size:20px; color:#faebcc ">
	Welcome to our Home page <?php echo $_SESSION['UNAME']; ?> !!!<br>
        <br> <a href="index.php" title=""><button  class="btn btn-primary btn-md">Logout</button></a> 
</div>
</body>