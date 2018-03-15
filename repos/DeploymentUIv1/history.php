<?php
session_start();
$thispage = 'history';

include('dbconnection.php');

if($_SESSION["connection"]=="disconnected"){
	echo 'no connection';
	//header( 'Location: ./index.php');
}

// Fetching history
$history = " SELECT * FROM dbo.USER_DEPLOYMENT   ORDER BY ID DESC ";
$historystmt = sqlsrv_query( $conn, $history );
if( $historystmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

?>
<!doctype html>
<html class="no-js" lang="">
<?php include('head.php'); ?>
    <body>

<?php 
include('tablecheckbox.php');
include('navbar.php'); ?>

		<div class="container">

			<div class="jumbotron">
			  <h1>Deployment Validation.</h1> 
			  <p>Here you can find the details of all the deployments.</p> 
			</div>
				<p id="selectcolumns"> Select the table columns to be displayed</p>
				<div class="form-check form-check-inline">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" id="srnobox" value="" checked>Sr.no
				  </label>
				</div>
				<div class="form-check form-check-inline">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" id="patternbox" value="" checked>Dep. Pattern
				  </label>
				</div>
				<div class="form-check form-check-inline">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" id="tshirtbox" value="" checked>T-shirt Size
				  </label>
				</div>
				<div class="form-check form-check-inline">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" id="regionbox" value="" checked>Region
				  </label>
				</div>
				<div class="form-check form-check-inline">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" id="envbox" value="" checked>Env.
				  </label>
				</div>
				<div class="form-check form-check-inline">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" id="codebox" value="" checked>Engagement Code
				  </label>
				</div>
				<div class="form-check form-check-inline">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" id="datebox" value="" checked>Date
				  </label>
				</div>
				<div class="form-check form-check-inline">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" id="usernamebox" value="" checked>Username
				  </label>
				</div>
				<div class="form-check form-check-inline">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" id="subscriptionbox" value="" checked>Subscription
				  </label>
				</div>
				<div class="form-check form-check-inline">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" id="statusbox" value="" checked>Status
				  </label>
				</div>
				<div class="form-check form-check-inline">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" id="actionsbox" value="" checked>Actions
				  </label>
				</div>
		</div>
		<div class="space"></div>
		<div id="tablecontainer">
			<table id="historytable" class="table table-dark">
			    <thead>
			      <tr>
			        <th class="rowofsr">Sr.no</th>
			        <th class="rowofpattern">Dep. Pattern</th>
			        <th class="rowoftshirt">T-shirt Size</th>
			        <th class="rowofregion">Region</th>
			        <th class="rowofenv">Env.</th>
			        <th class="rowofcode">Engagement Code</th>
			        <th class="rowofdate">Date</th>
			        <th class="rowofusername">Username</th>
			        <th class="rowofsubscription">Subscription</th>
			        <th class="rowofstatus">Status</th>
			        <th class="rowofaction">Actions</th>

			      </tr>
			    </thead>
			    <tbody>
			      
			      	<?php
			      		
						while( $row = sqlsrv_fetch_array( $historystmt, SQLSRV_FETCH_NUMERIC) ) {
							echo '<tr>';
      						echo '<td class="rowofsr">'.$row[0].'</td>';
      						echo '<td class="rowofpattern">'.$row[1].'</td>';
      						echo '<td class="rowoftshirt">'.$row[2].'</td>';
      						echo '<td class="rowofregion">'.$row[3].'</td>';
      						echo '<td class="rowofenv">'.$row[4].'</td>';
      						echo '<td class="rowofcode">'.$row[5].'</td>';
      						echo '<td class="rowofdate">'.$row[7].'</td>';
      						echo '<td class="rowofusername">'.$row[8].'</td>';
      						echo '<td class="rowofsubscription">'.$row[9].'</td>';
      						echo '<td class="rowofstatus">'.$row[11].'</td>';
      						echo '<td class="rowofaction">(-)</td>
			      			</tr>';
						}
						
					?>

			        


			    </tbody>
			  </table>
		<div>
    </body>
</html>