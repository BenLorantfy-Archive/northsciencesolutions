function validateContactForm(){
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
}