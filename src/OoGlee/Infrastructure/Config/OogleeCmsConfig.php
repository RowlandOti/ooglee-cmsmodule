<?php namespace Ooglee\Infrastructure\Config;

use Illuminate\Config\Repository as IlluminateConfig;

class OogleeCmsConfig extends LaravelConfig {

    public function __construct(IlluminateConfig $config, $namespace)
    {
        parent::__construct($config, $namespace);
    }
}
