<?php
date_default_timezone_set('Australia/Sydney');

//FOR LOCAL DEVELOPMENT
$server_root = '/insearch';
//LIVE WEBSITE
//$server_root = '/';

function loadClass($classname)
{
    require 'model/'.$classname. '.php';
}
spl_autoload_register('loadClass');
session_start();




//SIGN OUT
if(isset($_GET['signout']))
{
    session_unset();
    session_destroy();
    header('location: '.$server_root);
    exit();
}

//In case there is already a session, keep using it.
if(isset($_SESSION['perso']))
{
    $perso = $_SESSION['perso'];
    
}

//IN CASE THE USER WANTS TO LOGIN
if(isset($_POST['username']) && isset($_POST['password']))
{
    if($_POST['username'] == 'user')
    {
        if($_POST['password'] == 'user')
        {
            $perso = $_COOKIE['PHPSESSID'];
        }else{
            unset($perso);
            $error = 'Check your password';   
        }
    }
    else
    {
        $error = 'Check your username';
    }
}

//CONNECTION ALREADY EXISTS
if(isset($perso))
{
    $_SESSION['perso'] = $perso;
    
}

//INCLUDE ALL THE FUCTIONS
include 'controller/functions.php';
?>
