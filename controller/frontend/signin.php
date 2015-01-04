<?php
include 'controller/frontend/config.php';


if($type == 'volunteer'){
    include 'view/frontend/signup.php';
}
else{
    include 'view/frontend/signup_student.php';
}
?>
