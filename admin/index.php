
<?php
include('../connection.php');
session_start();
if(isset($_POST['login'])) 
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM admin_login WHERE username='$username' AND password = '$password' ";
	$run = mysqli_query($conn,$query);
	 
	$row = mysqli_num_rows($run);

	if($row < 1)
	{
		?>
		<script>
		alert ('Username or Password not match !!');
		window.open('index.php','_self');
		</script>
    <?php
	}
	else
	{
		$data = mysqli_fetch_assoc($run);
		$userId = $data['id']; 
				
		$_SESSION['userid'] = $userId;
		header('location:default/admin');
		
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Administrator</title>
  
  	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="shortcut icon" href="images/logo_title.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="l_vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="l_fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="l_fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="l_vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="l_vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="l_vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="l_css/util.css">
	<link rel="stylesheet" type="text/css" href="l_css/main.css">
<!--===============================================================================================-->

</head>
<body>
	<div class="limiter">

			<?php
					    include "../connection.php";
					    $query="select * from background";
					    $res=mysqli_query($conn,$query);
					     $a=1;
					    while($row=mysqli_fetch_assoc($res))
					    {

					?>
						<div class="container-login100" style="background-image: url('../upload/<?php echo $row['image'] ?>'); background-size: 100% 100%; ">
						
					<?php
					}
					?>
			<div class="wrap-login100 p-t-80 p-b-0">
				<form  method="POST" action="">
					 <?php
					    include "../connection.php";
					    $query="select * from admin_login";
					    $res=mysqli_query($conn,$query);
					     $a=1;
					    while($row=mysqli_fetch_assoc($res))
					    {

					?>
					    
						<div class="login100-form-avatar">
						<img src="../upload/<?php echo $row['image'] ?>" alt="">
						</div>  
						<span class="login100-form-title p-t-20 p-b-45">
							<h3><?php echo $row['account_name'] ?></h3>
						</span>
						
					
					<?php
					}
					?>
					
					<div class="wrap-input100 validate-input m-b-15" data-validate = "Username is required" required>
						<input class="input100" type="text" name="username" id="username" onpaste="return false" placeholder="Username" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required" required>
						<input class="input100" type="password" name="password" id="password" onpaste="return false" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
                   
					<div class="container-login100-form-btn p-t-10">
					<button class="login100-form-btn" name="login" type="submit" value="login">
							Login
						</button>
					</div>
					

					<div class="text-center w-full p-t-25 p-b-127">
					</div>

					
				</form>
			
				


<script>

document.getElementById("username").onkeypress = function(e) {
    var chr = String.fromCharCode(e.which);
    if ("></\"=".indexOf(chr) >= 0)
        return false;
};
document.getElementById("password").onkeypress = function(e) {
    var chr = String.fromCharCode(e.which);
    if ("></\"=".indexOf(chr) >= 0)
        return false;
};

</script>
			
<!--===============================================================================================-->	
	<script src="l_vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="l_vendor/bootstrap/js/popper.js"></script>
	<script src="l_vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="l_vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="l_js/main.js"></script>

</body>
</html>