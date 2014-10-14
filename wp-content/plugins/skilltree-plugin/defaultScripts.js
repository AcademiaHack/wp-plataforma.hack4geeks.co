jQuery(document).ready(function($){
	$("#userid").val($( "#skilltree_userDropdown option:selected" ).attr("id"));
	
	$("#skilltree_userDropdown").change(function() {
		$("#userid").val($( "#skilltree_userDropdown option:selected" ).attr("id"));
		console.log("aqui");
	});

	$("#message .alert-link").on('click',function(){
		$("#feedback").attr("hidden",true);
	});

	$("#saveButton").on('click',function(){
		var data = {
			'action': 'save_tree',
			'user': {
				'id': $("#userID").text(),
				'hashString': $("#hashString").text()
			}
		}; 	

		// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
		$.post(ajaxurl, data, function(response) {
			
			$("#feedback").attr("hidden",false);
			$("#feedback").html(response);

			$("#feedback .alert-link").on('click',function(){
				$("#feedback").attr("hidden",true);
			});
		});
	});
}); 