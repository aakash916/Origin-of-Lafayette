//CarbonComponents.settings.disableAutoInit = true;
//	CarbonComponents.Tile.init();

$(document).on('ready', function () {

	$(document).find('.btn_save').hide();
	$(document).find('.btn_cancel').hide(); 


 	// Open modal for adding new transaction. 
	$("#managedb").on("click", function(event) {
	    event.preventDefault();
	    $('#darkenBackground').show();
	    $("body").css("overflow", "hidden");
	    $('#transactionForm').slideDown();
	}); 

	$("#darkenBackground").on("click", function(event) {
	 	event.preventDefault();
	 	$('#darkenBackground').hide();
	 	$('#transactionForm').slideUp();
	  	$("body").css("overflow", "visible");
	});

$(document).on('click', '.btn_edit', function(event) 
{
	event.preventDefault();
	var tbl_row = $(this).closest('tr');

	//var row_id = tbl_row.attr('row_id');

	tbl_row.find('.btn_save').show();
	tbl_row.find('.btn_cancel').show();

	//hide edit button
	tbl_row.find('.btn_edit').hide(); 

	//make the whole row editable
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

});

$(document).on('click', '.btn_cancel', function(event) 
{
	event.preventDefault();

	var tbl_row = $(this).closest('tr');

	var row_id = tbl_row.attr('row_id');

	//hide save and cacel buttons
	tbl_row.find('.btn_save').hide();
	tbl_row.find('.btn_cancel').hide();

	//show edit button
	tbl_row.find('.btn_edit').show();

	//make the whole row editable
	tbl_row.find('.row_data')
	.attr('contenteditable', 'false')
	//.attr('edit_type', 'click')	 
	.removeClass('bg-warning')
	.css('padding','')

	tbl_row.find('.row_data').each(function(index, val) 
	{   
		$(this).html( $(this).attr('original_entry') ); 
	});  
});

	$(document).on('click', '#button-view', function(event) 
	{
		//event.preventDefault();
		var tbl_row = $(this).closest('tr');

		var row_id = tbl_row.attr('image_data'); 
		console.log(row_id);
		console.log('hellogello');
		document.getElementById("modalImage").src = row_id;

	});

	$(".js-select2").each(function(){
		$(this).select2({
			minimumResultsForSearch: 20,
			dropdownParent: $(this).next('.dropDownSelect2')
		});


		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				if($(this).val() == "Please chooses") {
					$('.js-show-service').slideUp();
				}
				else {
					$('.js-show-service').slideUp();
					$('.js-show-service').slideDown();
				}
			});
		});
	})

});
