<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Awesome Web">

    <title>Students Activities Club Admin</title>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="backend/css/style.default.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="signin">
        
        <section>
            <div class='bottom-logo-holder'>
                <div class='bottom-logo'></div>
            </div>
        </section>
    
        <section>
            <div class="panel panel-signin shadow">
                <div class="panel-heading">
                    Students Activities Club Admin
                </div><!-- panel-header -->
                
                <div class="panel-body">
                    
                    <?php 
                    if(isset($error))
                    {
                        echo "<p class='red align-center'>".$error."</p>";
                    }
                    ?>
                    <form role='form' action="" method='POST'>
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div><!-- input-group -->
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div><!-- input-group -->
                        
                        <div class="clearfix">
                            <div class="">
                                <button type="submit" class="btn btn-orange btn-block btn40" name='signin'><i class="fa fa-sign-in fa-fw"></i> Sign In </button>
                            </div>
                        </div>                      
                    </form>
                    
                </div><!-- panel-body -->
                <div class="panel-footer">
                    <a href="signup.html" class="btn btn-dark-grey btn-block">Forgot your password? Reset it here</a>
                </div><!-- panel-footer -->
            </div><!-- panel -->
            
        </section>
    
        


    <script src="backend/js/jquery-1.11.1.min.js"></script>
    <script src="backend/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="backend/js/bootstrap.min.js"></script>
    <script src="backend/js/modernizr.min.js"></script>
    <script src="backend/js/pace.min.js"></script>
    <script src="backend/js/retina.min.js"></script>
    <script src="backend/js/jquery.cookies.js"></script>

    <script src="backend/js/custom.js"></script>

</body>
</html>
