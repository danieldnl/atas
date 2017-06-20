<?php

require 'app/helpers.php';

function my_autoload($Class)
{
    $diretorios = array(
        "app",
        "app\\controllers",
        "core"
    );

    foreach ($diretorios as $diretorio) {
        $arquivo = __DIR__ . "\\{$diretorio}\\{$Class}.php";
        if (file_exists($arquivo) && !is_dir($arquivo)) {
            require_once $arquivo;
        }
    }
}

spl_autoload_register('my_autoload');