<?php

namespace App\src\Bootloader;

use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Config\ConfiguratorInterface;
use Spiral\Config\Patch\Append;

class ValidatorInterceptorBootloader extends Bootloader
{
    public function __construct(ConfiguratorInterface $config)
    {
        $config->modify('grpc', new Append('interceptor', null, \App\Endpoint\Interceptor\ValidatorInterceptor::class));
    }
}

