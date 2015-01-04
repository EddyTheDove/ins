<div class="leftpanel">
    <div class="media profile-left">
        <a class="pull-left profile-thumb" href="<?php echo $server_root;?>admin/profile/">
            <img class="img-circle" src="<?php echo $server_root.'backend/images/photos/profile.jpg';?>" alt="">
        </a>
        <div class="media-body">
            <h4 class="media-heading">BT</h4>
            <small class="text-muted">System Admin</small>
        </div>
    </div><!-- media -->

    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="<?php echo $server_root.'admin';?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="parent"><a href=""><i class="fa fa-calendar"></i> <span>Events</span></a>
            <ul class="children">
                <li><a href="<?php echo $server_root. 'admin/newevent'?>">Add New Event</a></li>
                <li><a href="<?php echo $server_root. 'admin/events'?>">Upcoming Events</a></li>
                <li><a href=""><span>Past Events</span></a></li>
                <li><a href=""><span>Cancelled Events</span></a></li>
            </ul>
        </li>
        <li class="parent"><a href=""><i class="fa fa-users"></i> <span>Users</span></a>
            <ul class="children">
                <li><a href="<?php echo $server_root;?>admin/users"><span class="pull-right badge">9</span><span>Volunteers</span></a></li>
                <li><a href=""><span>Staff</span></a></li>
                <li><a href="">Students</a></li>
                <li><a href=""><span>Blocked Users</span></a></li>
            </ul>
        </li>
        <li><a href=""><i class="fa fa-money"></i> <span>Tickets</span></a></li>
        <li><a href=""><i class="fa fa-sliders"></i> <span>Pictures Slider</span></a></li>
        <li><a href="<?php echo $server_root;?>admin/feedback"><i class="fa fa-comments"></i> <span>Feedback</span></a></li>
        <li><a href="<?php echo $server_root;?>admin/help"><i class="fa fa-question"></i> <span>Help</span></a></li>

        
    </ul>

</div><!-- leftpanel --> 