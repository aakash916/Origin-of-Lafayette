//CarbonComponents.settings.disableAutoInit = true;
//	CarbonComponents.Tile.init();

$(document).on('ready', function () {

  	// Method to handle submission of login content
	$("#signIn").on("submit", function(event) {
	    event.preventDefault();
	    $("#errors").hide();
	    $('#loginContentWrapper').hide();
	    $('#spinnyGIF').show();
	    displayNotification('Logging you in, one moment');
	    var data = $(this).serialize();
	    attemptLogin(data);
	});

 	// Open modal for adding new transaction. 
	$("#createNewTransaction").on("click", function(event) {
	    event.preventDefault();
	    $('#darkenBackground').show();
	    $("body").css("overflow", "hidden");
	    $('#transactionForm').slideDown();
	}); 

	$("#outstanding").on("click", function(event) {
	    event.preventDefault();
	    //$("#test1").text("Hello world!");
	    $("#outstandingSubmit").click();
	    //$('#darkenBackground').show();
	    //$("body").css("overflow", "hidden");
	    //$('#transactionForm').slideDown();
	}); 

	$("#notable").on("click", function(event) {
	    event.preventDefault();
	    //$("#test1").text("Hello world!");
	    $("#notableSubmit").click();
	    //$('#darkenBackground').show();
	    //$("body").css("overflow", "hidden");
	    //$('#transactionForm').slideDown();
	}); 

	$("#contributing").on("click", function(event) {
	    event.preventDefault();
	    //$("#test1").text("Hello world!");
	    $("#contributingSubmit").click();
	    //$('#darkenBackground').show();
	    //$("body").css("overflow", "hidden");
	    //$('#transactionForm').slideDown();
	}); 
	$("#noncontributing").on("click", function(event) {
	    event.preventDefault();
	    //$("#test1").text("Hello world!");
	    $("#nonContributingSubmit").click();
	    //$('#darkenBackground').show();
	    //$("body").css("overflow", "hidden");
	    //$('#transactionForm').slideDown();
	}); 
/*
	// Method to close new transaction modal once opened
	$("#darkenBackground").on("click", function(event) {
	  	event.preventDefault();
	  	$('#darkenBackground').hide();
	  	$('#transactionForm').slideUp();
	    $("body").css("overflow", "visible");
	});

  	// handle submission of form to add new transaction
	$("#addTransaction").on("submit", function(event) {
		event.preventDefault();
		$('#darkenBackground').hide();
		$("body").css("overflow", "visible");
		$('#transactionForm').hide();
		var data = $(this).serialize();

		// Add transaction with API call. If unsuccesful, display valuable message.
		makeAjaxRequest(data, function (response, textStatus, jqXHR) {
			var response = JSON.parse(response);
			if (response['jsonCode'] === 200) {
				var transaction = response['transactionList'][0];
				var $table = $("#transactionTableBody");
				var count = $table.find("tr").length;
				var promise = appendTransaction(transaction, count);
				promise.then(function(row) {
				    $table.append(row);
				    displayNotification('Transaction added succesfully!')
				})
			} else {
				displayError('Error creating transaction! Try again.');
			}
    	});
	});

	// Perform cleanup when the user logs out
	$("#signInStatus").on("click", function(event) {
		event.preventDefault();
    	if ($.cookie('authToken') !== undefined) {
			$.removeCookie('authToken');
			var $table = $("#transactionTableBody");
			$table.find("tr").remove();
			$('#signInStatus').text("Sign In");
			$('#transactionTableWrapper').hide();
			$('#spinnyGIF').hide();
			$('#loginContentWrapper').show();
			displayNotification('Logged out successfully');
    	}
	});
*/
});
