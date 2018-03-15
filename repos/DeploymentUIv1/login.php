<?php
session_start();
$thispage = 'login';
include('dbconnection.php');

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      	$email = $_POST["email"]; 
      

		$sql = "SELECT UserName FROM dbo.USERNAME_AUTHORIZATION WHERE UserName = ?";
		$params = array($email);
		$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
		$stmt = sqlsrv_query( $conn, $sql , $params, $options );
		$row_count = sqlsrv_num_rows( $stmt );      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($row_count == 1) {

         $_SESSION['login_user'] = $email;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo '<script>alert("Your Login Name is invalid");</script>';
      }
   }

?>

<!doctype html>
<html class="no-js" lang="">
<?php include('head.php'); ?>
    <body>

		<div class="container">
			<!-- Jumbo Tron -->
			<div class="jumbotron">
			  <h1>Welcome to KPMG Lighthouse Cloud Deployment</h1> 
			  <p>Please Login to access the portal</p> 
			</div>			
			<!-- FORM -->
			<form class="deploymentform" id="depform" action="" method="post">
				<div class="row">
					<div class = "col-sm-4">

					</div>
					<div class = "col-sm-6">
			  			<div class="form-group">
						  <label for="sel1">Email ID: </label>
						  <input style="width:220px;" type="text" name="email">
						</div>
						<button id="login" type="submit" class="btn btn-primary">Login</button>
					</div>


				</div>

			  
			</form>

    	</div>
    </body>
</html>