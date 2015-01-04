<!--WEB APPLICATION DEVELOPED BY EDDY ELLA & FELIX GOZALI--> 

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Profile</title>
    <?php include 'frontend/includes/head.php';?>
</head>
    
<body class='page'>
<?php include 'frontend/includes/menu.php';?>   
    
<main class='content content-ex'>
<section class='section'>
    <div class="container container-fluid">
        <div class='row'>
            <div class='col-sm-8 col-md-8'>
                <div class="blog blog-main shadow">
                    <h4>Bounthanh Chandarah (BT)</h4>
                    <div class='details'>
                    <div class='row'>
                        <div class='col-md-3 col-sm-3'>
                            <div class='profile-picture'>
                            <img src='<?php echo $server_root?>/images/users/1024/profile.jpg' class='img-circle img-responsive' />
                            </div>
                        </div>
                        
                        <div class='col-md-9 col-sm-9'>
                            <div class='details'>
                                <div class='item'><i class='fa fa-birthday-cake fa-fw'></i> 23 May 1991</div>
                                <div class='item'><i class='fa fa-mobile fa-fw'></i> 04 2294 2032</div>
                                <div class='item'><i class='fa fa-send fa-fw'></i> bt@insearch.edu.au</div>
                                <div class='item'><i class='fa fa-graduation-cap fa-fw'></i> Alumni</div>
                                <div class='item'><i class='fa fa-gavel fa-fw'></i> Team Leader</div>
                                <div class='item'><i class='fa fa-linkedin fa-fw'></i> <a href=''>Bounthanh Chandarah</a></div>
                                <div class='item'><i class='fa fa-facebook fa-fw'></i> <a href=''>Bounthanh Chandarah</a></div>
                            </div>
                        </div>
                        
                        <a href='<?php echo $server_root;?>/profile'><div class='but but-dark centered but-350'><i class='fa fa-pencil fa-fw'></i> Update Profile </div></a>
                    </div>
                    </div>
                </div>
                
                <div id="accordion" class='accordion'>
                    <h3><i class='fa fa-info fa-fw'></i> About</h3>
                    <div class='accordion-content'>
                        
                        Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                        ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                        amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                        odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                       
                    </div>
                    
                    <h3><i class='fa fa-gears fa-fw'></i> Skills</h3>
                    <div class='accordion-content'>
                        <p>
                        Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                        ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                        amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                        odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                        </p>
                    </div>
                    
                    <h3><i class='fa fa-graduation-cap fa-fw'></i> Qualifications</h3>
                    <div class='accordion-content'>
                        <p>
                        Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                        ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                        amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                        odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                        </p>
                    </div>
                    
                    <h3><i class='fa fa-history fa-fw'></i> Experience</h3>
                    <div class='accordion-content'>
                        <p>
                        Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                        ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                        amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                        odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                        </p>
                    </div>
                    
                    <h3><i class='fa fa-arrow-left fa-fw'></i> History</h3>
                    <div class='accordion-content'>
                        <p class='next'>3/3/2015 | <a href=''>Semester 2 Diploma Orientation</a> | Traffic Controller | 4h25mn</p>
                        <p class='next'> 20/2/2015 | <a href=''>Picnic at the beach</a> | Attended</p>
                        <p class='next'>13/2/2015 | <a href=''>Excursion to Canberra</a> | Attended</p>
                         <p class='next'>3/2/2015 | <a href=''>End of semester 2 Party</a> | Attended</p>
                    </div>
                    
                </div>
                
            </div> 
            
            
            
            <div class='col-sm-4 col-md-4'>
                <div class="blog shadow bg-white">
                    <h4>Next Event <i class='fa fa-arrow-right fa-fw'></i></h4>
                    <p class='next'><a href='<?php echo $server_root?>/event/1024/insearch-masquerade-ball'>Semester 2 Diploma Orientation</a><br>
                        <i class='fa fa-calendar fa-fw'></i> 26 May 2015<br>
                        <i class='fa fa-clock-o fa-fw'></i> From 8 AM<br>
                        <i class='fa fa-gavel fa-fw'></i> Traffic Controller
                    </p>
                </div>
                
                <div class="blog shadow bg-white">
                    <h4>Tickets</h4>
                    <p class='next'>102411021415 | <a href='<?php echo $server_root?>/ticket/102411021415'>Insearch Masquerade Ball</a></p>
                    <p class='next'>102411021409 | <a href='<?php echo $server_root?>/ticket/102411021415'>Insearch Movie Night</a></p>
                    <p class='next'>10241102143 | <a href='<?php echo $server_root?>/ticket/102411021415'>Wet'n'Wild</a></p>
                    <p class='next'>102411021409 | <a href='<?php echo $server_root?>/ticket/102411021415'>Insearch Movie Night</a></p>
                    <p class='next'>102411021415 | <a href='<?php echo $server_root?>/ticket/102411021415'>Insearch Masquerade Ball</a></p>
                    
                </div>
                
                
                
            </div>
            
        
        </div>
    </div>
</section>
    
    

</main>
    
<?php include 'frontend/includes/footer.php';?>    
</body>
<?php include 'frontend/includes/js.php';?>  
 <script>
  $(function() {
    $("#accordion").accordion({ header: "h3", collapsible: true, active: false });
  });
  </script>
</html>