<!--WEB APPLICATION DEVELOPED BY EDDY ELLA & FELIX GOZALI-->

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Home</title>
    <?php include 'frontend/includes/head.php';?>
</head>
    
<body>

<?php include 'frontend/includes/menu.php';?>    

    
<main class='content content-ex'>   
<?php //SLIDER ?>
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="7000" id="bs-carousel">
    <!-- Overlay -->
    <div class="overlay"></div>
    
    <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
        <li data-target="#bs-carousel" data-slide-to="3"></li>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1" style='background-image: url(images/full/slider/1039618_789005301128016_69139509_o.jpg);'></div>
      <div class="hero">
        <hgroup>
            <h3>WELCOME TO</h3>        
            <h1>UTS: INSEARCH ACTIVITIES CLUB</h1>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">Join Us for FUN</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2" style='background-image: url(images/full/slider/10329873_843932272301985_10516899988564978_o.jpg);'></div>
      <div class="hero">        
        <hgroup>
            <h1>We are social</h1>        
            <h3>We make Friends from all over the world</h3>
        </hgroup>       
        <button class="btn btn-hero btn-lg" role="button">WHO are we?</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3" style='background-image: url(images/full/slider/10553813_944254598936418_8892601186872127983_o.jpg);'></div>
      <div class="hero">        
        <hgroup>
            <h1>We are FUN</h1>        
            <h3>Laughing is the best cure</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">What We DO</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-1" style='background-image: url(images/full/slider/10647098_907648372597041_299751215859708368_n.jpg);'></div>
      <div class="hero">        
        <hgroup>
            <h1>We are Student Activities Club</h1>
            <br>
            <br>
        <img src='backend/images/magnify.png'/>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">JOIN US NOW</button>
      </div>
    </div>
    </div> 
</div>

    
    
    

    
    
    
    
<section class='ongoing-activities align-center'>
    <div class="container container-fluid">
        <h2>Upcoming Events</h2>
        <div class="row">
        <div class='wow'>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 single-activity">
                <div class="panel panel-default">                  
                    <div class="panel-body">
                        <img src="images/full/events/event4.jpg" class="col-xs-12 col-sm-4 col-md-12 col-lg-12" alt="">
                           <div class="event-title">Insearch Masquerade Ball</div>

                        <div class="col-xs-12 col-sm-8 col-md-12 col-lg-12">
                            <ul class='list-unstyled event-details'>
                                <li><i class='fa fa-calendar fa-fw'></i> 23 May 2015</li>
                                <li><i class='fa fa-clock-o fa-fw'></i> From 6PM</li>
                                <li><i class='fa fa-location-arrow fa-fw'></i> Darling Habour</li>
                            </ul>
                            <div class="event-price">$20<span class="decimal">.00</span>
                                <span class="normal-price line-through">$35.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href='' class='btn btn-orange btn-md'><i class='fa fa-hand-o-right'></i> Register</a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
             
            
            
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 single-activity">
                <div class="panel panel-default">                  
                    <div class="panel-body">
                        <img src="images/full/events/event6.jpg" class="col-xs-12 col-sm-4 col-md-12 col-lg-12" alt="">
                           <div class="event-title">Snowy Adventure</div>

                        <div class="col-xs-12 col-sm-8 col-md-12 col-lg-12">
                            <ul class='list-unstyled'>
                                <li><i class='fa fa-calendar fa-fw'></i> 23 May 2015</li>
                                <li><i class='fa fa-clock-o fa-fw'></i> From 9AM</li>
                                <li><i class='fa fa-location-arrow fa-fw'></i> Snowy Mountains - Thredbo</li>
                            </ul>
                            <div class="event-price">$150<span class="decimal">.00</span>
                                <span class="normal-price line-through">$220.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href='' class='btn btn-orange btn-md'><i class='fa fa-hand-o-right'></i> Register</a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
             
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 single-activity">
                <div class="panel panel-default">                  
                    <div class="panel-body">
                        <img src="images/full/events/event3.jpg" class="col-xs-12 col-sm-4 col-md-12 col-lg-12" alt="">
                           <div class="event-title">Meditation for Beginners</div>

                        <div class="col-xs-12 col-sm-8 col-md-12 col-lg-12">
                            <ul class='list-unstyled'>
                                <li><i class='fa fa-calendar fa-fw'></i> 28 November 2015</li>
                                <li><i class='fa fa-clock-o fa-fw'></i> From 1PM - 1:30PM</li>
                                <li><i class='fa fa-location-arrow fa-fw'></i> Prayer Room - level 3 Blue Building</li>
                            </ul>
                            <div class="event-price">Free</div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href='' class='btn btn-orange btn-md'><i class='fa fa-hand-o-right'></i> Register</a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
             
        </div>
            <div class="clear"></div>
            <a href='<?php echo $server_root;?>/events/upcoming'><div class='btn-black-transparent transition bounce-in'><i class='fa fa-plus fa-fw'></i> All Upcoming Events</div></a>
    </div>
    </div>
</section>    
    
    
    
    
    
<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.4">
    <div class="container clearfix">
        <div id="content" class="grid_12">
            <div class="white margin-bottom-3x fade-in-up">
                    <br>STUDENT ACTIVITIES CLUB<br>
                    <img src="backend/images/magnify.png"/>
                    
                    <h3>Sporting events throughout the semester</h3>
                    Basketball * Snooker * PingPong * Soccer * Ice Skating * Sand Surfing * and many more...
                </div>

                <button class="btn btn-hero btn-lg bounce-in" role="button"><i class='fa fa-pencil fa-fw'></i> ENQUIRY NOW</button>
                <div class='clear'></div>
                <br>
        </div>
    </div>
</div>    
    

    
    
    
    
    
    
<section class='ongoing-activities'>
    <div class="container container-fluid">
        <h2>Ongoing Activities</h2>
        <div class="row">
        <div class='wow'>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 single-activity">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="title">Indoor Soccer</div>
                    </div>
                    
                    <div class="panel-body">
                        <img src="images/full/web/indoor-soccer.jpg" class="col-xs-12 col-sm-4 col-md-12 col-lg-12" alt="">
                        <div class="col-xs-12 col-sm-8 col-md-12 col-lg-12">
                            <ul class='list-unstyled'>
                                <li><i class='fa fa-calendar fa-fw'></i> Every Friday</li>
                                <li><i class='fa fa-clock-o fa-fw'></i> From 6PM</li>
                                <li><i class='fa fa-location-arrow fa-fw'></i> Ultimo Community Center</li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href='' class='btn btn-orange btn-md'><i class='fa fa-hand-o-right'></i> Enquiry Now</a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 single-activity">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="title">Jam Session</div>
                    </div>
                    
                    <div class="panel-body">
                        <img src="images/full/web/jam-session.jpg" class="col-xs-12 col-sm-4 col-md-12 col-lg-12" alt="">
                        <div class="col-xs-12 col-sm-8 col-md-12 col-lg-12">
                            <ul class='list-unstyled'>
                                <li><i class='fa fa-calendar fa-fw'></i> Every Friday</li>
                                <li><i class='fa fa-clock-o fa-fw'></i> From 6PM</li>
                                <li><i class='fa fa-location-arrow fa-fw'></i> Student Lounge - Blue Building ground floor</li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href='' class='btn btn-orange btn-md'><i class='fa fa-hand-o-right'></i> Enquiry Now</a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 single-activity">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="title">Snooker</div>
                    </div>
                    
                    <div class="panel-body">
                        <img src="images/full/web/snooker.jpg" class="col-xs-12 col-sm-4 col-md-12 col-lg-12" alt="">
                        <div class="col-xs-12 col-sm-8 col-md-12 col-lg-12">
                            <ul class='list-unstyled'>
                                <li><i class='fa fa-calendar fa-fw'></i> Every Friday</li>
                                <li><i class='fa fa-clock-o fa-fw'></i> From 5PM</li>
                                <li><i class='fa fa-location-arrow fa-fw'></i> Wembley Snooker Center</li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href='' class='btn btn-orange btn-md'><i class='fa fa-hand-o-right'></i> Enquiry Now</a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
        <a href=''><div class='btn-black-transparent transition bounce-in'><i class='fa fa-plus fa-fw'></i> All Ongoing Activities</div></a>
    </div>
    </div>
</section>
 
    

    
    
    
<section>  
<div class="slide" id="slide1" data-slide="2" data-stellar-background-ratio="0.4">
    <div class="container clearfix">
        <div id="content" class="grid_12">
            
          <div class='row'>
              <h3>Your opinion matters</h3>
            <div class='col-md-offset-2 col-md-8'>
              <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                <!-- Bottom Carousel Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#quote-carousel" data-slide-to="1"></li>
                  <li data-target="#quote-carousel" data-slide-to="2"></li>
                </ol>
                  

                <!-- Carousel Slides / Quotes -->
                <div class="carousel-inner">

                  <!-- Quote 1 -->
                  <div class="item active">
                    <blockquote>
                      <div class="row">
                        <div class="col-sm-3 text-center">
                          <img class="img-circle" src="backend/images/photos/profile.jpg" style="width: 100px;height:100px;">
                        </div>
                        <div class="col-sm-9">
                          <p>You should come to student activities. I met my husband there. Just kidding</p>
                          <small>BT</small>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!-- Quote 2 -->
                  <div class="item">
                    <blockquote>
                      <div class="row">
                        <div class="col-sm-3 text-center">
                          <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg" style="width: 100px;height:100px;">
                        </div>
                        <div class="col-sm-9">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
                          <small>One student</small>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!-- Quote 3 -->
                  <div class="item">
                    <blockquote>
                      <div class="row">
                        <div class="col-sm-3 text-center">
                          <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg" style="width: 100px;height:100px;">
                        </div>
                        <div class="col-sm-9">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit accumsan.</p>
                          <small>Another student</small>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                </div>

                <!-- Carousel Buttons Next/Prev -->
                <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
              </div>   
                <button class="btn btn-hero btn-lg bounce-in" role="button"><i class='fa fa-comments fa-fw'></i> Share your thoughts</button>
                <div class='clear'></div>
                
                <br>
            </div>
          </div>
        </div>
    </div>
</div>
</section>
    
    
<section class='margin-bottom-2x'>
    <div class="container container-responsive align-center">
            <div class="white margin-bottom-2x fade-in-up">
                <h2>Like the orange shirt?</h2>
                <img src="images/full/web/shirt.png" class='rotate-left'/>
            </div>
            <a href='<?php echo $server_root;?>/signup/volunteer' class="btn btn-orange btn-lg bounce-in" type="button"><i class='fa fa-smile-o fa-fw'></i> BECOME A VOLUNTEER</a>
            <div class='clear'></div>
        <br>
    </div> 
</section>    

    
    
    
    
<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.4">
    <div class="container clearfix">
        <div id="content" class="grid_12">
            <div class="margin-bottom-3x fade-in-up">
                    <h3>Wanna see what we do?</h3>
                </div>
                <br>
                <br>
                <div class='yt'></div>
                <button class="btn btn-hero btn-lg bounce-in" role="button">TAKE A VIDEO TOUR</button>
                <div class='clear'></div>
                <br>
                <br>
        </div>
    </div>
</div>  
</main>
    
    
<?php include 'frontend/includes/footer.php';?>    
</body>

<script src="<?php echo $server_root;?>/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $server_root;?>/assets/js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo $server_root;?>/assets/js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="<?php echo $server_root;?>/assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo $server_root;?>/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo $server_root;?>/assets/js/scripts.js"></script> 
<script type="text/javascript" src="<?php echo $server_root;?>/assets/js/viewportchecker.js"></script>
<script type="text/javascript" src="<?php echo $server_root;?>/assets/js/parallax.js"></script>

</html>