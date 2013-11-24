<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/login.css" rel="stylesheet">
        <link rel="shortcut icon" href="img/144x144.png" />
    </head>
    <body>
        <div class="main-container">
            <div class="container">
                <div class="inner-container">
                    <div id="content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="login-form">
                                    <img src="img/logo.png" />
                                    <span class="tag-line">&#147;A Life Saving Map&#148;</span>
                                    <span class="form-header">Authentication</span>
                                    <form method='POST' action='<?php echo URL::to('login');?>'>
                                        <input type="text" name="username" placeholder="USERNAME"/>
                                        <input type="password" name="password" placeholder="PASSWORD"/><br/>
                                        <input type="submit" value="LOGIN" />
                                        <div class="clear"></div>
                                    </form>
                                    <div class="or"><a>Or</a></div>
                                    <input type="button" value="Facebook" class="others facebook" onclick="location.href='<?php echo URL::to('login/fb');?>';"/>
<!--                                    <input type="button" value="Google" class="others google" onclick="location.href='<?php echo URL::to('login/gg');?>';" />-->
                                    <div class="lr-new"></div>
                                    <input type="button" value="Create New Account" class="new" onclick="location.href='<?php echo URL::to('signup');?>';"/>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="col-md-7 inner-img">
                                    <img src="img/devices.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
                <div class="container">
                    <div class="footer-inner">  
                    </div>
                </div>
        </div>
    </body>
</html>