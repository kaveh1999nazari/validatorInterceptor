<?php

namespace App\src\Bootloader;

use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Core\Container\SingletonInterface;
use Spiral\Config\ConfiguratorInterface;
use Spiral\Config\Patch\Append;

class ValidatorInterceptorBootloader extends Bootloader implements SingletonInterface
{
    public function __construct(ConfiguratorInterface $config)
    {
        $config->modify('grpc', new Append('interceptor', \App\Endpoint\Interceptor\ValidatorInterceptor::class));
    }
}
