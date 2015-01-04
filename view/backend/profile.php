<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Profile</title>
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
                                    <li>Profile</li>
                                </ul>
                                <h4>Bounthanh Chanhdara</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        
                        <div class="row">
                            <div class="col-md-4">
                                

                                <div class="profile-description">
                                    <div class="btn-group btn-block btn-group-justified">
                                        <a href="tel:0422942032" class="btn btn-white btn-md"><i class="fa fa-phone"></i> Call</a>
                                        <a href="sms:0422942032" class="btn btn-white btn-md"><i class="fa fa-envelope"></i> Text</a>
                                
                                        <a href='mailto:user@provider.com' class="btn btn-white btn-md"><i class='fa fa-send fa-fw'></i> Email</a>
                                        
                                    </div><!-- btn-group -->
                                    <div class='clear'></div>
                                    
                                    <img src="<?php echo $server_root;?>backend/images/photos/profile-big.jpg" class="img-circle img-offline img-responsive img-profile" alt="" />
                                    <h4 class="profile-name mb5">Bounthanh Chanhdara</h4>
                                    <div><i class="fa fa-briefcase fa-fw"></i> Student Activities and Events Coordinator</div>
                                    <?php if(isset($_GET['userid'])){echo $_GET['userid'];}?>
                                </div><!-- text-center -->
                               
                                <ul class="social-list">
                                    <a href=""><li><i class="fa fa-linkedin"></i></li></a>
                                    <a href=""><li><i class="fa fa-facebook"></i></li></a>
                                    <a href=""><li><i class="fa fa-instagram"></i></li></a>
                                </ul>
                            
                            <div class='clear'></div>
                            </div><!-- col-sm-4 col-md-3 -->
                                
                                
                                
                                
                                
                                
                                
                                
                                
<?php
//TABS
?>                                 
                                
                                
                            
                            <div class="col-md-8 bg-white">
                              
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-line">
                                    <li class='active'><a href="#personal" data-toggle="tab"><strong>About</strong></a></li>
                                    <li><a href="#events" data-toggle="tab"><strong>Scheduled</strong></a></li>
                                    <li><a href="#pastevents" data-toggle="tab"><strong>History</strong></a></li>
                                    <li><a href="#tickets" data-toggle="tab"><strong>Tickets</strong></a></li>
                                </ul>
                            
                                <!-- Tab panes -->
                                <div class="tab-content nopadding noborder">
                                    <div class="tab-pane active" id="personal">
                                        <div class="activity-list">  
                                        <ul class='personal-info'>
                                            <li class='fw-bold'><i class="fa fa-user fa-fw"></i> <strong>BT</strong></li>
                                            <li><i class="fa fa-key fa-fw"></i> 265789</li>
                                            <li><i class="fa fa-building fa-fw"></i> Diploma of Information Technology</li>
                                            <li><i class="fa fa-phone fa-fw"></i> 04 5566 9988</li>
                                            <li><i class="fa fa-send fa-fw"></i> bounthanh@insearch.edu.au</li>
                                            <li><i class="fa fa-map-marker fa-fw"></i> 64 Thomas Street, Ultimo 2009 NSW</li>
                                            <li><i class="fa fa-clock-o fa-fw"></i> Started: 11th February 2015</li>
                                        </ul>
                                         
                                        <br>
                                        <h2 class='orange-title'><i class='fa fa-info '></i> About</h2>
                                <p class="personal-info">Iuvaret legendos id usu. Postea prompta inciderint sea at, sea no melius maluisset dissentias. Vis ut dicam oporteat, clita tation consectetuer mei eu, sumo wisi legendos ex vis. Ea assum essent mediocritatem sed. Propriae atomorum quo te.</p>
                                <p class="personal-info">
Lorem aeque vis ei. Cum in viris utroque mediocritatem, quo ea tempor urbanitas democritum, cum vitae dissentias at. Impetus indoctum et ius, case rationibus eu pri. Te tale vide natum eos, sea an error scripta denique. Id fabulas recusabo pertinacia vim, at oportere intellegat suscipiantur sed, ex est senserit complectitur.</p>
                              
                                          
                                        <h2 class='orange-title'><i class='fa fa-gears '></i> Skills</h2>
                                <p class="personal-info">- Lorem aeque vis ei.<br>
                                - Cum in viris utroque mediocritatem, quo ea tempor urbanitas democritum, cum vitae dissentias at.<br>
                                - Impetus indoctum et ius, case rationibus eu pri.<br> 
                                - Te tale vide natum eos, sea an error scripta denique.<br> 
                                - Id fabulas recusabo pertinacia vim, at oportere intellegat suscipiantur sed, ex est senserit complectitur.</p>        
                                        
                                        <h2 class='orange-title'><i class='fa fa-mortar-board '></i> Qualifications</h2>
                                    
                                <p class="personal-info">- Lorem aeque vis ei.<br>
                                - Cum in viris utroque mediocritatem, quo ea tempor urbanitas democritum, cum vitae dissentias at.<br>
                                - Impetus indoctum et ius, case rationibus eu pri.<br> 
                                - Te tale vide natum eos, sea an error scripta denique.<br>
                                - Id fabulas recusabo pertinacia vim, at oportere intellegat suscipiantur sed, ex est senserit complectitur.</p>        
                                         
                                        <h2 class='orange-title'><i class='fa fa-history '></i> Experience</h2>
                                <p class="personal-info">- Aug 2014 to Now: Lorem aeque vis ei.<br>
                                - Feb - Jul 2014: Cum in viris utroque mediocritatem, quo ea tempor urbanitas democritum, cum vitae dissentias at.<br>
                                - 2013: Impetus indoctum et ius, case rationibus eu pri.<br> 
                                - 2011 - 2013: Te tale vide natum eos, sea an error scripta denique.<br>
                                </p>         
                                        
                                        <div class='mt20'></div>
                                            <br>
                                        <div class='mt20'></div>
                                        </div><!-- activity-list -->
                                    </div><!-- tab-pane -->
                                    
                                    
                                
                                    
                                    
<?php
//SCHEDULED EVENTS
?>                                   
                                    
                <div class="tab-pane" id="events">
                    <div class="events">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="media">
                                    <div class="media-body">
                                        <h2 class='orange-title'><i class='fa fa-calendar-o '></i> Insearch Masquerade Ball</h2>
                                        <ul class='personal-info'>
                                            <li><span class='black'><i class="fa fa-gavel fa-fw"></i> Duty:</span> Ticket Controller</li>
                                            <li><span class='black'><i class="fa fa-map-marker fa-fw"></i> Location:</span> Darling Harbour Bridge, Wharf 5</li>
                                            <li><span class='black'><i class="fa fa-location-arrow fa-fw"></i> Meeting Point:</span> Blue Building - Ground Level</li>
                                            <li><span class='black'><i class="fa fa-calendar fa-fw"></i> Date:</span> Sunday, January 15, 2014 at 11:00 AM</li>
                                        </ul>
                                    </div>
                                </div><!-- media -->
                            </div><!-- col-sm-12-->
                            
                            <div class="col-sm-12">
                                <div class="media">
                                    <div class="media-body">
                                        <h2 class='orange-title'><i class='fa fa-calendar-o '></i> Insearch Masquerade Ball</h2>
                                        <ul class='personal-info'>
                                            <li><span class='black'><i class="fa fa-gavel fa-fw"></i> Duty:</span> Ticket Controller</li>
                                            <li><span class='black'><i class="fa fa-map-marker fa-fw"></i> Location:</span> Darling Harbour Bridge, Wharf 5</li>
                                            <li><span class='black'><i class="fa fa-location-arrow fa-fw"></i> Meeting Point:</span> Blue Building - Ground Level</li>
                                            <li><span class='black'><i class="fa fa-calendar fa-fw"></i> Date:</span> Sunday, January 15, 2014 at 11:00 AM</li>
                                        </ul>
                                    </div>
                                </div><!-- media -->
                            </div><!-- col-sm-12-->
                        </div><!-- row -->
                    </div><!-- events -->
                </div><!-- tab-pane -->


                                    
                                    
                                    
                                    
<?php
//PAST EVENTS
?>                                    
                                    
                <div class="tab-pane" id="pastevents">
                    <div class="events">
                        <p class='fw-200 fs20'>13 Events | 65h11min</p>
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="media">
                                    <div class="media-body">
                                        <h2 class='orange-title'><i class='fa fa-calendar-o '></i> English Orientation Term 3</h2>
                                        <ul class='personal-info'>
                                            <li><span class='black'><i class="fa fa-gavel fa-fw"></i> Duty:</span> Traffic Controller</li>
                                            <li><span class='black'><i class="fa fa-map-marker fa-fw"></i> Location:</span> Insearch Blue Building</li>
                                            <li><span class='black'><i class="fa fa-location-arrow fa-fw"></i> Meeting Point:</span> Student Lounge ground level BB</li>
                                            <li><span class='black'><i class="fa fa-calendar fa-fw"></i> Date:</span> Monday, 23 March 2014, 8:30 AM</li>
                                        </ul>
                                    </div>
                                </div><!-- media -->
                            </div><!-- col-sm-12-->
                            
                            <div class="col-sm-12">
                                <div class="media">
                                    <div class="media-body">
                                        <h2 class='orange-title'><i class='fa fa-calendar-o '></i> English Orientation Term 3</h2>
                                        <ul class='personal-info'>
                                            <li><span class='black'><i class="fa fa-gavel fa-fw"></i> Duty:</span> Traffic Controller</li>
                                            <li><span class='black'><i class="fa fa-map-marker fa-fw"></i> Location:</span> Insearch Blue Building</li>
                                            <li><span class='black'><i class="fa fa-location-arrow fa-fw"></i> Meeting Point:</span> Student Lounge ground level BB</li>
                                            <li><span class='black'><i class="fa fa-calendar fa-fw"></i> Date:</span> Monday, 23 March 2014, 8:30 AM</li>
                                        </ul>
                                    </div>
                                </div><!-- media -->
                            </div><!-- col-sm-12-->
                            
                            <div class="col-sm-12">
                                <div class="media">
                                    <div class="media-body">
                                        <h2 class='orange-title'><i class='fa fa-calendar-o '></i> English Orientation Term 3</h2>
                                        <ul class='personal-info'>
                                            <li><span class='black'><i class="fa fa-gavel fa-fw"></i> Duty:</span> Traffic Controller</li>
                                            <li><span class='black'><i class="fa fa-map-marker fa-fw"></i> Location:</span> Insearch Blue Building</li>
                                            <li><span class='black'><i class="fa fa-location-arrow fa-fw"></i> Meeting Point:</span> Student Lounge ground level BB</li>
                                            <li><span class='black'><i class="fa fa-calendar fa-fw"></i> Date:</span> Monday, 23 March 2014, 8:30 AM</li>
                                        </ul>
                                    </div>
                                </div><!-- media -->
                            </div><!-- col-sm-12-->
                        </div><!-- row -->
                </div>    
            </div><!-- tab-content -->
                                    
                                    
                                    
                                    
                                    
<?php
//TICKETS
?>                                    
                                    
                <div class="tab-pane" id="tickets">
                    <div class="events">
                        <p class='fw-200 fs20'>21 Tickets</p>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-group fs14 fw-200">
                                  <li class="list-group-item">23/12/2014 - 12h37 | <a href='<?php echo $server_root;?>admin/ticketview/1024231214107' target='blank'>1024231214107 Masquerade Ball</a> | <span class='black'>Bounthanh Chanhdara</span></li>
                                  <li class="list-group-item">23/12/2014 - 12h32 | <a href=''>1024231214123 Masquerade Ball</a> | <span class='black'>Yilin Yao</span></li>
                                  <li class="list-group-item">23/12/2014 - 12h24 | <a href=''>1024231214147 Masquerade Ball</a> | <span class='black'>Lil Wayne</span></li>
                                </ul>
                            </div><!-- col-sm-12-->
                        </div><!-- row -->
                </div>    
            </div><!-- tab-content -->
                              
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                            </div><!-- col-sm-8-->
                        </div><!-- row -->  
                    
                    </div><!-- contentpanel -->
                    
                </div>
            </div><!-- mainwrapper -->
        </section>

<?php include 'backend/includes/footer.php'?>
        <script>
            jQuery(document).ready(function(){
              
              jQuery("a[data-rel^='prettyPhoto']").prettyPhoto();
              
            });
        </script>

    </body>
</html>
