<?php

namespace ContainerYb6AzfV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Kh4v9GZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kh4v9GZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kh4v9GZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'medicoRepository' => ['privates', 'App\\Repository\\MedicoRepository', 'getMedicoRepositoryService', true],
        ], [
            'medicoRepository' => 'App\\Repository\\MedicoRepository',
        ]);
    }
}
