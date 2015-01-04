<!DOCTYPE html>
<html lang="en">
<head>
<title>New User</title>
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
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li><a href="">Users</a></li>
                                    <li>New User</li>
                                </ul>
                                <h4>New User</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel contentpanel-wizard">
                       
                        <div class="row">
                            <div class="col-md-12">
                                
                                <form method="POST" action='' id="valWizard" class="panel-wizard">
                                    <ul class="nav nav-justified nav-wizard nav-disabled-click">
                                        <li><a href="#tab1-4" data-toggle="tab"><i class='fa fa-user fa-fw'></i> Personal Details</a></li>
                                        <li><a href="#tab2-4" data-toggle="tab"><i class='fa fa-cogs fa-fw'></i> User Settings</a></li>
                                        <li><a href="#tab3-4" data-toggle="tab"><i class='fa fa-bars fa-fw'></i> About</a></li>
                                        <li><a href="#tab4-4" data-toggle="tab"><i class='fa fa-gavel fa-fw'></i> Skills</a></li>
                                        <li><a href="#tab5-4" data-toggle="tab"><i class='fa fa-graduation-cap fa-fw'></i> Qualifications</a></li>
                                        <li><a href="#tab6-4" data-toggle="tab"><i class='fa fa-history fa-fw'></i> Experience</a></li>
                                    </ul>
                                    
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                
                                    <div class="tab-content bg-white">
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
                            <input  type="text" class="form-control input-lg email" placeholder='Email' name='email' title='Please enter your email' required/>
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
                               <?php
                                    for($c = 1; $c < 13; $c++)
                                    {
                                        echo "<option value='".$c."'>".$c."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-2">
                          <select class="form-control input-lg" name="gender">
                                <option selected>Year of Birth</option>
                                <?php
                                    for($f = 1970; $f <= 2000; $f++)
                                    {
                                        echo "<option value='".$f."'>".$f."</option>";
                                    }

                              ?>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-6">
                          <select class="form-control input-lg" name="gender">
                                <option selected>Gender</option>
                                <option value='0'>Female</option>
                                <option value='1'>Male</option>
                            </select>
                        </div>
                        
                    </div>
                    </div><!-- tab-pane -->

                    <div class="tab-pane" id="tab2-4">
                        <div class="row">
                            <div class="form-group col-sm-6">
                              <select class="form-control input-lg" name="gender">
                                    <option selected>User Status</option>
                                    <option value='0'>Unactive</option>
                                    <option value='1'>Active</option>
                                </select>
                            </div>

                            <div class="form-group col-sm-6">
                              <select class="form-control input-lg" name="gender">
                                    <option selected>User type</option>
                                    <option value='0'>Student</option>
                                    <option value='1'>Volunteer</option>
                                    <option value='2'>Team Leader</option>
                                    <option value='3'>Staff</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- tab-pane -->
                                        
                    <div class="tab-pane" id="tab3-4">
                        <div class='row'>
                            <div class='form-group col-sm-12'>
                                <textarea class='form-control tiny' name='about'>User's short description -- Please delete this line</textarea>
                            </div>
                        </div>
                    </div><!-- tab-pane -->
                                        
                    <div class="tab-pane" id="tab4-4">
                        <div class='row'>
                            <div class='form-group col-sm-12'>
                                <textarea class='form-control tiny' name='skills'>User's Skills. E.g.: Event Management, Cooking Spicy Food -- Please delete this line</textarea>
                            </div>
                        </div>
                    </div><!-- tab-pane -->
                                        
                    <div class="tab-pane" id="tab5-4">
                        <div class='row'>
                            <div class='form-group col-sm-12'>
                                <textarea class='form-control tiny' name='qualifications'>User's Qualifications. E.g.: HSC -- Please delete this line</textarea>
                            </div>
                        </div>
                    </div><!-- tab-pane -->
                                        
                    <div class="tab-pane" id="tab6-4">
                        <div class='row'>
                            <div class='form-group col-sm-12'>
                                <textarea class='form-control tiny' name='experience'>Any past/current activity. e.g.: 2014: Volunteer at Cancer Council -- Please delete this line</textarea>
                            </div>
                        </div>
                    </div><!-- tab-pane -->
                                        
                                        
                                        
                </div><!-- tab-content -->
                                    
                
<ul class="list-unstyled wizard">
<li class="pull-left previous"><button type="button" class="btn btn-default"><i class='fa fa-arrow-left fa-fw'></i> Back</button></li>
<li class="pull-right next"><button type="button" class="btn btn-primary"><i class='fa fa-arrow-right fa-fw'></i> Next</button></li>
<li class="pull-right finish hide"><button type="submit" class="btn btn-primary"><i class='fa fa-check fa-fw'></i> Finish</button></li>
</ul>
                                    
                                </form><!-- panel-wizard -->
              
                            </div><!-- col-md-6 -->
                        </div><!-- row -->
                        
                        <br /><br />
                            
                        
                    </div><!-- contentpanel -->
                    
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>


<script src="<?php echo $server_root;?>backend/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/jquery-ui-1.10.3.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/bootstrap.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/modernizr.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/pace.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/retina.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/jquery.cookies.js"></script>

<script src="<?php echo $server_root;?>backend/js/bootstrap-wizard.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/jquery.validate.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/select2.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/bootbox.min.js"></script>

<script src="<?php echo $server_root;?>backend/js/custom.js"></script>
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
               /* if(!$('.firstname').val() || !$('.lastname').val() || !$('.email').val())
                {
                    return false;
                }
                */
            }
        });
        
        // Error Message In One Container
        jQuery("#valWizard").validate({
            errorLabelContainer: jQuery("#valWizard div.errorForm")
        });
        
        
        
        jQuery("#phone").mask("99 9999 9999");
        
        tinymce.init({selector:'.tiny'}); 

    });
</script>

</body>
</html>
