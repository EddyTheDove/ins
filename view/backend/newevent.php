<!DOCTYPE html>
<html lang="en">
    <head>
    <title>New event</title>


<?php include 'backend/includes/head.php';?>

<script src="<?php echo $server_root;?>backend/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo $server_root;?>assets/fancybox/jquery.fancybox.js"></script>


<script type='text/javascript'>
jQuery(document).ready(function () {
      $('.iframe-btn').fancybox({
	  'width'	: 880,
	  'height'	: 650,
	  'type'	: 'iframe',
	  'autoScale'   : true
      });
      
      $('#poster').on('change',function(){
	      alert('change triggered');
      });
      
      $('#download-button').on('click', function() {
	    ga('send', 'event', 'button', 'click', 'download-buttons');      
      });
});
</script> 

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
                                <h4>New Event</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    
                    
                    
                    
<div class="contentpanel">
    <div class="row blog-content">
        <div class="col-sm-12">
            <div class="panel panel-default panel-blog">
                <div class="panel-body">
                    
                    
            <form role="form" action='' method='POST'>
                    
                <h2 class='orange-title'><i class='fa fa-gears '></i> Event Settings</h2>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <select class="form-control" name="status">
                                <option selected>Select the status</option>
                                <option value='0'>Event is On</option>
                                <option value='1'>Event Canceled</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-6">
                          <select class="form-control" name="audience">
                                <option selected>Select the audience</option>
                                <option value='0'>Public event</option>
                                <option value='1'>Volunteers only event</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-6">
                          <select class="form-control" name="ageRestriction">
                                <option selected>Select age restriction</option>
                                <option value='0'>No age restriction</option>
                                <option value='18'>18 +</option>
                                <option value='21'>21 +</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-6">
                          <select class="form-control" name="ageRestriction">
                                <option selected>Select registrations status</option>
                                <option value='0'>Registrations are not opened yet</option>
                                <option value='1'>Registrations are opened now</option>
                                <option value='2'>Registrations are closed</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-6">
                          <select class="form-control" name="paidevent" id='eventPaid'>
                                <option selected>Free or Paid Event?</option>
                                <option value='0'>Free Event (Opened registration)</option>
                                <option value='1'>Paid Event</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-6">
                          <select class="form-control" name="volunteers" id='volunteerNeeded'>
                                <option selected>Are volunteers Needed?</option>
                                <option value='1'>Yes, Volunteers Needed</option>
                                <option value='0'>No Volunteer needed</option>
                            </select>
                        </div>
                        
                    </div>
                
                
<hr>
                
                
                    <h2 class='orange-title'><i class='fa fa-navicon '></i> Event Details</h2>
                
                        <div class="input-group margin-bottom-1x">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            <input class="form-control" type="text" placeholder="Event Name" name='eventname' required>
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
                            <div class="input-group">
                                <div class="bootstrap-timepicker"><input id="startTime" type="text" class="form-control" placeholder='start time'/></div>
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i> Start Time</span>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                                <span class="add-on input-group-addon"><i class="glyphicon glyphicon-time"></i> End Time</span>
                                <div class="bootstrap-timepicker"><input id="endTime" type="text" class="form-control"/></div>
                            </div>
                        </div>
                        
                    </div>
                
                
                    
<!--Places-->                
                     <div class="row">                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Event Location">
                                <span class="input-group-addon"><i class="fa fa-location-arrow fa-fw"></i></span>
                            </div>
                        </div>
                         
                         <div class='form-group col-sm-6'>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                <input type="text" class="form-control" placeholder="Meeting Point" name='meetingPoint'>
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
                
                
                
<!--Event Price-->
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
                
                
                
                    
                    
                
<!--Event Description-->
                    <div class="row">
                        <div class='form-group col-sm-12'>
                            <textarea placeholder="Event Description" name='description' class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                
                
<hr>
                
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
                
                    
                
                <button type='submit' class='btn btn-primary pull-right' name='addEvent'><i class='fa fa-floppy-o fa-fw'></i> Save</button>
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

<script type='text/javascript'>
jQuery(document).ready(function ($) {
    $('#startDate').datepicker();
    $('#endDate').datepicker();
    $('#startTime').timepicker({defaultTIme: false});
    $('#endTime').timepicker({defaultTIme: false});
    $('#tags').tagsInput({width:'auto'});
    
    
    //Show/Hide prices whether the event is paid or free
    $(function() {
        $('#eventPrice').hide();
        $('#eventPaid').change(function(){
            if($('#eventPaid').val() == '1') {
                $('#eventPrice').fadeIn("slow"); 
            } else {
                $('#eventPrice').fadeOut('slow'); 
            } 
        });
    });
    
    //Show/Hide Volunteers number
    $(function() {
        $('.volunteerNeeded').hide();
        $('#volunteerNeeded').change(function(){
            if($('#volunteerNeeded').val() == '1') {
                $('.volunteerNeeded').fadeIn("slow"); 
            } else {
                $('.volunteerNeeded').fadeOut('slow'); 
            } 
        });
    });
    
    // Select2
  $(".select2").select2({
    width: '100%'
  });
    
});
</script>
    </body>
</html>
