<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/login.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<!-- END CORE TEMPLATE JS -->
</body>
</html>
<?php
	unset($_SESSION['msg']);
	unset($_SESSION['msg_type']);
?>
<script>
$(document).ready(function(){
var form = $(".validation");
$(".validation").each(function(){
    var thiss = $(this);
    thiss.validate({
                focusInvalid: false, 
                ignore: "",
                rules: {

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
                    var parent = $(element).parent();
                    parent.removeClass('success-control').addClass('error-control'); 
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    var parent = $(element).parent();
                    parent.removeClass('error-control').addClass('success-control'); 
                },

                success: function (label, element) {
                    var parent = $(element).parent('.input-with-icon');
                    parent.removeClass('error-control').addClass('success-control'); 
                },

            });
})
	})
</script>
<?php 
    mysqli_close($con);
?>