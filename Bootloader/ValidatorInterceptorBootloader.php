<?php

namespace Vendor\Package\Bootloader;

use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Config\ConfiguratorInterface;
use Spiral\Config\Patch\Append;
use Psr\Container\ContainerInterface;

class PackageBootloader extends Bootloader
{
    /**
     * @var ConfiguratorInterface
     */
    private ConfiguratorInterface $config;

    /**
     * @var ContainerInterface
     */
    private ContainerInterface $container;

    /**
     * Constructor for PackageBootloader.
     *
     * @param ConfiguratorInterface $config
     * @param ContainerInterface $container
     */
    public function __construct(ConfiguratorInterface $config, ContainerInterface $container)
    {
        $this->config = $config;
        $this->container = $container;
    }

    /**
     * The boot method is executed when the package is booted.
     */
    public function boot(): void
    {
    }

    /**
     * Initialize package configurations or other initial setup.
     */
    public function init(): void
    {
        $this->config->modify('grpc',
        new Append('interceptor', \App\Endpoint\Interceptor\ValidatorInterceptor::class)
        );
    }
}

