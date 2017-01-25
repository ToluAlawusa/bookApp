<?php


// route resposible for showing the homepage
$router->map( 'GET', '/userhomepage', 'Brainfood\\controllers\\userhomepage@showHomePage', 'showHomePage');

// route rendering and doing login on login page
$router->map( 'GET', '/userlogin', 'Brainfood\\controllers\\UserLogin@showUserLogin', 'showUserLogin');
$router->map( 'POST', '/userlogin', 'Brainfood\\controllers\\UserLogin@doUserLogin', 'doUserLogin');
