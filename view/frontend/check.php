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
                                <h1 class='ok'><i class='fa fa-check'></i></h1>
                                <!--<h1 class='ko'><i class='fa fa-warning'></i></h1>
                                <p class='fs20 align-center red'>Not yet the day!</p>-->
                            </div>
                        </div>

                        <div class='col-sm-8'>
                            <div class='details'>
                                <div class='item fs20'><i class='fa fa-user fa-fw'></i> Bounthanh Chandarah</div>
                                <div class='item fs20'><i class='fa fa-birthday-cake fa-fw'></i> 23/11/1988</div>
                            </div>
                        </div>
                    </div>
                    </div>     
                </div>
            </div> 
            
            
            
            <div class='col-sm-4 col-md-4'>
                <div class="blog shadow bg-white">
                    <h4>3/35 Attendees</h4>
                    <ol>
                        <li><a href=''>Bounthanh Chandarah</a></li>
                        <li><a href=''>Felix Gozali</a></li>
                        <li><a href=''>Merelien Wang</a></li>
                    </ol>
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