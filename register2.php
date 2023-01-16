
<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>STUDENT</h2>
  </div>
	
  <form method="post" action="register2.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>name</label>
  	  <input type="text" name="name" value="<?php echo $name; ?>">
  	</div>
	  <div class="input-group">
  	  <label>usn</label>
  	  <input type="text" name="usn" value="<?php echo $usn; ?>">
  	</div>
	  <div class="input-group">
  	  <label>branch</label>
  	  <input type="text" name="branch" value="<?php echo $branch; ?>">
  	</div>
	  <div class="input-group">
  	  <label>sem</label>
  	  <input type="text" name="sem" value="<?php echo $sem; ?>">
  	</div>
	  <div class="input-group">
  	  <label>sceheme</label>
  	  <input type="text" name="scheme" value="<?php echo $scheme; ?>">
  	</div>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>