 <?php

$router->get('', 'PagesController@home');
$router->post('make-pdf', 'PagesController@makePdf');

// $router->get('sendmail', 'EmailsController@sendEmail');