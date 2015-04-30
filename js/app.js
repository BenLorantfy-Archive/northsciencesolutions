var App = (function(){
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
					var sectionTopElement = $(location.hash);
					if(sectionTopElement.length != 0){
						var scrollTop = $(location.hash).offset().top;
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
	
	//
	// Open admin login
	//
	function openAdmin(){
		$('#adminModal').modal("show");
		$("#loginButton").click(function(){
			$.postCall("Users.login","ben","password",function(loggedIn){
				if(loggedIn){
					App.isLogged = true;
					startAdminMode();
				}else{
					$.msgBox.error("Invalid credentials");
				}
			},function(data){
				$.msgBox.error("An error occurred while trying to login");
			});
		});
	}
	
	function startAdminMode(){
		$("#toolbar").show();
		$(".editable").attr("contenteditable","true");
		$(".adminTool").show();
	}
	
	//
	// Validation
	//
	function validateContactForm(){
		$("#errors").hide();

		$("#frmContact").validate({
			rules:{
				fullName:{
					required: true,
					minlength: 2
				},
				email:{
					required: true,
					email: true
				},
				commentInput:{
					required: true
				}
			},
			messages:{
				fullName:{
					required: "Please enter your name",
					minlength: "Please enter a name greater than 2 characters"
				},
				email:{
					required: "Please enter an email address"
				},
				commentInput:{
					required: "Please enter a comment"
				}
			},
			errorLabelContainer: '#errors',
			wrapper: "li"
		});
		
		$("#frmContact").submit(function(){
			if($("#errors").html().trim() == ""){
				$("#errors").hide();
			}
			else{
				$("#errors").show();
			}
		});
	}
	
	//
	// CMS GUI
	//
	function adminTools(){
		//
		// Drag around toolbar
		//
		var moving = false;
		var extraX = 0;
		var extraY = 0;
		var mouseX = 0;
		var mouseY = 0;
		
		var ratioX = 0.1;
		var ratioY = 0.1;
		
		$("#toolbar").css("left",$(window).width()*ratioX + "px");
		$("#toolbar").css("top",$(window).height()*ratioY + "px");
		
		$(window).resize(layout);
		
		function layout(){
			var left = $(window).width()*ratioX;
			var top = $(window).height()*ratioY;
			var widthBound = $(window).width() - $("#toolbar").width();
			var heightBound = $(window).height() - $("#toolbar").height();
			
			if(left < 0) left = 0;
			if(left > widthBound) left = widthBound;
			if(top < 0) top = 0;
			if(top > heightBound) top = heightBound;
			
			$("#toolbar").css("left",left + "px");
			$("#toolbar").css("top",top + "px");					
		}

		$("#toolbar").mousedown(function(e){
			var top = $(this).css("top").replace("px", "")*1;
			var left = $(this).css("left").replace("px", "")*1;
			extraX = mouseX - left;
			extraY = mouseY - top;
			moving = true;
			e.preventDefault();
		});
		
		$(document).mousemove(function(e){
			mouseX = e.clientX;
			mouseY = e.clientY;
			if(!moving) return;
			
			var left = mouseX - extraX;
			var top = mouseY - extraY;
			var widthBound = $(window).width() - $("#toolbar").width();
			var heightBound = $(window).height() - $("#toolbar").height();
			
			if(left < 0) left = 0;
			if(left > widthBound) left = widthBound;
			if(top < 0) top = 0;
			if(top > heightBound) top = heightBound;
			
			$("#toolbar").css({ left:left, top:top });
			
			ratioX = $("#toolbar").css("left").replace("px","")/$(window).width();
			ratioY = $("#toolbar").css("top").replace("px","")/$(window).height();	
		})
		
		$(document).mouseup(function(){
			moving = false;
		});
	
		$("#bold").click(function(){
			document.execCommand("bold");
		})
		
		$("#underline").click(function(){
			document.execCommand("underline");
		})
		
		$("#italic").click(function(){
			document.execCommand("italic");
		})
		
		$("#save").click(function(){
		
			//
			// Save content
			//
			var content = {};
			$(".content").each(function(){
				var id = $(this).attr("id");
				if(id){
					content[id] = $(this).html();
				}else{
					console.warn("Content area missing id");
				}
			});
			
			$.postCall("Content.save",content,function(saved){
				if(saved){
					$.msgBox.success("Content saved");
				}else{
					$.msgBox.error("An error occurred while trying to save content");
				}
			},function(data){
				$.msgBox.error("An error occurred while trying to save content");
				console.error(data);
			});
			
			//
			// Save products
			//
			var products = [];
			$(".product-row").each(function(){
				var id = $(this).data("product-id");
				var title = $(this).find(".productTitle").html();
				var description = $(this).find(".productDescription").html();
				products.push({
					 id:id
					,title:title
					,description:description
				})
			});
			console.log(products);
			$.postCall("Products.save",products,function(data){
				console.log(data);
			},function(data){
				console.error(data);
			})
		})
		
		$("#categoriesSection").on("click .delete",function(){
			
		});
	
		$(".addNewProduct").click(function(){
			var modal = $(this).closest(".modal");
			$.postCall("Products.addProduct",function(markup){
				if(markup){
					modal.find(".category-modal").append(markup);
				}else{
					$.msgBox.error("An error occurred while trying to add product");
					console.log(markup);
				}
			},function(data){
				$.msgBox.error("An error occurred while trying to add product");
				console.log(data);
			});
		});
	}
	
	//
	// Initlize app
	//	
	function start(){
		//
		// config $.postCall
		//
		$.postCall.config({
			 prefix:"php/"
			,suffix:".class.php"
		});
		
		//
		// Init $.msgBox
		//
		$.msgBox.init();
	
		//
		// If user logged in as admin, start admin mode
		//
		if(App.isLogged){
			startAdminMode();
		}
	
		// Start navigation events
		navigation();
		
		// Start validation 
		validateContactForm();
		
		// Start admin tools
		adminTools();
	}
	
	return{
		start:start
	}
})();