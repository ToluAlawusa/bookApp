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

// routes responsible for showing cart, updating cart and deleting from cart 
$router->map( 'POST', '/usercart/[i:id]/', 'Brainfood\\controllers\\UserCart@addToCart', 'addToCart');
$router->map( 'POST', '/userdeletecart/[i:id]/', 'Brainfood\\controllers\\UserDeleteCart@deleteCart', 'deleteCart');
$router->map( 'POST', '/userupdatecart/[i:id]/', 'Brainfood\\controllers\\UserUpdateCart@updateCart', 'updateCart');
