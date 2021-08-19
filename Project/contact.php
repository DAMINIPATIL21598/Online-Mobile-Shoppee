
<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Golani  Market  Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"></a>
			</div>
		<div class="collapse navbar-collapse" id="collapse" style="padding:15px 15px 15px 15px; background-color:yellow;">
			<ul class="nav navbar-nav">
				<li style="font-size:20px;"><a href="index.php"><span style="color:purple;">Dashboard</span></a></li>
				<li style="font-size:20px;"><a href="index.php"><span style="color:purple;">Products</span></a></li>
				<li style="font-size:20px;"><a href="contact.php"><span style="color:purple;">Contact  Us</span></a></li>
				<li style="font-size:30px; margin-left:140px;"><span style="Background-color:white; color:purple;">Mobile  Shop ,Jalgaon</span></li>

			 </ul>
			<!--<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form>-->
			 
			<ul class="nav navbar-nav navbar-right">
				<li style="font-size:25px;"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span><span style="color:purple;font-size:25px;">View Cart</span><span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:700px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sr.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span></span><span style="color:purple;font-size:25px;">SignIn</span></a>
					<ul class="dropdown-menu">
						<div style="width:1200px; height:600px;">
							<div class="panel">
								<div class="panel-heading"><h2><center>Login</center></h2></div>
								<div class="panel-heading">
								<div  class="container" style="padding:100px 100px 100px 100px;">
									<form onsubmit="return false" id="login">
										<label for="email"><h4>Email Address</h4></label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
									</form>
									</div>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br><br><br>
<>	
<div class="container">
<h3>
welcome to Golani Mobile  Shop</h3>
</div>