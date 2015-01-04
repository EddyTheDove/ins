<header class='content'>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="nav-container container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand nav-to logo" href="<?php echo $server_root;?>/"></a>
        </div>
 
        <div class="navbar-collapse collapse"> 
            <ul class="nav navbar-nav navbar-right">
                <li><a href='<?php echo $server_root;?>/'>Home</a></li>
                <li><a href="<?php echo $server_root;?>/events/upcoming">Events</a></li>
                <li><a class="nav-to" href="#services">What we do</a></li>
                <li><a class="nav-to" href="#clients">Help</a></li>
                  <li class="dropdown">
                     <a href="" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
                     <ul class="dropdown-menu" style="padding: 15px;min-width: 350px;">
                        <li>
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form login" role="form" method="post" action="" accept-charset="UTF-8">
                                    <div class="input-group form-group">
                                       <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                       <input type="email" class="form-control input-lg" placeholder="Email address" required>
                                    </div>
                                    <div class="input-group form-group">
                                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                                        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                       <input type="password" class="form-control input-lg" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                       <button class="btn btn-default btn40"><i class="fa fa-key fa-fw"></i> Reset Password</button>
                                       <button type="submit" class="btn btn-orange pull-right btn40"><i class="fa fa-sign-in fa-fw"></i> Sign in</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </li>
                        <li class="divider"></li>
                         <a type="button" href='<?php echo $server_root;?>/signup/student' class="btn btn-block btn-lg btn-default"><i class="fa fa-user fa-fw"></i>Create Account</a>
                     </ul>
                  </li>
               </ul>
        </div>
    </div>
</div> 
</header>