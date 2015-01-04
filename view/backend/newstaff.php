<!DOCTYPE html>

<html lang="en">
    <head>
    <title>New Staff</title>


<?php include 'backend/includes/head.php';?>

<script src="<?php echo $server_root;?>backend/js/jquery-1.11.1.min.js"></script>
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
                                    <li>Users</li>
                                    <li><a href='<?php echo $server_root.'admin/staff';?>'>Staff</a></li>
                                </ul>
                                <h4>New Staff</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    
                    
                    
                    
<div class="contentpanel contentpanel-wizard">
    <div class="row blog-content">
        <div class="col-sm-12">
            <div class="panel panel-default panel-blog">
                <div class="panel-body">
                    
                    
            <form role="form" action='' method='POST' id="basicWizard" class="panel-wizard">
                <ul class="nav nav-justified nav-wizard">
                    <li><a href="#tab1" data-toggle="tab"><i class='fa fa-user fa-fw'></i> Personal Details</a></li>
                    <li><a href="#tab2" data-toggle="tab"><i class='fa fa-cogs fa-fw'></i> Staff Settings</a></li>
                    <li><a href="#tab3" data-toggle="tab"><i class='fa fa-bars fa-fw'></i> Description</a></li>
                </ul>

                
            <div class="tab-content">
                <div class="tab-pane" id="tab1">
                    <h2 class='orange-title'><i class='fa fa-user '></i> Personal Details</h2>
                    <div class="row">
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                            <input  type="text" class="form-control" placeholder='First Name' name='firstname'/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                            <input  type="text" class="form-control" placeholder='Lastname Name' name='lastname'/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-smile-o fa-fw"></i></span>
                            <input  type="text" class="form-control" placeholder='Preferred Name' name='nickname'/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-send fa-fw"></i></span>
                            <input  type="text" class="form-control" placeholder='Email' name='email'/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                            <input  type="text" class="form-control" placeholder='Phone Number' name='phone'/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                            <input  type="text" class="form-control" placeholder='Address' name='address'/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group date" id="birthdate" data-date="" data-date-format="dd/mm/yyyy" data-date-viewmode="years" data-date-end-date='-16y'>
                                <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                <input class="form-control" type="text" value="" name='endDate' placeholder='Date of Birth'>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-6">
                          <select class="form-control" name="gender">
                                <option selected>Gender</option>
                                <option value='0'>Female</option>
                                <option value='1'>Male</option>
                            </select>
                        </div>
                        
                    </div>
                </div>
                
                
                <div class="tab-pane" id="tab2">
                    <h2 class='orange-title'><i class='fa fa-gears '></i> Staff Settings</h2>
                
                        <div class="input-group margin-bottom-1x">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            <input class="form-control" type="text" placeholder="Event Name" name='eventname'>
                        </div>
                    
                
<!--Dates-->
                    <div class='row'>
                        <div class='form-group col-sm-6'>
                            <div class="input-group date" id="startDate" data-date="<?php echo date('d/m/Y');?>" data-date-format="dd/mm/yyyy" data-date-viewmode="years" data-date-start-date='d'>
                                <input class="form-control" type="text" placeholder='start Date' name='startDate'>
                                <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group date" id="endDate" data-date="" data-date-format="dd/mm/yyyy" data-date-viewmode="years" data-date-start-date='d'>
                                <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                <input class="form-control" type="text" value="" name='endDate' placeholder='End Date (May be left empty)'>
                            </div>
                        </div>
                    </div>
                
                
<!--Times-->             
                    <div class='row'>
                        <div class='form-group col-sm-6'>
                            <label>Start Time</label>
                            <div class="input-group">
                                <div class="bootstrap-timepicker"><input id="startTime" type="text" class="form-control" placeholder='start time'/></div>
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <label>End Time</label>
                            <div class="input-group">
                                <span class="add-on input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                <div class="bootstrap-timepicker"><input id="endTime" type="text" class="form-control"/></div>
                            </div>
                        </div>
                        
                    </div>
                
                
                
<!--Event Management-->                
                    <div class='row'>
                        <div class="form-group col-sm-6">
                          <select class="select2" name="manager" id='volunteerNeeded'>
                                <option selected>Event Manager</option>
                                <option value='123456'>Team Leader 1</option>
                                <option value='134526'>Team Leader 2</option>
                                <option value='134526'>Team Leader 3</option>
                                <option value='134526'>Team Leader 4</option>
                                <option value='134526'>Team Leader 5</option>
                                <option value='134526'>Team Leader 6</option>
                                <option value='134526'>Team Leader 7</option>
                                <option value='134526'>Team Leader 8</option>
                                <option value='134526'>Team Leader 9</option>
                                <option value='134526'>Team Leader 10</option>
                                <option value='134526'>Team Leader 11</option>
                                <option value='134526'>Eddy</option>
                                <option value='134526'>Corliss</option>
                                <option value='134526'>Nigga</option>
                            </select>
                        </div>
                        
                        
                        <div class='form-group col-sm-6 volunteerNeeded'>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa-fw"></i></span>
                                <input  type="text" class="form-control" placeholder='How many volunteers' name='numberVolunteers'/>
                            </div>
                        </div>
                    </div>
                

                    <div class='row' id='eventPrice'>
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-usd fa-fw"></i></span>
                                <input  type="text" class="form-control" placeholder='Student price 0.00'/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-usd fa-fw"></i></span>
                            <input  type="text" class="form-control" placeholder='Normal price 0.00'/>
                            </div>
                        </div>
                        
                    </div>
                

                    <div class="row">
                        <div class='form-group col-sm-12'>
                            <textarea placeholder="Event Description" name='description' class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                
                </div>
                
                
<!--TAB 3-->                
                <div class="tab-pane" id="tab3">
                    <h2 class='orange-title'><i class='fa fa-image '></i> Event Media</h2>
                    <div class="row">
                        <div class="form-group col-sm-8 margin-bottom-sm">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-primary btn-file">
                                        <a href="<?php echo $server_root;?>assets/filemanager/dialog.php?type=1&field_id=poster" class="iframe-btn">   Browse</a>
                                    </span>
                                </span>
                                <input type="text" class="form-control" placeholder='Event Poster' id='poster' name='poster' readonly>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-4'>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-youtube fa-fw"></i></span>
                                <input type="text" class="form-control" placeholder="Youtube Video ID">
                            </div>
                        </div>
                    </div>
                
                    <div class="row">                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-link fa-fw"></i></span>
                                <input type="text" class="form-control" placeholder="Facebook Album link">
                            </div>
                        </div>
                    </div>
                </div>
<!--/ TAB 3-->
                
            </div><!--/ Tab content-->
                
            <ul class="list-unstyled wizard">
                <li class="pull-left previous"><button type="button" class="btn btn-default">Previous</button></li>
                <li class="pull-right next"><button type="button" class="btn btn-primary">Next</button></li>
                <li class="pull-right finish hide"><button type="submit" class="btn btn-primary"><i class='fa fa-check fa-fw'></i> Finish</button></li>
            </ul>
                
            </form>
                    
                   
                   
                </div><!-- panel-body -->
            </div><!-- panel -->
        </div><!-- col-sm-12-->
        
    </div>
</div><!-- contentpanel -->
                    
                    
                    
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>

<script src="<?php echo $server_root;?>backend/js/bootstrap.js"></script>
<script src="<?php echo $server_root;?>backend/js/custom.js"></script>
<script src="<?php echo $server_root;?>backend/js/bootstrap-datepicker.js"></script>
<script src="<?php echo $server_root;?>backend/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/jquery.tagsinput.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/select2.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/bootstrap-wizard.min.js"></script>

<script type='text/javascript'>
jQuery(document).ready(function ($) {
    $('#birthdate').datepicker();
    
    // Select2
  $(".select2").select2({
    width: '100%'
  });
    
    / Basic Wizard
    $('#basicWizard').bootstrapWizard({
        onTabShow: function(tab, navigation, index) {
            tab.prevAll().addClass('done');
            tab.nextAll().removeClass('done');
            tab.removeClass('done');

            var $total = navigation.find('li').length;
            var $current = index + 1;

            if($current >= $total) {
                $('#basicWizard').find('.wizard .next').addClass('hide');
                $('#basicWizard').find('.wizard .finish').removeClass('hide');
            } else {
                $('#basicWizard').find('.wizard .next').removeClass('hide');
                $('#basicWizard').find('.wizard .finish').addClass('hide');
            }
        }
    });
    
});
</script>
    </body>
</html>
