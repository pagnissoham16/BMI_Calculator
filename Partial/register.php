
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI-register</title>
    <link rel="stylesheet" href="../Assets/style/login.css">
</head>
<body>
    <!-- Register code -->
    <div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="post" action="../Actions/register.php">
                <h1>Sign Up</h1>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input"
                           placeholder="Username" name="username"
                        required
                    >
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="email" class="login__input" required
                           placeholder="Email" name="email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input"
                           placeholder="Password" name="password" required >
				</div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="text" class="login__input"
                           placeholder="Age" name="age" required >
                </div>
				<button class="button login__submit">   
					<span class="button__text">Sign Up</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<!-- <div class="social-login">
				<h3>log in via</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div> -->
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
    <!-- Register code ended -->
</body>
</html>