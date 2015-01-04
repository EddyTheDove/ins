<!--WEB APPLICATION DEVELOPED BY EDDY ELLA & FELIX GOZALI--> 

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Volunteer Registration Form</title>
    <?php include 'frontend/includes/head.php';?>
</head>
    
<body class='page'>
<?php include 'frontend/includes/menu.php';?>   
    
<main class='content content-ex'>
<section class='section bg-white'>
    <div class="container container-responsive">
        <div class='block block-top'>
            <h4>Volunteer Registration Form</h4>
        </div>
        
        
        <div class="contentpanel contentpanel-wizard">
                       
        <div class="row">
            <div class="col-md-12">

                <form method="POST" action='' id="valWizard" class="panel-wizard">
                    <ul class="nav nav-justified nav-wizard nav-disabled-click">
                        <li><a href="#tab1-4" data-toggle="tab"><i class='fa fa-user fa-fw'></i> Personal</a></li>

                        <li><a href="#tab3-4" data-toggle="tab"><i class='fa fa-bars fa-fw'></i> About</a></li>
                        <li><a href="#tab4-4" data-toggle="tab"><i class='fa fa-gavel fa-fw'></i> Skills</a></li>
                        <li><a href="#tab5-4" data-toggle="tab"><i class='fa fa-graduation-cap fa-fw'></i> Qualifications</a></li>
                        <li><a href="#tab6-4" data-toggle="tab"><i class='fa fa-history fa-fw'></i> Experience</a></li>
                    </ul>
                                    
                                    
                <div class="tab-content">
                    <div class="tab-pane" id="tab1-4">
                    <div class="row">
                        <div class="errorForm col-sm-12"></div>
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input  type="text" class="form-control input-lg firstname" placeholder='First Name' name='firstname' title='Enter your first name' required/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input  type="text" class="form-control input-lg lastname" placeholder='Lastname Name' name='lastname' title='Please enter your last name' required/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-smile-o fa-fw"></i></span>
                            <input  type="text" class="form-control input-lg" placeholder='Preferred Name' name='nickname'/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-send fa-fw"></i></span>
                            <input  type="text" class="form-control input-lg email" placeholder='Personal Email (Not Insearch email)' name='email' title='Please enter your email' required/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                            <input  type="text" class="form-control input-lg" placeholder='Phone Number' name='phone' id='phone'/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                            <input  type="text" class="form-control input-lg" placeholder='Address' name='address'/>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-2">
                          <select class="form-control input-lg" name="gender">
                                <option selected>Day of Birth</option>
                                <?php
                                    for($i = 1; $i <= 31; $i++)
                                    {
                                        echo "<option value='".$i."'>".$i."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-2">
                          <select class="form-control input-lg" name="gender">
                                <option selected>Month of Birth</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                               
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-2">
                          <select class="form-control input-lg" name="gender">
                                <option selected>Year of Birth</option>
                                <?php
                                    for($f = 1970; $f <= 2006; $f++)
                                    {
                                        echo "<option value='".$f."'>".$f."</option>";
                                    }

                              ?>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-3">
                          <select class="form-control input-lg" name="gender">
                                <option selected>Gender</option>
                                <option value='0'>Female</option>
                                <option value='1'>Male</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-3">
                          <select class="form-control input-lg" name="country">
                                <option selected>Country (Current Passport)</option>
                                <?php include 'frontend/includes/countries.html';?>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-6">
                            <select id="select-multi" data-placeholder="Choose the languages you speak" multiple class="w350">
                                <option value="">Choose One or more</option>
                                <?php include 'frontend/includes/languages.html';?>
                            </select>
                        </div>
                        
                    </div>
                    </div><!-- tab-pane -->

    
                                        
                    <div class="tab-pane" id="tab3-4">
                        <div class='row'>
                            <div class='form-group col-sm-12'>
                                <div class='area-desc'>A description of yourself</div>
                                <textarea class='form-control tiny' name='about'></textarea>
                            </div>
                        </div>
                    </div><!-- tab-pane -->
                                        
                    <div class="tab-pane" id="tab4-4">
                        <div class='row'>
                            <div class='form-group col-sm-12'>
                                <div class='area-desc'>Your Skills. E.g.: Event Management, Cooking Spicy Food, etc.</div>
                                <textarea class='form-control tiny' name='skills'></textarea>
                            </div>
                        </div>
                    </div><!-- tab-pane -->
                                        
                    <div class="tab-pane" id="tab5-4">
                        <div class='row'>
                            <div class='form-group col-sm-12'>
                                <div class='area-desc'>User's Qualifications. E.g.: HSC</div>
                                <textarea class='form-control tiny' name='qualifications'></textarea>
                            </div>
                        </div>
                    </div><!-- tab-pane -->
                                        
                    <div class="tab-pane" id="tab6-4">
                        <div class='row'>
                            <div class='form-group col-sm-12'>
                                <div class='area-desc'>Any past/current activity. e.g.: 2014: Volunteer at Cancer Council</div>
                                <textarea class='form-control tiny' name='experience'></textarea>
                            </div>
                        </div>
                    </div><!-- tab-pane -->
                                        
                                        
                                        
                </div><!-- tab-content -->
                                    
                
<ul class="list-unstyled wizard">
<li class="pull-left previous"><button type="button" class="btn btn-default"><i class='fa fa-arrow-left fa-fw'></i> Back</button></li>
<li class="pull-right next"><button type="button" class="btn btn-orange"><i class='fa fa-arrow-right fa-fw'></i> Next</button></li>
<li class="pull-right finish hide"><button type="submit" class="btn btn-orange"><i class='fa fa-check fa-fw'></i> Finish</button></li>
</ul>
                                    
                                </form><!-- panel-wizard -->
              
                            </div><!-- col-md-6 -->
                        </div><!-- row -->
            
<a href='<?php echo $server_root;?>/signup/student'><div class='but but-dark but-350 centered'>Create a user Account, Not a volunteer <i class='fa fa-caret-right fa-fw'></i></div></a>
                        
                    </div><!-- contentpanel -->
    </div>
</section>
    
<div class='image-before-footer'>
    <img src='<?php echo $server_root;?>/images/full/web/mary-abby.jpg' alt='Abby & M. Bernadette' class='img-responsive'/>
</div>    

</main>
    
<?php include 'frontend/includes/footer.php';?>    
</body>
<?php include 'frontend/includes/js.php';?>  


<script src="<?php echo $server_root;?>/assets/js/bootstrap-wizard.min.js"></script>
<script src="<?php echo $server_root;?>/assets/js/jquery.validate.min.js"></script>
<script src="<?php echo $server_root;?>/assets/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo $server_root;?>/assets/js/select2.min.js"></script>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    
<script>
    jQuery(document).ready(function($) {
        // Wizard With Form Validation
        jQuery('#valWizard').bootstrapWizard({
            onTabShow: function(tab, navigation, index) {
                tab.prevAll().addClass('done');
                tab.nextAll().removeClass('done');
                tab.removeClass('done');

                var $total = navigation.find('li').length;
                var $current = index + 1;

                if($current >= $total) {
                    $('#valWizard').find('.wizard .next').addClass('hide');
                    $('#valWizard').find('.wizard .finish').removeClass('hide');
                } else {
                    $('#valWizard').find('.wizard .next').removeClass('hide');
                    $('#valWizard').find('.wizard .finish').addClass('hide');
                }
            },
            onTabClick: function(tab, navigation, index) {
                return false;
            },
            onNext: function(tab, navigation, index) {
                var $valid = jQuery('#valWizard').valid();
                if(!$('.firstname').val() || !$('.lastname').val() || !$('.email').val())
                {
                    return false;
                }
                
            }
        });
        
        // Error Message In One Container
        jQuery("#valWizard").validate({
            errorLabelContainer: jQuery("#valWizard div.errorForm")
        });
        
        jQuery("#phone").mask("99 9999 9999");
        tinymce.init({selector:'.tiny'});
        jQuery("#select-multi").select2();        

    });
</script>
</html>