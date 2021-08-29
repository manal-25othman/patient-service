<!DOCTYPE html>
<html lang="ar"dir="rtl">
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css"  >
</head>
<body>
     <form action="login.php" method="post">
   
              
	 <div class="logo float-left">
              
              <a href="/index.php" class="scrollto"><img src="assets/img/logo-light.gif" alt="" class="img-fluid">
                  </a>
          </div>


         
     	<h2>تسجيل دخول للموظفين فقط </h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
	 </form>
		 </br>
		 </br>
	 <section id="mini-footer">
         <div class="container">
             CopyRight @ programmer -Manal AL-Areeqi
         </div>
</body>
</html>