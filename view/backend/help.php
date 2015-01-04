<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Help</title>


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
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href="<?php echo $server_root.'admin';?>"><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li>Help</li>
                                    <li>FAQ</li>
                                </ul>
                                <h4>Frequently Asked Questions</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    
                    
                    
                    
<div class="contentpanel">
    <div class="row blog-content">
        <div class="col-sm-12">
            <div class="panel panel-default panel-blog">
                <div class="panel-body">
                    
                    
            <form role="form" action='' method='POST'>
                    
                <h2 class='orange-title'><i class='fa fa-gears '></i> New Question</h2>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <select class="form-control" name="status">
                                <option selected>Select the status</option>
                                <option value='0'>Published</option>
                                <option value='1'>Unpublished</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-6">
                            <select class="form-control" name="status">
                                <option selected>Select the category</option>
                                <option value='0'>Category 1</option>
                                <option value='1'>Category 2</option>
                            </select>
                        </div>
                    </div>
                
                <div class="input-group margin-bottom-1x">
                    <span class="input-group-addon"><i class="fa fa-question fa-fw"></i></span>
                    <input class="form-control" type="text" placeholder="Question" name='question' required>
                </div>
                
                
<hr>
                
                
                    <h2 class='orange-title'><i class='fa fa-navicon '></i> Answer</h2>
                
                    <div class="row">
                        <div class='form-group col-sm-12'>
                            <textarea placeholder="Answer" name='description' class="form-control tiny" rows="4"></textarea>
                        </div>
                    </div>
                
                
<hr>
                
                <button type='submit' class='btn btn-primary pull-right' name='addEvent'><i class='fa fa-floppy-o fa-fw'></i> Add new answer</button>
            </form>
                
                    <div class='clear'></div>
                    <h2 class='orange-title'><i class='fa fa-folder-open '></i> Categories</h2>
                    
                    <form class="form-inline" role="form" method='POST' action=''>
                        <div class="input-group mb15 col-sm-6">
                            <input type="text" class="form-control" placeholder='New Category'/>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-primary"><i class='fa fa-check fa-fw'></i>Add Category</button>
                            </span>
                        </div><!--input-group -->
                    </form>
                    
                    
                    <?php //ALL THE QUESTIONS?>
                    <div class='clear'></div>
                    <h2 class='orange-title'><i class='fa fa-question '></i> All the questions</h2>
                    
                   <div class="col-md-6">
                      <ul class='list-unstyled'>
                        <li><a href=''>How can I do Question 1</a></li>
                        <li><a href=''>How can I do Question 2</a></li>
                        <li><a href=''>How can I do Question 3</a></li>
                        <li><a href=''>How can I do Question 4</a></li>
                        <li><a href=''>How can I do Question 5</a></li>
                        <li><a href=''>How can I do Question 6</a></li>
                      </ul>
                    </div>

                    
                    
                    
                    
                    
                    
                </div><!-- panel-body -->
            </div><!-- panel -->
        </div><!-- col-sm-12-->
        
    </div>
</div><!-- contentpanel -->
                    
                    
                    
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>
<script src="<?php echo $server_root;?>backend/js/jquery-1.11.1.min.js"></script>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/bootstrap.js"></script>
<script src="<?php echo $server_root;?>backend/js/custom.js"></script>
<script src="<?php echo $server_root;?>backend/js/bootstrap-datepicker.js"></script>
<script src="<?php echo $server_root;?>backend/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/jquery.tagsinput.min.js"></script>
<script src="<?php echo $server_root;?>backend/js/select2.min.js"></script>

<script type='text/javascript'>
jQuery(document).ready(function ($) {
    tinymce.init({selector:'.tiny'});
});
</script>
    </body>
</html>
