<div class="col-md-6 auth-panel auth-hero">
  <span class="auth-kicker">Casino Admin</span>
  <h1>Control your casino offers with a simpler admin experience.</h1>
  <p>Review offers faster, manage categories with less friction, and keep the content team focused on updates instead of fighting the panel.</p>
  <ul class="auth-feature-list">
    <li class="auth-feature">Cleaner login flow for staff access.</li>
    <li class="auth-feature">Faster navigation into offers, pages, and networks.</li>
    <li class="auth-feature">Improved stability for the data lists that drive the admin tables.</li>
  </ul>
</div>

<div class="col-md-6 auth-panel auth-form-wrap">
  <img src="Images/logo.png" data-src="Images/logo.png" data-src-retina="Images/logo.png" class="img-responsive auth-logo" alt="Admin logo">
  <h2>Sign in</h2>
  <p class="auth-copy">Use your staff email and password to open the admin dashboard.</p>

  <div class="auth-alert"><?php echo $msg; ?></div>

  <form id="login-form" class="login-form custom_validation validation auth-form" action="php/logincheck.php" method="post">
    <div class="form-group">
      <label class="form-label" for="username">Email Address</label>
      <div class="controls">
        <div class="input-with-icon right">
          <input type="text" name="username" id="username" class="form-control required email" placeholder="admin@example.com">
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="password">Password</label>
      <div class="controls">
        <div class="input-with-icon right">
          <input type="password" name="password" id="password" class="form-control required" placeholder="Enter your password">
        </div>
      </div>
    </div>

    <div class="auth-actions">
      <div class="auth-check">
        <input type="checkbox" id="checkbox1" value="1">
        <label for="checkbox1">Keep me signed in on this device</label>
      </div>
      <button class="auth-btn" type="submit" name="login" id="login" value="User Login">Open Dashboard</button>
    </div>

    <div class="auth-links">
      <a href="#modal" data-toggle="modal">Forgot password?</a>
    </div>
  </form>
</div>
</div>
</div>
</div>

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
          } else if (data[1]) {
            alert(data[1]);
          }
        })
        .fail(function(data)
        { alert("Unable to process your request right now.")})
    });

  });
</script>
