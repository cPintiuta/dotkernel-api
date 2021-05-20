<?php

declare(strict_types=1);

namespace Api\App\Factory;

use Mezzio\Middleware\ErrorResponseGenerator;
use Psr\Container\ContainerInterface;

/**
 * Class ErrorResponseGeneratorFactory
 * @package Api\App\Factory
 */
class ErrorResponseGeneratorFactory
{
    /**
     * @param ContainerInterface $container
     * @return ErrorResponseGenerator
     */
    public function __invoke(ContainerInterface $container): ErrorResponseGenerator
    {
        $config = $container->has('config') ? $container->get('config') : [];

        return new ErrorResponseGenerator(($config['debug'] ?? false));
    }
}
