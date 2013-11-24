<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png"> -->
    <title>Signin Template for Bootstrap</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
   
  </head>

  <body>
    <div class="container">
       <div class="col-md-4">
	      <form class="form-signin" role="form">
	        <h2 class="form-signin-heading">Please sign in</h2>
	        <input type="text" class="form-control" placeholder="Email address" required autofocus>
	        <input type="password" class="form-control" placeholder="Password" required>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	      </form>
	    <div id="idp">
		<span class="mm-or">OR</span>
			<div id="idpBtns">
				<div id="fBtn">
						<a id="fBtnLnk"target="_blank" href="<?php echo URL::to('login/fb');?>"><img src="img/facebook.png"/></a>
					</div>
					<div id="gBtn">
						<a id="fBtnLnk"target="_blank" href="<?php echo URL::to('login/gg');?>"><img src="img/google.png"/></a>
					</div>
			</div>
			<div class="clear"></div>
			
			<div class="lgbx-signup">
				<a id="signUpBtn" class="lgbx-btn blue-bg">Create New Account</a>
			</div>

		</div> 
       </div>
    </div>
  </body>
</html>