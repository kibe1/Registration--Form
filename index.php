<?php include ('server.php');

//if user is not logged in, they cannot acess this page
if (empty($_SESSION['username'])) {
	header('location: login.php');
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>User registraion system using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>Home page</h2>
</div>

   <div class="content">

     <?php if (isset($_SESSION['success'])): ?>	
      <div class="error success">
      	<h3>
      		<?php
      		echo $_SESSION['success'];
      		unset($_SESSION['success']);

      		?>
      	</h3>
      </div>
  <?php endif ?>

  <?php if (isset($_SESSION["username"])):  ?>

  <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
  <p> <a href="index.php?logout='1'" style="color: brown; position: absolute; top: 20px; right: 50px;" id="logout">Logout</p>

  <?php endif ?>
   </div>
 <div class="head">
  <nav style="padding: 15px; position: absolute; top: 15px; left: 70px;">
    <ul> 
  <li><a href="about.php">About Us</a></li>
  <li><a href="contact.php">Contact Us</a></li>
  <li><a href="news.php">News</a></li>
  </ul>
</nav>
 </div>

</body>
</html>
<script type="text/javascript" src="script.js"></script>