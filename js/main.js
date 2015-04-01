$(function() {
	// Start navigation events
	navigation();
	
	
	//
	// Handles page navigation
	// When user navigates to a specific section, scroll page to that section
	//
	function navigation(){
		$(window).on("hashchange",function(e){
			var hash = location.hash;
			if(hash == "#admin"){
				openAdmin();
			}else{
				if(hash == "#home" || hash == "#" || hash == ""){
					var scrollTop = 0;
				}else{
					var sectionTopElement = $(location.hash + "Section");
					if(sectionTopElement.length != 0){
						var scrollTop = $(location.hash + "Section").offset().top;
					}else{
						var scrollTop = 0;
					}
				}
				$('html, body').animate({ scrollTop: scrollTop }, 500,"easeOutQuart");			
			}
		});
		
		// Handle hash the page loaded with
		$(window).trigger("hashchange");		
		
	}
	
	// Open admin login	
	function openAdmin(){
		$('#adminModal').modal("show");
	}
	
	validateContactForm();
	
	$("#frmContact").submit(function(){
		if ($("#frmContact").valid())
		{
			alert("contact form validated");
		}
	});
});