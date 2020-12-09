<?php

declare(strict_types=1);

namespace Api\App\Common\Factory;

use Api\App\Common\Repository\OauthUserRepository;
use Psr\Container\ContainerInterface;
use Mezzio\Authentication\OAuth2\Repository\Pdo\PdoService;

/**
 * Class OauthUserRepositoryFactory
 * @package Api\App\Common
 */
class OauthUserRepositoryFactory
{
    /**
     * @param ContainerInterface $container
     * @return OauthUserRepository
     */
    public function __invoke(ContainerInterface $container): OauthUserRepository
    {
        return new OauthUserRepository(
            $container->get(PdoService::class)
        );
    }
}
