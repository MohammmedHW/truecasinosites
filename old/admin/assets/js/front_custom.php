<?php
//global $app_vars;
if (!isset($_SESSION)) 
{
    session_start();    
}
if(empty($display))
{
    $display = array();
}

?>
$(document).ready(function() {

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

              $(".custom_validation").on("submit",function(event){
          if($("#password").val()=="" || $("#username").val()=="" )
          {
            event.preventDefault();
            $("#alert-msg").find(".alert").html("Required");
            $("#alert-msg").slideDown();
            setTimeout(function(){
                $("#alert-msg").slideUp();
            },1800);
          }
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
                    thiss.parent().find("#check_pass_span").text("<?php echo $display['password_too_weak'] ?>").addClass("text-warning").removeClass("text-primary text-success text-error"); 
                    $("#check_password").removeClass("hide");
                    $(".progress-bar").attr("style","width:25%;").addClass("progress-bar-warning").removeClass("progress-bar-danger progress-bar-success progress-bar-primary");
                    form_submit =0;
                }
                else if(password.match(/^[A-z]{6,20}$/))
                {
                    thiss.parent().find("#check_pass_span").text("<?php echo $display['password_is_normal'] ?> ").addClass("text-warning").removeClass("text-primary text-success text-error"); 
                    $("#check_password").removeClass("hide");
                    $(".progress-bar").attr("style","width:40%;").addClass("progress-bar-warning").removeClass("progress-bar-danger progress-bar-success progress-bar-primary");
                     form_submit =0;
                }
                else if(password.match(/^[a-z0-9A-Z]{6,20}$/i))
                {
                    thiss.parent().find("#check_pass_span").text("<?php echo $display['password_is_normal'] ?>").addClass("text-primary").removeClass("text-warning text-success text-error"); 
                    $("#check_password").removeClass("hide");
                    $(".progress-bar").attr("style","width:50%;").addClass("progress-bar-primary").removeClass("progress-bar-danger progress-bar-warning progress-bar-success");
                     form_submit =1;
                }
                else if(password.match(/^(?!.*(.)\1{3})((?=.*[\d])(?=.*[A-Za-z])|(?=.*[^\w\d\s])(?=.*[A-Za-z])).{6,20}$/))
                {
                    thiss.parent().find("#check_pass_span").text("<?php echo $display['password_is_strong'] ?>").addClass("text-success").removeClass("text-warning text-primary text-error"); 
                    $("#check_password").removeClass("hide");
                    $(".progress-bar").attr("style","width:90%;").addClass("progress-bar-success").removeClass("progress-bar-danger progress-bar-warning progress-bar-primary ");
                     form_submit =1;
                }
            }
            else
            {
                thiss.parent().find("#check_pass_span").text("<?php echo $display['pass_min_character'] ?>").addClass("text-error").removeClass("text-warning text-primary text-success");  
                 $("#check_password").removeClass("hide");
                 $(".progress-bar").attr("style","width:10%;").removeClass("progress-bar-warning").removeClass("progress-bar-primary").addClass("progress-bar-danger");
                  form_submit =0;
               
            }
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


$.validator.addMethod("alpha", function(value, element) {
return this.optional(element) || value == value.match(/^[a-zA-Z ]+$/);
},"Only Characters Allowed.");

              $("#new_country").on('change',function(){
                   country_name = $(this).val();
                   $.ajax({
                       url: 'php/countries.php',
                       type: 'POST',
                       data: {    
                                   get_state_from_country : 'get_state_from_country', 
                                   country_name: country_name                                   
                             }
                   }).done(function(data) {
                      $("#new_state").html(data);
                   });
                   
            }); 
            
          $(".country_img").select2({
            formatResult: format,
            formatSelection: format,
            escapeMarkup: function (m) {
                return m;
            }
        });

        $("#country").change(function(event) {
            
            var i = $("#country option:selected").index();
            print_state("state",i);
            $("#state").select2("val","");
        });

        $(".select_styled").select2({
                        allowClear: false
        });

    function format(state) {
            if (!state.id) return state.text; // optgroup
            return "<img class='flag' src='admin/plugins/flags/" + state.id + ".png'/>" + state.text;
        }

if($("#country").length > 0)
print_country("country");


}); // end document ready


$(function() {
    $('input, textarea, select').placeholder();
});