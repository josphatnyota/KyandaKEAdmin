
<!doctype html>
<html lang="en">
  <head>
  	<title>Kyanda Admin | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="style/images/icon.png">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="style/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<a href="#"><img style: width="250px;" src="style/images/logomain.png" ></a>
                <a href="#"><h2>Welcome </h2></a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Jambo!</h3>
							  <h5> Welcome to the Admin Portal.</h5>
							  <br>
							  <h2>Login to your Account!</h2>
			      		</div>
								
			      	</div>
							<form action="login-action.php" method="post" id="frmLogin" class="signin-form">
                            
							<?php 
                if(isset($_SESSION["errorMessage"])) {
                ?>
                <div style="color:red;  padding: 7px 10px;background: #fff1f2;  border: #ffd5da 1px solid;
				 color: #d6001c;  border-radius: 4px;margin: 30px 10px 10px 10px;" class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php 
                unset($_SESSION["errorMessage"]);
                } 
                ?>
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Email</label>
			      			<input type="Email" class="form-control" placeholder="Email" name="user_name"required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" placeholder="Password" name="password"required>
		            </div>
		            <div class="form-group">
		            	<input type="submit" name="login" value="Login" class="form-control btn btn-primary submit px-3">
		            </div>
		            <div class="form-group d-md-flex">
		            	
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="style/js/jquery.min.js"></script>
  <script src="style/js/popper.js"></script>
  <script src="style/js/bootstrap.min.js"></script>
  <script src="style/js/main.js"></script>

	</body>
</html>

