<?php
echo '		
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="padding-right:0px; ">
		  <div class="container-fluid" style="padding-left:0px;padding-right:0px; ">
		  <ul class="navbar-nav">
		    <li  class="nav-item">
		      <a id="username" class="nav-link" >Hello';?> <?php echo $_SESSION['login_user']; ?><?php echo'</a>
		    </li>
		    <li class="nav-item';?> <?php if($thispage=='index') echo 'active';?> <?php echo'">
		      <a class="nav-link" href="./index.php">Cloud Deployment</a>
		    </li>
		    <li class="nav-item';?> <?php if($thispage=='history') echo 'active';?> <?php echo'">
		      <a class="nav-link" href="./history.php">Deployment History</a>
		    </li>		    
		  </ul>

		  	<ul class="nav navbar-nav navbar-right">
		      <li class="nav-item active">
		      <a class="nav-link" href="./logout.php">Logout</a>
		      </li>
	   		 </ul>
	   		</div>
		</nav>
		';

?>