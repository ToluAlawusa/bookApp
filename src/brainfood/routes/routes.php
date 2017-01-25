<?php


// route resposible for showing the homepage
$router->map( 'GET', '/userhomepage', 'Brainfood\\controllers\\userhomepage@showHomePage', 'showHomePage');

// routes rendering and doing login on login page
$router->map( 'GET', '/userlogin', 'Brainfood\\controllers\\UserLogin@showUserLogin', 'showUserLogin');
$router->map( 'POST', '/userlogin', 'Brainfood\\controllers\\UserLogin@doUserLogin', 'doUserLogin');

// routes responsible for showing registration page and doing the user's registration
$router->map( 'GET', '/userregistration', 'Brainfood\\controllers\\UserRegistration@showUserRegister', 'showUserRegister');
$router->map( 'POST', '/userregistration', 'Brainfood\\controllers\\UserRegistration@doUserRegister', 'doUserRegister');

// routes resposible for showing the catalogue and showing the catalogue by categories
$router->map( 'GET', '/usercatalogue', 'Brainfood\\controllers\\UserCatalogue@showUserCatalogue', 'showUserCatalogue');
$router->map( 'GET', '/usercatalogue/[i:id]/', 'Brainfood\\controllers\\UserCatalogue@showCategories', 'showCategories');

// routes responsible for showing book preview and adding comments to book displayed
$router->map( 'GET', '/userbookpreview/[i:id]/', 'Brainfood\\controllers\\UserBookPreview@showBookPreview', 'showBookPreview');
$router->map( 'POST', '/userbookpreview/[i:id]/', 'Brainfood\\controllers\\UserBookPreview@doAddComments', 'doAddComments');

// routes responsible for showing cart, updating cart, adding to cart and deleting from cart
if(isset($_SESSION['user_id'])) {

	$router->map( 'GET', '/usercart/[i:id]/', 'Brainfood\\controllers\\UserCart@showUserCart', 'showUserCart');
}

$router->map( 'POST', '/usercart/[i:id]/', 'Brainfood\\controllers\\UserCart@addToCart', 'addToCart');
$router->map( 'POST', '/userdeletecart/[i:id]/', 'Brainfood\\controllers\\UserDeleteCart@deleteCart', 'deleteCart');
$router->map( 'POST', '/userupdatecart/[i:id]/', 'Brainfood\\controllers\\UserUpdateCart@updateCart', 'updateCart');

// routes for showing the checkout page and checking out the cart into the orders table
$router->map( 'GET', '/usercheckout/[i:id]/', 'Brainfood\\controllers\\UserCheckout@showUserCheckout', 'showUserCheckout');
$router->map( 'POST', '/usercheckout/[i:id]/', 'Brainfood\\controllers\\UserCheckout@doCheckout', 'doCheckout');

// route that handles logout
$router->map( 'GET', '/userlogout', 'Brainfood\\controllers\\UserLogout@logout', 'logout');
