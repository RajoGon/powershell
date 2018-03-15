<?php
echo'
 <script>
	$(document).ready(function(){

		$("#historytable").DataTable( {
        "pagingType": "full_numbers"
    	} );

	    $("#srnobox").click(function(){
	        if ( $(this).is(":checked") ) {
		        $(".rowofsr").css("display","table-cell");
		    } 
		    else {
		        $(".rowofsr").css("display","none");
		    }
	    });


	    $("#patternbox").click(function(){
	        if ( $(this).is(":checked") ) {
		        $(".rowofpattern").css("display","table-cell");
		    } 
		    else {
		        $(".rowofpattern").css("display","none");
		    }
	    });

	    $("#tshirtbox").click(function(){
	        if ( $(this).is(":checked") ) {
		        $(".rowoftshirt").css("display","table-cell");
		    } 
		    else {
		        $(".rowoftshirt").css("display","none");
		    }
	    });

	    $("#regionbox").click(function(){
	        if ( $(this).is(":checked") ) {
		        $(".rowofregion").css("display","table-cell");
		    } 
		    else {
		        $(".rowofregion").css("display","none");
		    }
	    });

	    $("#envbox").click(function(){
	        if ( $(this).is(":checked") ) {
		        $(".rowofenv").css("display","table-cell");
		    } 
		    else {
		        $(".rowofenv").css("display","none");
		    }
	    });

	    $("#codebox").click(function(){
	        if ( $(this).is(":checked") ) {
		        $(".rowofcode").css("display","table-cell");
		    } 
		    else {
		        $(".rowofcode").css("display","none");
		    }
	    });

	    $("#datebox").click(function(){
	        if ( $(this).is(":checked") ) {
		        $(".rowofdate").css("display","table-cell");
		    } 
		    else {
		        $(".rowofdate").css("display","none");
		    }
	    });

	    $("#usernamebox").click(function(){
	        if ( $(this).is(":checked") ) {
		        $(".rowofusername").css("display","table-cell");
		    } 
		    else {
		        $(".rowofusername").css("display","none");
		    }
	    });

	    $("#subscriptionbox").click(function(){
	        if ( $(this).is(":checked") ) {
		        $(".rowofsubscription").css("display","table-cell");
		    } 
		    else {
		        $(".rowofsubscription").css("display","none");
		    }
	    });

	    $("#statusbox").click(function(){
	        if ( $(this).is(":checked") ) {
		        $(".rowofstatus").css("display","table-cell");
		    } 
		    else {
		        $(".rowofstatus").css("display","none");
		    }
	    });

	    $("#actionsbox").click(function(){
	        if ( $(this).is(":checked") ) {
		        $(".rowofaction").css("display","table-cell");
		    } 
		    else {
		        $(".rowofaction").css("display","none");
		    }
	    });

	});
</script>

';
?>