<?php
session_start();
$thispage = 'index';
include('dbconnection.php');
$user_check = $_SESSION['login_user'];
if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
//sqlsrv_close( $conn );

// Fetching Region
$region = " SELECT * FROM dbo.REGION_DETAILS ";
$regionstmt = sqlsrv_query( $conn, $region );
if( $regionstmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}
//Patterns
$pattern = " SELECT * FROM dbo.PATTERN_DETAILS ";
$patternstmt = sqlsrv_query( $conn, $pattern );
if( $patternstmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}
//Tshirt
$tshirt = " SELECT * FROM dbo.TSHIRTSIZE_DETAILS ";
$tshirtstmt = sqlsrv_query( $conn, $tshirt );
if( $tshirtstmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}
//Environment
$env = " SELECT * FROM dbo.ENVIRONMENT_DETAILS ";
$envstmt = sqlsrv_query( $conn, $env );
if( $envstmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}
?>

<!doctype html>
<html class="no-js" lang="">
<?php include('head.php'); ?>
    <body>

<?php 
		include('formsubmit.php');
		include('navbar.php'); 
?>
		<div class="container">
			<!-- Jumbo Tron -->
			<div class="jumbotron">
			  <h1>Welcome to KPMG Lighthouse Cloud Deployment</h1> 
			  <p>Here you can submit the deployment by filling in the form bellow</p> 
			</div>			
			<!-- FORM -->
			<form class="deploymentform" id="depform">
				<div class="row">
					<div class = "col-sm-4">
			  			<div class="form-group">
						  <label for="sel1">Deployment Pattern</label>
						  <select class="form-control" id="pattern">
						    <?php
						  		while( $row = sqlsrv_fetch_array( $patternstmt, SQLSRV_FETCH_NUMERIC) ) {
      							echo '<option>'.$row[0].'</option>';
										}
						  	?>
						  </select>
						</div>
					</div>
					<div class = "col-sm-4">
			  			<div class="form-group">
						<label for="email">T-Shirt Size</label>
						  <select class="form-control" id="tshirt">
						    <?php
						  		while( $row = sqlsrv_fetch_array( $tshirtstmt, SQLSRV_FETCH_NUMERIC) ) {
      							echo '<option>'.$row[0].'</option>';
										}
						  	?>
						  </select>
						</div>

					</div>
					<div class = "col-sm-4">
			  			<div class="form-group">
						<label for="email">Region</label>
						  <select class="form-control" id="region">
						  	<?php
						  		while( $row = sqlsrv_fetch_array( $regionstmt, SQLSRV_FETCH_NUMERIC) ) {
      							echo '<option>'.$row[0].'</option>';
										}
						  	?>
						  </select>
						</div>

					</div>
				</div>
				<div class="space"></div>
				<div class="row">
					<div class = "col-sm-4">
			  			<div class="form-group">
						<label for="email">Environment</label>
						  <select class="form-control" id="environment">
						    <?php
						  		while( $row = sqlsrv_fetch_array( $envstmt, SQLSRV_FETCH_NUMERIC) ) {
      							echo '<option>'.$row[0].'</option>';
										}
						  	?>
						  </select>
						</div>

					</div>
					<div class = "col-sm-4">
			  			<div class="form-group">
						  <label for="email">Engagement Code</label>
						  <input  type="number" class="form-control" id="engcode" min="1000000000" max="999999999999" required>
						</div>
					</div>
				</div>
				<div class="space"></div>
				<div class="checkbox">
				  <label><input type="checkbox" value="" id="checky" required> I agree to the Terms of Service</label>
				</div>
			  <button type="submit" class="btn btn-primary" disabled>Export</button>
			  <button id="deploymentsubmit" type="submit" class="btn btn-primary" disabled="disabled">Submit</button>
			</form>

    	</div>
    </body>
</html>