<?php

require 'Router.php';
require 'Request.php';
require 'app/controllers/AtasController.php';
require 'app/controllers/UploadController.php';
require 'app/models/Ata.php';
require 'app/models/AtaNRC.php';
require 'app/models/AtaFeitos.php';
require 'app/helpers.php';


function view($name, $data = array())
{
    extract($data);
    return require "app/views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}

function base_url()
{
    return $_SERVER['HTTP_HOST'];
}