<?php
    
    /*
        \d+ = One or more digits (0-9)
        \w+ = One or more word characters (a-z 0-9 _)
        [a-z0-9_-]+ = One or more word characters (a-z 0-9 _) and the dash (-)
        .* = Any character (including /), zero or more
        [^/]+ = Any character but /, one or more
    */


	// In case one is using PHP 5.4's built-in server
	$filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
	if (php_sapi_name() === 'cli-server' && is_file($filename)) {
	    return false;
	}

	// Include the Router class
	// @note: it's recommended to just use the composer autoloader when working with other packages too
	require_once 'Router.php';

	// Create a Router
	$router = new Router();

	// Custom 404 Handler
	$router->set404(function() {
		header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
		echo '404, page not found!';
	});

	// Before Router Middleware
	$router->before('GET', '/.*', function() {
		header('X-Powered-By: bramus/router');
	});






/*********************************************************************
*********************************FRONTEND*****************************
*********************************************************************/
$router->get('/', function(){include 'controller/frontend/home.php';});
$router->post('/', function(){include 'controller/frontend/home.php';});
$router->get('/signup/(\w+)', function($type){include 'controller/frontend/signin.php';});
$router->post('/signup/(\w+)', function($type){include 'controller/frontend/signin.php';});
$router->get('/events/(\w+)', function($type){include 'controller/frontend/events.php';});
$router->post('/events/(\w+)', function($type){include 'controller/frontend/events.php';});

$router->get('/event(/\d+(/[a-z0-9_-]+)?)?', function($id, $url){include 'controller/frontend/event.php';});
$router->get('/event/register/(\d+)', function($eventid){include 'controller/frontend/attend.php';});
$router->get('/event/register/checkout', function(){include 'controller/frontend/checkout.php';});
$router->post('/event/register/checkout', function(){include 'controller/frontend/checkout.php';});
$router->get('/event/register/thankyou', function(){include 'controller/frontend/thankyou.php';});

$router->get('/profile', function(){include 'controller/frontend/profile.php';});
$router->get('/ticket/(\d+)', function($ticketid){include 'controller/frontend/ticket.php';});
$router->get('/ticket/check/(\d+)', function($ticketid){include 'controller/frontend/check.php';});
$router->get('/pdf/(\d+)', function($ticketid){include 'controller/frontend/pdf.php';});









/*********************************************************************
*********************************BACKEND*****************************
*********************************************************************/
$router->get('/logout', function() {include 'controller/backend/home.php';});
$router->get('/admin', function() {include 'controller/backend/home.php';});
$router->post('/admin', function() {include 'controller/backend/home.php';});

$router->get('/admin/events', function() {include 'controller/backend/events.php';});
$router->get('/admin/events/([a-z0-9_-]+)', function() {include 'controller/backend/event.php';});
$router->get('/admin/newevent', function() {include 'controller/backend/newevent.php';});
$router->post('/admin/newevent', function() {include 'controller/backend/newevent.php';});

$router->get('/admin/users', function() {include 'controller/backend/users.php';});
$router->get('/admin/profile', function() {include 'controller/backend/profile.php';});
$router->get('/admin/newstaff', function() {include 'controller/backend/newstaff.php';});
$router->post('/admin/newstaff', function() {include 'controller/backend/newstaff.php';});

$router->get('/admin/feedback', function() {include 'controller/backend/feedback.php';});
$router->get('/admin/feedback/(\d+)', function($id) {include 'controller/backend/feedback.php';});

$router->get('/admin/help', function() {include 'controller/backend/help.php';});
$router->post('/admin/help', function() {include 'controller/backend/help.php';});

$router->get('/admin/ticketview/(\d+)', function($ticketid) {include 'controller/backend/ticketview.php';});













	// Dynamic route: /hello/name
	$router->get('/hello/(\w+)', function($name) {
		echo 'Hello ' . htmlentities($name);
	});

	// Dynamic route: /ohai/name/in/parts
	$router->get('/ohai/(.*)', function($url) {
		echo 'Ohai ' . htmlentities($url);
	});

	// Dynamic route with (successive) optional subpatterns: /blog(/year(/month(/day(/slug))))
	$router->get('/blog(/\d{4}(/\d{2}(/\d{2}(/[a-z0-9_-]+)?)?)?)?', function($year = null, $month = null, $day = null, $slug = null) {
		if (!$year) { echo 'Blog overview'; return; }
		if (!$month) { echo 'Blog year overview (' . $year . ')'; return; }
		if (!$day) { echo 'Blog month overview (' . $year . '-' . $month . ')'; return; }
		if (!$slug) { echo 'Blog day overview (' . $year . '-' . $month . '-' . $day . ')'; return; }
		echo 'Blogpost ' . htmlentities($slug) . ' detail (' . $year . '-' . $month . '-' . $day . ')';
	});

	// Subrouting
	$router->mount('/movies', function() use ($router) {

		// will result in '/movies'
		$router->get('/', function() {
			echo 'movies overview';
		});

		// will result in '/movies'
		$router->post('/', function() {
			echo 'add movie';
		});

		// will result in '/movies/id'
		$router->get('/(\d+)', function($id) {
			echo 'movie id ' . htmlentities($id);
		});

		// will result in '/movies/id'
		$router->put('/(\d+)', function($id) {
			echo 'Update movie id ' . htmlentities($id);
		});

	});

	// Thunderbirds are go!
	$router->run();

// EOF
