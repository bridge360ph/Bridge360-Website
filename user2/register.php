<?php include('codes.php') ?>
<!Doctype html>
<html>
<head>
<title>User Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="header">
    <h2>Registration</h2>
</div>
<form method="post" action="register.php">
    <?php include('errors.php'); ?>
<div class="input-group">
<label for="">Name</label>
<input type="text" name="name">
</div>
<div class="input-group">
<label for="">Username</label>
<input type="text" name="username">
</div>
<div class="input-group">
<label for="">Password</label>
<input type="password" name="password">
</div>
<div class="input-group">
<label for="">Confirm Password</label>
<input type="password" name="confirm">
</div>
<div class="input-group">
<label for="">Email</label>
<input type="email" name="email">
</div>
<div class="input-group">
<button type="submit" name="register" class="btn">Register</button>
</div>


</form>

</body>
</html>