//CarbonComponents.settings.disableAutoInit = true;
//	CarbonComponents.Tile.init();

$(document).on('ready', function () {

	$("#darkenBackground").on("click", function(event) {
	 	event.preventDefault();
	 	$('#darkenBackground').hide();
	 	//$('#transactionForm').slideUp();
	  	$("body").css("overflow", "visible");
	});

	$(document).on('click', '#button-view', function(event) 
	{
		//event.preventDefault();
		var tbl_row = $(this).closest('tr');

		var row_id = tbl_row.attr('image_data'); 
		console.log(row_id);
		console.log('hellogello');
		document.getElementById("modalImage").src = row_id;
		

		//make the whole row editable
		/*
		tbl_row.find('.row_data')
		.attr('contenteditable', 'true')
		.attr('edit_type', 'button')
		.addClass('bg-warning')
		.css('padding','3px')
		//.css('background-color', '#FEEFB3')

		//--->add the original entry > start
		tbl_row.find('.row_data').each(function(index, val) 
		{  
			//this will help in case user decided to click on cancel button
			$(this).attr('original_entry', $(this).html());
		}); 		
		//--->add the original entry > end
		*/

	});

});
