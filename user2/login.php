<?php include('user2/codes.php'); ?>
<!Doctype html>
<html>
<head>
<title>User Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="header">
    <h2>Login</h2>
</div>
<form method="post" action="login.php">
<?php include('errors.php'); ?>
<div class="input-group">
<label for="">Username</label>
<input type="text" name="usernamelog">
</div>
<div class="input-group">
<label for="">Password</label>
<input type="password" name="passwordlog">
</div>

<div class="input-group">
<button type="submit" name="login" class="btn">Login</button>
</div>
<p>
    Not yet a member? <a href="register.php">Sign Up</a>
</p>


</form>

</body>
</html>