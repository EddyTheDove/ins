<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Events</title>
    <?php include 'backend/includes/head.php';?>
</head>

<body>
<?php include 'backend/includes/header.php';?>
        
        <section>
            <div class="mainwrapper">
<?php include 'backend/includes/leftpanel.php';?>
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href="<?php echo $server_root.'admin';?>"><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li>Events</li>
                                    <li><a href='<?php echo $server_root.'admin/events';?>'>Upcoming Events</a></li>
                                </ul>
                                <h4>Insearch Masquerade Ball</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    
                    
                    
                    
<div class="contentpanel">
    
    <div class="row blog-content">
        <div class="col-sm-9">
            <div class="panel panel-default panel-blog">
                <div class="panel-body">
                    
                    <h3 class="blogsingle-title">Insearch Masquerade Ball</h3>
            
                    <ul class="blog-meta">
                      <li>Added by: <a href="">Merelien</a></li>
                      <li>On: Fev 02, 2014</li>
                      <li>@ 3:45 PM</li>
                      <li>Public</li>
                    </ul>
                    
                    
                    <h3 class="single-event-date"><i class='fa fa-calendar fa-fw'></i>Thursday 27 - Friday 28 November 2014</h3>
                    
                    <h3 class="single-event-date"><i class='fa fa-clock-o fa-fw'></i>From 6pm</h3>

                    <br />
                    <div class="blog-img"><img src="<?php echo $server_root;?>images/full/events/event4.jpg" class="img-responsive" alt="" /></div>
                    <div class="mb20"></div>
            
                    
                    <h3 class="single-event-date"><i class='fa fa-info fa-fw'></i>Description</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                   
                </div><!-- panel-body -->
            </div><!-- panel -->
        </div><!-- col-sm-9-->
        
        
        <div class="col-sm-3">
            <button class='btn btn-white btn-block'><i class='fa fa-refresh fa-fw'></i> Update</button>
            <button class='btn btn-white btn-block'><i class='fa fa-plus fa-fw'></i> Add New</button>
            
            <div class="panel panel-default event-right bg-dark orange">
                <div class='medium-number orange'>$20.00</div>
                <p class='big-number-description orange line-through'>$45.00</p>
            </div>
            
            <div class="panel panel-default event-right bg-dark">
                <p class='big-number'>25</p>
                <p class='big-number-description'>going</p>
            </div>
            
            <div class="panel panel-default event-right bg-orange">
                <span class='bell'><i class='fa fa-bell fa-fw'></i></span>
                <p class='big-number'>4</p>
                <p class='big-number-description'>Volunteers</p>
            </div>
            
            <button class='btn btn-danger btn-block'><i class='fa fa-trash fa-fw'></i> Delete</button>
        </div>
        
        
        
        
    </div>
          

</div><!-- contentpanel -->
                    
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>


<?php include 'backend/includes/footer.php'?>
    </body>
</html>
