<!--WEB APPLICATION DEVELOPED BY EDDY ELLA & FELIX GOZALI--> 

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Ticket No: <?php echo $ticketid ?></title>
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
                    <h4>Ticket No. <?php echo $ticketid ?></h4>
                    
        <div class='details'>
        <div class='row'>
            <div class='col-sm-4'>
                <div class='profile-picture'>
                    <?php echo "<img src=".$qr." class='img-responsive' />";?>
                    <a href='<?php echo $server_root.'/ticket/check/'.$ticketid ?>'>Test</a>
                </div>
            </div>

            <div class='col-sm-8'>
                <div class='details'>
                    <div class='item fs20'><b><i class='fa fa-user fa-fw'></i> Bounthanh Chandarah</b></div>
                    <div class='item fs20'><b><i class='fa fa-birthday-cake fa-fw'></i> 23/11/1988</b></div>
                    <div class='item'><a href=''><i class='fa fa-calendar-o fa-fw'></i> Insearch Masquerade Ball</a></div>
                    <div class='item'><i class='fa fa-calendar fa-fw'></i> 23 May 2015</div>
                    <div class='item'><i class='fa fa-clock-o fa-fw'></i> From 6PM</div>
                    <div class='item'><i class='fa fa-location-arrow fa-fw'></i> Darling Harbour - Home Night Club</div>
                    <div class='item'><i class='fa fa-money fa-fw'></i> $20.00</div>
                    <div class='item'><i class='fa fa-history fa-fw'></i> 13/04/2015 @ 17:34</div>
                </div>
            </div>

            <a href='<?php echo $server_root.'/pdf/'.$ticketid;?>' target='blank'><div class='but but-dark centered but-350'><i class='fa fa-file-pdf-o fa-fw'></i> DOWNLOAD PDF</div></a>
        </div>
        </div>
                    
                </div>
                
                
                
                
                <div id="accordion" class='accordion'>
                    <h3><i class='fa fa-ticket fa-fw'></i> All My Tickets</h3>
                    <div class='accordion-content'>
                        <p>102411021415 | <a href=''>Insearch Masquerade Ball</a></p>
                        <p>102411021408 | <a href=''>Excursion to Canberra</a></p>
                        <p>102411021402 | <a href=''>Port Stephens Tour</a></p>
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