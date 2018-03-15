<?php
echo'
<script>
	$(document).ready(function() {
	$("#checky").click(function() {
	if ($("#deploymentsubmit").is(":disabled")) {
    	$("#deploymentsubmit").removeAttr("disabled");
    } else {
    	$("#deploymentsubmit").attr("disabled", "disabled");
    }
	});

		$("#deploymentsubmit").click(function() {
		var pattern = $("#pattern").val();
		var tshirt = $("#tshirt").val();
		var region = $("#region").val();
		var environment = $("#environment").val();
		var engcode = $("#engcode").val();
		var UserName = "';?> <?php echo $_SESSION['login_user']; ?> <?php echo'";
		if (pattern == "" || tshirt == "" || region == "" || environment == "" || engcode == "") {
		alert("Insertion Failed Some Fields are Blank....!!");
		} else {
		// Returns successful data submission message when the entered information is stored in database.
		$.post("submitdeployment.php", {
		pattern1: pattern,
		tshirt1: tshirt,
		region1: region,
		environment1: environment,
		engcode1: engcode,
		username: UserName
		}, function(data) {
		alert(data);
		$("#depform")[0].reset(); // To reset form fields
		});
		}
		});



	});
</script>

';
?>