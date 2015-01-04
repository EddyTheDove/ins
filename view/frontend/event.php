<!--WEB APPLICATION DEVELOPED BY EDDY ELLA & FELIX GOZALI--> 

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Insearch Masquerade Ball</title>
    <?php include 'frontend/includes/head.php';?>
</head>
    
<body class='page'>
<?php include 'frontend/includes/menu.php';?>   
    
<main class='content content-ex'>
<section class='section'>
    <div class="container container-responsive">
        <div class='row'>
            <div class='col-sm-8 col-md-8'>
                <div class="blog blog-main shadow">
                    <h4>Insearch Masquerade Ball</h4>
                    <img src="<?php echo $server_root;?>/images/full/events/event4.jpg" class="img-responsive">
                    
                    <div class='details'>
                        <div class='item orange bold'><i class='fa fa-calendar fa-fw'></i> Saturday 19 May 2015</div>
                        <div class='item'><i class='fa fa-clock-o fa-fw'></i> From 6:00 PM</div>
                        <div class='item'><i class='fa fa-location-arrow fa-fw'></i> Darlin Harbour - Home Night Club</div>
                        <div class='item'><i class='fa fa-map-marker fa-fw'></i> Meeting Point: Blue Building - Ground Floor | 5:00 PM</div>
                        <div class='item'><i class='fa fa-users fa-fw'></i> Public Event | +18 Restriction</div>
                        <div class='item bold'><i class='fa fa-money fa-fw'></i> $20.00 <span>$35.00</span></div>
                    </div>
                    
                    
                    <div class='hl bg-grey'></div>
                    <div class='details'>
                        <div class='item info'><i class='fa fa-info fa-fw'></i> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</div>
                    </div>
                </div>
            </div> 
            
            
            
            <div class='col-sm-4 col-md-4'>
                <div class="blog shadow bg-white dashboard">
                    <h4>Dashboard</h4>
                </div>
                <div class="blog shadow blog-sidebar">
                    <p>Want to attend this event?</p>
                    <a href='<?php echo $server_root;?>/event/register/1024'><div class='but but-dark centered'>Register Here <i class='fa fa-caret-right fa-fw'></i></div></a>
                </div>
                
                <div class="blog shadow blog-sidebar">
                    <p>We need volunteers for this event</p>
                    <small>* Registrations are not opened yet, please check again later.</small>
                    <a href='#'><div class='but but-dark centered cursor-no-drop'>Receive a notification <i class='fa fa-caret-right fa-fw'></i></div></a>
                </div>
            </div>
            
        
        </div>
    </div>
</section>
    
    

</main>
    
<?php include 'frontend/includes/footer.php';?>    
</body>
<?php include 'frontend/includes/js.php';?>  
</html>