<?php
include 'controller/backend/config.php';

if(!isset($admin))
{
    header('location: /admin');
}
else
{
    include 'view/backend/feedback.php';
}

?>
