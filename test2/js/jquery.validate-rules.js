$(document).ready(function(){
			$('input').hover(function()
			{
			$(this).popover('show')
		});
			$("#register").validate({
				rules:{
					username:"required",
					password:{
						required:true,
						minlength: 6
					},
					nama_lengkap:"required",
					jabatan:"required",
					departemen:"required",
					email:{
							required:true,
							email: true
						},
						mobile:{
						required:true,
						minlength: 6
					},
						phone:{
						required:true,
						minlength: 6
					},
						fax:{
						required:true,
						minlength: 6
					},
					
					
					
				},
				messages:{
					username:"Enter your username",
					password:{
						required:"Enter your password",
						minlength:"Password must be minimum 6 characters"
					},
					nama_lengkap:"Enteryour first and last name",
					jabatan:"Enter your position",
					departemen:"Enter your department",
					email:{
						required:"Enter your email address",
						email:"Enter valid email address"
					},
					mobile:{
						required:"Enter your mobile number",
						email:"Enter valid number"
					},
					phone:{
						required:"Enter your phone number",
						email:"Enter valid number"
					},
					fax:{
						required:"Enter your fax number",
						email:"Enter valid number"
					},
					
					
				},
				errorClass: "help-inline",
				errorElement: "span",
				highlight:function(element, errorClass, validClass) {
					$(element).parents('.control-group').addClass('error');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).parents('.control-group').removeClass('error');
					$(element).parents('.control-group').addClass('success');
				}
			});
		});