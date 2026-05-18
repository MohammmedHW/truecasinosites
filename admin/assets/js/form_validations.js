/* Webarch Admin Dashboard 
/* This JS is only for DEMO Purposes - Extract the code that you need
-----------------------------------------------------------------*/ 
$(document).ready(function() {				
	$(".select2").select2();
	//Traditional form validation sample

    jQuery.extend(jQuery.validator.messages, {
    required: 'This field is required',
    email: 'Please enter a valid email address.',
    url: 'Please enter a valid URL.',
    number: 'Please enter a valid number.',
    digits: 'Please enter only digits.',
    equalTo: 'Please enter the same value again.',
    accept: 'Please enter a value with a valid extension.',
    maxlength: jQuery.validator.format('Please enter no more than{0} characters.'),
    minlength: jQuery.validator.format('Please enter at least  {0} characters. '),
    rangelength: jQuery.validator.format('Please enter a value between {0} and {1} characters long.'),
    range: jQuery.validator.format('Please enter a value between {0} and {1}.'),
    max: jQuery.validator.format('Please enter a value less than or equal to {0}.'),
    min: jQuery.validator.format('Please enter a value greater than or equal to {0}.')
    });


    var form = $(".validation");
$(".validation").each(function(){
    var thiss = $(this);
    thiss.validate({
                focusInvalid: true, 
                ignore: ":hidden:not('.validit')",
                rules: {
                 favicon: {
                        extension: "ico"
                        },
                logo: {
                        extension: "jpg|gif|png|jpeg"
                    }

                },
                invalidHandler: function (event, validator) {
                    //display error alert on form submit 

                 if (!validator.numberOfInvalids())
                        return;

                    $('html, body').animate({
                        scrollTop: $(validator.errorList[0].element).offset().top - 80
                    }, 500);
                },

                errorPlacement: function (label, element) { // render error placement for each input type 
                
                    $('<span class="error"></span>').insertAfter(element).append(label);
                    var parent = $(element).parent('.input-with-icon');
                    parent.removeClass('success-control').addClass('error-control');  
                   

                   
                },

                highlight: function (element) { // hightlight error inputs
                   if($(element).hasClass('no_valid_border') == false){
                    var parent = $(element).parent();
                    parent.removeClass('success-control').addClass('error-control'); 
                    }
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    var parent = $(element).parent();
                    parent.removeClass('error-control').addClass('success-control'); 
                },

                success: function (label, element) {
                    var parent = $(element).parent('.input-with-icon');
                    parent.removeClass('error-control').addClass('success-control'); 
                }

            });


})

  var form_submit =1;
    $(".check_password").live("keyup keydown blur",function(){
            var thiss = $(this); 
            var password = $(this).val();
            if(password.length > 6 && password.length < 20 )
            {
                if(password.match(/^[0-9]{6,20}$/))
                {
                    thiss.parent().find("#check_pass_span").text("Password too Weak").addClass("text-warning").removeClass("text-primary text-success text-error"); 
                    $("#check_password").removeClass("hide");
                    $(".progress-bar").attr("style","width:25%;").addClass("progress-bar-warning").removeClass("progress-bar-danger progress-bar-success progress-bar-primary");
                    form_submit =0;
                }
                else if(password.match(/^[A-z]{6,20}$/))
                {
                    thiss.parent().find("#check_pass_span").text("Password is Normal ").addClass("text-warning").removeClass("text-primary text-success text-error"); 
                    $("#check_password").removeClass("hide");
                    $(".progress-bar").attr("style","width:40%;").addClass("progress-bar-warning").removeClass("progress-bar-danger progress-bar-success progress-bar-primary");
                     form_submit =0;
                }
                else if(password.match(/^[a-z0-9A-Z]{6,20}$/i))
                {
                    thiss.parent().find("#check_pass_span").text("Password is Normal").addClass("text-primary").removeClass("text-warning text-success text-error"); 
                    $("#check_password").removeClass("hide");
                    $(".progress-bar").attr("style","width:50%;").addClass("progress-bar-primary").removeClass("progress-bar-danger progress-bar-warning progress-bar-success");
                     form_submit =1;
                }
                else if(password.match(/^(?!.*(.)\1{3})((?=.*[\d])(?=.*[A-Za-z])|(?=.*[^\w\d\s])(?=.*[A-Za-z])).{6,20}$/))
                {
                    thiss.parent().find("#check_pass_span").text("Password is Strong").addClass("text-success").removeClass("text-warning text-primary text-error"); 
                    $("#check_password").removeClass("hide");
                    $(".progress-bar").attr("style","width:90%;").addClass("progress-bar-success").removeClass("progress-bar-danger progress-bar-warning progress-bar-primary ");
                     form_submit =1;
                }
            }
            else
            {
                thiss.parent().find("#check_pass_span").text("Password Should be between 6 to 20 Characters").addClass("text-error").removeClass("text-warning text-primary text-success");  
                 $("#check_password").removeClass("hide");
                 $(".progress-bar").attr("style","width:10%;").removeClass("progress-bar-warning").removeClass("progress-bar-primary").addClass("progress-bar-danger");
                  form_submit =0;
               
            }
            thiss.find("span.error").text("");
    });
            $(".password_form").submit(function(){
                $(".check_password").trigger("blur");
                if(form_submit==0)
                {
                    event.preventDefault();
                       $('html, body').animate({
                          scrollTop: $("#check_password").offset().top
                      }, "slow");
                }    
            });

            function randString(n)
            {
                if(!n)
                {
                    n = 5;
                }

                var text = '';
                var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz012345678901234567890123456789@#$%&*';

                for(var i=0; i < n; i++)
                {
                    text += possible.charAt(Math.floor(Math.random() * possible.length));
                }

                return text;
            }

            $("#generate_pass").click(function(){
                var new_pass = randString(15);
                $("input[type=password]").val(new_pass);
                $(".check_password").val(new_pass);
                var  type= $(".check_password").attr("type");
                var name = $(".check_password").attr("name");
                var  id=   $(".check_password").attr("id");
                var  clas= $(".check_password").attr("class");
                var valu=  new_pass;
                $(".check_password").before('<input type="text" name="'+name+'" id="'+id+'" class="'+clas+'" value="'+valu+'" />');
                $(".check_password :last").remove();
                $(".check_password").trigger('blur');
            });


        $.validator.addMethod("alpha", function(value, element) {
        return this.optional(element) || value == value.match(/^[a-zA-Z ]+$/);
        },"Only Characters Allowed.");






	/*$('#form_traditional_validation').validate({
                focusInvalid: false, 
                ignore: "",
                rules: {
                    form1Amount: {
                        minlength: 2,
                        required: true
                    },
                    form1CardHolderName: {
						minlength: 2,
                        required: true,
                    },
                    form1CardNumber: {
                        required: true,
                        creditcard: true
                    },
                    cardType:{
                        required: true
                    }
                },

                invalidHandler: function (event, validator) {
					//display error alert on form submit    
                },

                errorPlacement: function (label, element) { // render error placement for each input type   
					$('<span class="error"></span>').insertAfter(element).append(label)
                    var parent = $(element).parent('.input-with-icon');
                    parent.removeClass('success-control').addClass('error-control');  
                },

                highlight: function (element) { // hightlight error inputs
					var parent = $(element).parent();
                    parent.removeClass('success-control').addClass('error-control'); 
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
					var parent = $(element).parent('.input-with-icon');
					parent.removeClass('error-control').addClass('success-control'); 
                },

                submitHandler: function (form) {
                
                }
            });	

            $('.select2', "#form_traditional_validation").change(function () {
                $('#form_traditional_validation').validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
            });
	//Iconic form validation sample	
	   $('#form_iconic_validation').validate({
                errorElement: 'span', 
                errorClass: 'error', 
                focusInvalid: false, 
                ignore: "",
                rules: {
                    form1Name: {
                        minlength: 2,
                        required: true
                    },
                    form1Email: {
                        required: true,
                        email: true
                    },
                    form1Url: {
                        required: true,
                        url: true
                    },
                    gendericonic:{
                        required: true
                    }
                },

                invalidHandler: function (event, validator) {
					//display error alert on form submit    
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-with-icon').children('i');
                    var parent = $(element).parent('.input-with-icon');
                    icon.removeClass('fa fa-check').addClass('fa fa-exclamation');  
                    parent.removeClass('success-control').addClass('error-control');  
                },

                highlight: function (element) { // hightlight error inputs
					var parent = $(element).parent();
                    parent.removeClass('success-control').addClass('error-control'); 
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-with-icon').children('i');
					var parent = $(element).parent('.input-with-icon');
                    icon.removeClass("fa fa-exclamation").addClass('fa fa-check');
					parent.removeClass('error-control').addClass('success-control'); 
                },

                submitHandler: function (form) {
                
                }
           
            });
             $('.select2', "#form_iconic_validation").change(function () {
                $('#form_iconic_validation').validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
            });
	//Form Condensed Validation
	$('#form-condensed').validate({
                errorElement: 'span', 
                errorClass: 'error', 
                focusInvalid: false, 
                ignore: "",
                rules: {
                    form3FirstName: {
                        minlength: 3,
                        required: true
                    },
					form3LastName: {
                        minlength: 3,
                        required: true
                    },
                    form3Gender: {
                        required: true,
                    },
					form3DateOfBirth: {
                        required: true,
                    },
					form3Occupation: {
						 minlength: 3,
                        required: true,
                    },
					form3Email: {
                        required: true,
						email: true
                    },
                    form3Address: {
						minlength: 10,
                        required: true,
                    },
					form3City: {
						minlength: 5,
                        required: true,
                    },
					form3State: {
						minlength: 3,
                        required: true,
                    },
					form3Country: {
						minlength: 3,
                        required: true,
                    },
					form3PostalCode: {
						number: true,
						maxlength: 4,
                        required: true,
                    },
					form3TeleCode: {
						minlength: 3,
						maxlength: 4,
                        required: true,
                    },
					form3TeleNo: {
						maxlength: 10,
                        required: true,
                    },
                },

                invalidHandler: function (event, validator) {
					//display error alert on form submit    
                },

                errorPlacement: function (label, element) { // render error placement for each input type   
					$('<span class="error"></span>').insertAfter(element).append(label)
                },

                highlight: function (element) { // hightlight error inputs
					
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
                  
                },

                submitHandler: function (form) {
                
                }
            });	
	
	//Form Wizard Validations
	var $validator = $("#commentForm").validate({
		  rules: {
		    emailfield: {
		      required: true,
		      email: true,
		      minlength: 3
		    },
		    txtFullName: {
		      required: true,
		      minlength: 3
		    },
			txtFirstName: {
		      required: true,
		      minlength: 3
		    },
			txtLastName: {
		      required: true,
		      minlength: 3
		    },
			txtCountry: {
		      required: true,
		      minlength: 3
		    },
			txtPostalCode: {
		      required: true,
		      minlength: 3
		    },
			txtPhoneCode: {
		      required: true,
		      minlength: 3
		    },
			txtPhoneNumber: {
		      required: true,
		      minlength: 3
		    },
		    urlfield: {
		      required: true,
		      minlength: 3,
		      url: true
		    }
		  },
		  errorPlacement: function(label, element) {
				$('<span class="arrow"></span>').insertBefore(element);
				$('<span class="error"></span>').insertAfter(element).append(label)
			}
		});

	$('#rootwizard').bootstrapWizard({
	  		'tabClass': 'form-wizard',
	  		'onNext': function(tab, navigation, index) {
	  			var $valid = $("#commentForm").valid();
	  			if(!$valid) {
	  				$validator.focusInvalid();
	  				return false;
	  			}
				else{
					$('#rootwizard').find('.form-wizard').children('li').eq(index-1).addClass('complete');
					$('#rootwizard').find('.form-wizard').children('li').eq(index-1).find('.step').html('<i class="fa fa-check"></i>');	
				}
	  		}
	 });*/	 

});	
	 