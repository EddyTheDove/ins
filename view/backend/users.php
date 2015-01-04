<!DOCTYPE html>
<html lang="en">
    <head>
<title>Users</title>
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
                                    <li>Users</li>
                                    <li>Volunteers</li>
                                </ul>
                                <h4>All Volunteers</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                
                        <a href="<?php echo $server_root.'admin/newstaff';?>"><button class='btn btn-white col-xs-12 col-sm-4 btn-lg'><i class='fa fa-plus fa-fw'></i>Add New User</button></a>
                    <div class='mb20 clear'></div>    
                    
                        
                        <div class="row">
                            <div class="col-sm-12">
                                
                                <div class="well mt10">
                                    <div class="row">
                                        <div class="col-sm-7 margin-bottom-1x">
                                            <input type="text" placeholder="Enter keywords" class="form-control">
                                        </div>
                                        <div class="col-sm-3 margin-bottom-1x">
                                            <select id="search-type" class="width100p height40" data-placeholder="Search Type" name='searchCriteria'>
                                                <option value="Name" selected>Name</option>
                                                <option value="id">User ID</option>
                                                <option value="email">Email</option>
                                                <option value="Country">Country</option>
                                                <option value="Language">Language</option>
                                                <option value="Course">Course</option>
                                                <option value="Interest">Interest</option>
                                                <option value="Skills">Skills</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2 margin-bottom-1x">
                                            <button type='submit' name='searchUser' class='btn btn-block btn-primary'><i class='fa fa-search'></i> Search</button>
                                        </div>
                                    </div>
                                </div><!-- well -->
                                
                               
                            <h3 class="xlg-title">All Volunteers</h3>
                                
                            <div class='row'>
                                <div class="list-group contact-group">
                                
                            <?php $volunteer = "     
                            <div class='col-sm-6'>
                                    <div class='list-group-item'>
                                        <div class='media'>
                                            <div class='pull-left'>
                                                <a href='/insearch/admin/profile'><img class='img-circle img-offline' src='/insearch/backend/images/photos/profile.jpg'></a>
                                            </div>
                                            <div class='media-body'>
                                                <h4 class='media-heading'><a href='/insearch/admin/profile'>Volunteer's name</a></h4>
                                                <div class='media-content'>
                                                    <ul class='list-unstyled'>
                                                        <li><i class='fa fa-gavel fa-fw'></i> Team Leader | Volunteer</li>
                                                        <li><a href='tel:555-555-5555'><i class='fa fa-phone fa-fw'></i> 04 2233 4455</a></li>
                                                        <li><a href='mailto:user@provider.com'><i class='fa fa-send fa-fw'></i> volunteer@provider.com</a></li>
                                                    </ul> 
                                                </div>
                                            </div>
                                        </div><!-- media -->
                                    </div><!-- list-group -->
                                </div><!-- list-group -->
                                
                        ";

                            $vols =  1;
                            while($vols <= 12)
                            {
                                echo $volunteer;
                                $vols ++;
                            }
                            ?>
                            
                                
                              </div><!-- list-group -->
                            </div>   
                                
                            </div><!-- col-sm-9 -->
                        </div><!-- row -->  
                    
                    </div><!-- contentpanel -->
                    
                </div>
            </div><!-- mainwrapper -->
        </section>


<script src="<?php echo $server_root;?>backend/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/bootstrap.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/modernizr.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/pace.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/retina.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/jquery.cookies.js"></script>

<script src="<?php echo $server_root;?>backend/js/select2.min.js"></script>

<script src="<?php echo $server_root;?>backend/js/custom.js"></script>
<script>
    jQuery(document).ready(function(){

        // Select2
        jQuery('#search-type').select2({
            minimumResultsForSearch: -1
        });

    });
</script>

    </body>
</html>
