<?php
session_start();
date_default_timezone_set('Australia/Sydney');

//FOR LOCAL DEVELOPMENT
$server_root = '/insearch/';



//SIGN OUT
if(isset($_GET['signout']))
{
    session_unset();
    session_destroy();
    header('location: '.$server_root.'admin');
    exit();
}

//In case there is already a session, keep using it.
if(isset($_SESSION['admin']))
{
    $admin = $_SESSION['admin'];
    
}

//IN CASE THE USER WANTS TO LOGIN
if(isset($_POST['username']) && isset($_POST['password']))
{
    if($_POST['username'] == 'admin')
    {
        if($_POST['password'] == 'admin')
        {
            $admin = $_COOKIE['PHPSESSID'];
        }else{
            unset($admin);
            $error = 'Check your password';   
        }
    }
    else
    {
        $error = 'Check your username';
    }
}

//CONNECTION ALREADY EXISTS
if(isset($admin))
{
    $_SESSION['admin'] = $admin;
    
}

//INCLUDE ALL THE FUCTIONS
include 'controller/functions.php';
?>
