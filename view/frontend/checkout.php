<!--WEB APPLICATION DEVELOPED BY EDDY ELLA & FELIX GOZALI--> 

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Checkout</title>
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
                    <h4>Review & Checkout</h4>
                    <div class='details'>
                        <div class='item'><b>Event:</b> Insearch Masquerade Ball</div>
                        <div class='item'><b>First name:</b> <?php echo $_POST['firstname']?></div>
                        <div class='item'><b>Last name:</b> <?php echo $_POST['lastname']?></div>
                        <div class='item'><b>Born:</b> <?php echo $_POST['dob'].' '.monthToString($_POST['mob']).' '.$_POST['yob']?></div>
                        <div class='item'><b>Email:</b> <?php echo $_POST['email']?></div>
                        <div class='item'><b>Mobile:</b> <?php echo $_POST['phone']?></div>
                        <div class='item'><b>Address:</b> <?php echo $_POST['address']?></div>
                    </div>
                    
                    <a href='<?php echo $server_root;?>/event/register/1024'><div class='but but-dark centered but-350'><i class='fa fa-pencil fa-fw'></i> EDIT DETAILS</div></a>
                    <div class='clear'></div>
                    
                    
                    <div class='hl bg-grey'></div>
                    <div class='details'>
                        <div class='item info'><i class='fa fa-warning fa-fw'></i> By clicking on 'Pay with Paypal', you agree to the <a href=''>Terms and conditions</a></div>
                    </div>
                </div>
            </div> 
            
            
            
            <div class='col-sm-4 col-md-4'>
                <div class="blog shadow bg-white align-center">
                    <h4>Amount Due</h4>
                    <h5>$20.<span>00</span></h5>
                    
                    <div class='pd-1x'>
                        <a href='<?php echo $server_root?>/event/register/thankyou' class='btn btn-orange btn-block btn-lg'><i class='fa fa-paypal fa-fw'></i>Pay with PayPal</a>
                    </div>
                    
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