<?php echo $msg; ?>
          <div class="col-md-5 col-md-offset-1">
          <h2>Sign in to webarch</h2>
          <p>Use Facebook, Twitter or your email to sign in.<br>
            <a href="#">Sign up Now!</a> for a webarch account,It's free and always will be..</p>
          <br>

       <button class="btn btn-block btn-info col-md-8" type="button">
            <span class="pull-left"><i class="icon-facebook"></i></span>
            <span class="bold">Login with Facebook</span> </button>
       <button class="btn btn-block btn-success col-md-8" type="button">
            <span class="pull-left"><i class="icon-twitter"></i></span>
            <span class="bold">Login with Twitter</span>
        </button>
        </div>
        <div class="col-md-5 "> <br>
               

        <form id="login-form" class="login-form custom_validation " action="php/logincheck.php" method="post">
             <div class="row">
             <div class="form-group col-md-10">
                    <label class="form-label">Username</label>
                    <div class="controls">
                <div class="input-with-icon  right">                                       
                  <i class=""></i>
                  <input type="text" name="username" id="username" class="form-control required email">
                           
                </div>
                    </div>
                  </div>
                  </div>
              <div class="row">
                  <div class="form-group col-md-10">
                    <label class="form-label">Password</label>
                    <span class="help"></span>
                    <div class="controls">
                <div class="input-with-icon  right">                                       
                  <i class=""></i>
                  <input type="password" name="password" id="password" class="form-control required">
                  
                </div>
                    </div>
                  </div>
                  </div>
              <div class="row">
                  <div class="control-group  col-md-10">
                    <div class="checkbox checkbox check-success"> <a href="#modal" data-toggle="modal">Trouble login in?</a>&nbsp;&nbsp;
                      <input type="checkbox" id="checkbox1" value="1">
                      <label for="checkbox1">Keep me reminded </label>
                    </div>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-md-10">
                      <button class="btn btn-primary btn-cons pull-right" type="submit" name="login" id="login" value="User Login">Login</button>
                    </div>
                  </div>
              </form>

             </div>
     
    
  </div>
</div>
<!-- END CONTAINER -->

<!-- BEGIN CORE JS FRAMEWORK-->
<!-- BEGIN CORE TEMPLATE JS -->


<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
      </div>
      <div class="modal-body" >
        <form method="post" class="validation form-horizontal login-form col-md-12 col-sm-12 col-xs-12 col-xl-12 "  >
            <div class="row form-row">
                  
            <div class="col-md-12 col-sm-12">
            <input name="email" type="text" id="email" class="form-control required email" placeholder="Email">
            </div>
                  <div class="clearfix"></div>
            </div>
        </form>
        <div class="clearfix"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="change-pass" name="forget_pass" value="forge">Submit</button>
       <input type="hidden" name="a" value="f">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    
   $("#change-pass").click(function() {
      if(!$("#email").valid()){
        return;
      }
      var email = $("#email").val();
        $.ajax({
          url: 'php/logincheck.php',
          type: 'POST',
          dataType:'JSON',
          data: {email: email,forget_pass:"forge"}
        })
        .done(function(data) {
         //alert(data);
          if(data[0] == 1){
            $("#modal").modal("hide");
            window.location = "login.php";
          }
        })
        .fail(function(data)
        { alert("Email Id Does Not Exist")})
    });

  });
</script>
</html>
