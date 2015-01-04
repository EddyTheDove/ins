<?php
include 'controller/frontend/config.php';

$url = 'https://studentactivities.com.au/ticket/check/'.$ticketid;
$qrManager = new QRGenerator($url);
$qr = $qrManager->generate();

include 'view/frontend/ticket.php';


?>
