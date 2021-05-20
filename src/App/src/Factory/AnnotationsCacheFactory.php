<?php

declare(strict_types=1);

namespace Api\App\Factory;

use Doctrine\Common\Cache\FilesystemCache;
use Psr\Container\ContainerInterface;

/**
 * Class AnnotationsCacheFactory
 * @package Api\App\Factory
 */
class AnnotationsCacheFactory
{
    /**
     * @param ContainerInterface $container
     * @return FilesystemCache
     */
    public function __invoke(ContainerInterface $container): FilesystemCache
    {
        return new FilesystemCache($container->get('config')['annotations_cache_dir']);
    }
}
