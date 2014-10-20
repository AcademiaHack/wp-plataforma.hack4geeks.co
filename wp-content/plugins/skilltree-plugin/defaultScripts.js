jQuery(document).ready(function($){
	if($(".usrSel").length){
		$("#skilltree_userDropdown").val($(".usrSel").attr("id"));
		console.log("Ya esta un usario seleccionado! "+$(".usrSel").attr("id"));
	}
	
	$("#userid").val($( "#skilltree_userDropdown option:selected" ).attr("id"));

	$("#skilltree_userDropdown").change(function() {
		$("#userid").val($( "#skilltree_userDropdown option:selected" ).attr("id"));
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