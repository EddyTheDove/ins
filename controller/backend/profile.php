<?php
include 'controller/backend/config.php';

if(!isset($admin))
{
    include 'view/backend/signin.php';
}
else
{
    include 'view/backend/profile.php';
}

?>
