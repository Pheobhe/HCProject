<?php

namespace ContainerS6TDPTM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RPP0iV_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RPP0iV.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RPP0iV.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'medico' => ['privates', '.errored..service_locator.RPP0iV..App\\Entity\\Medico', NULL, 'Cannot autowire service ".service_locator.RPP0iV.": it references class "App\\Entity\\Medico" but no such service exists.'],
        ], [
            'medico' => 'App\\Entity\\Medico',
        ]);
    }
}
