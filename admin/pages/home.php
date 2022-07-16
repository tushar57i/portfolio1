<!DOCTYPE html>
<html lang="en">
<head>
	<title>Log In</title>
	<?php include_once 'css.php'; ?>
	<style type="text/css">
		body{
			background: linear-gradient(217deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%),
            linear-gradient(127deg, rgba(0,255,0,.8), rgba(0,255,0,0) 70.71%),
            linear-gradient(336deg, rgba(0,0,255,.8), rgba(0,0,255,0) 70.71%);
		}
		.row{
    		height: 100vh!important;
    		display: flex;
	 		align-items: center;
	 		justify-content: center;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark nav-dark">
    <a class="navbar-brand" href="javascript: history.go(-1)">Back</a>
    <ul class="navbar-nav ml-auto">
		<li><a class="nav-link" href="javascript: history.go(+1)">Prev</a></li>
	</ul>
</nav>


	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h1 class="text-center">Sign In</h1>
			<form method="post" action="login.php" class="text-center">
				Username:
				<input type="name" name="username" class="form-control" placeholder="Type your username">
				Password:
				<input type="password" name="password" class="form-control" placeholder="Type your password">
				<br>
				<input type="submit" name="log_submit" value="Sign In" class="btn btn-primary">
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>