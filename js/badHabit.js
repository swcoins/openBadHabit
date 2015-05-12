$("#myInputBox").autocomplete // <---- Make sure this matches the ID you wish to auto fill!!! 
({
	autoFocus: true,
	minLength: 0,
	source: function( request, response )
	{
		var htmlInputID = "myInputBox"; // <---- Make sure this matches the ID you wish to auto fill!!! 

		var searchStringvar = document.getElementById(htmlInputID).value;	
		var base_url = window.location.origin;	

		 document.getElementById("thinking").style.display = ""; //Just an example you can remove this.

		$.ajax
		({
			type: "POST",
			url : base_url+"/openBadHabit/php/badHabitHelper.php", 
			dataType: "JSON",
			data: {searchStringvar:searchStringvar},
			success: function( data )
			{
				response( $.map( data, function( obj ) {
					return {
						label: obj.name,
						value: obj.name,
						id: obj.id
					}
				}));		
			}
		});
		

	},
 	select: function(event, ui) 
 	{
		var name = ui.item.label;
		var id = ui.item.id;
		document.getElementById("thinking").style.display = "none";
		document.getElementById("selectedID").value = id;
    }
});

