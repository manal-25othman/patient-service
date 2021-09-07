<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>
     <a href="../myprojectimaun/controlpanel/examples/tables.php">
           go to control panel
</a>
<h1>
        
     
     <h1>welcome , <?php echo $_SESSION['name']; ?>
     
     
     </h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>