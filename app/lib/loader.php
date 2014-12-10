<?php
namespace lib;

use Illuminate\Config\FileLoader;

class Loader extends FileLoader
{
    public function load($environment, $group, $namespace = null)
    {
        $path = app('path.base') . "/{$environment}";
        $this->addNamespace('production', $path);
        $default = parent::load($environment, $group, $namespace);
        $file = $path . "/{$group}.php";

        if ($this->files->exists($file)) {
            return $this->mergeEnvironment($default, $file);
        } else {
            return $default;
        }
    }
}