<?php

$router->get('NRC', 'AtasController@nrc');
$router->get('Feitos', 'AtasController@feitos');
$router->post('NRC', 'UploadController@nrc');
$router->post('Feitos', 'UploadController@feitos');