<?php
require_once app('path') . DIRECTORY_SEPARATOR . 'lib/loader.php';
$path = app('path.base') . DIRECTORY_SEPARATOR . 'production';
$loader = new \lib\Loader(new \Illuminate\Filesystem\Filesystem(), app('path') . '/config');
App::bind(
    'config',
    function ($container, $parameters) use ($loader) {
        return new \Illuminate\Config\Repository($loader, 'production');
    }
);
unset($path, $loader);
