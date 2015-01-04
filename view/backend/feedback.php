<!DOCTYPE html>
<html lang="en">
    <head>
<title>Feedback</title>
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
                            <li>Feedback</li>
                            <li>All Feedback</li>
                        </ul>
                        <h4>All Feedback</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->

            <div class="contentpanel">

                <div class="row">
                    <div class="col-sm-12">
<?php
if(isset($id))
{
    echo 'Edit the feedback in here';
}
else
{
?>
                    <div class='row'>
                        <div class="list-group contact-group">

                    <?php $volunteer = "     
                    <div class='col-sm-6'>
                            <div class='list-group-item'>
                                <div class='media'>
                                    <div class='media-body'>
                                        <h4 class='media-heading'><a href='/insearch/admin/profile'>Feedback Author's name</a></h4>
                                        <div class='media-content'>
                                            <ul class='list-unstyled'>
                                                <li><i class='fa fa-clock-o fa-fw'></i> 17 February 2015 @ 16:33</li>
                                                <a href=''><li><i class='fa fa-calendar-o fa-fw'></i> Insearch Mascarade Ball</li></a>
                                            </ul> 
                                            <p class='light-paragraph'>
                                            Iuvaret legendos id usu. Postea prompta inciderint sea at, sea no melius maluisset dissentias. Vis ut dicam oporteat, clita tation consectetuer mei eu, sumo wisi legendos ex vis. Ea assum essent mediocritatem sed. Propriae atomorum quo te.
                                            </p>
                                        </div>

                                        <hr>
                                        <div class='media-footer'>
                                            <a href='' class='btn btn-danger pull-left' data-toggle='tooltip' data-original-title='Delete'><i class='fa fa-trash fa-fw'></i> </a>
                                            <div class='pull-right'>
                                                <a href='".$server_root."admin/feedback/3255' class='btn btn-dark' data-toggle='tooltip' data-original-title='Edit'><i class='fa fa-pencil fa-fw'></i> </a>
                                                <a href='' class='btn btn-dark' data-toggle='tooltip' data-original-title='Approve'><i class='fa fa-check fa-fw'></i> </a>
                                            </div>
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
<?php
}                                               
?>
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

        $('[data-toggle="tooltip"]').tooltip();   

    });
</script>

    </body>
</html>
