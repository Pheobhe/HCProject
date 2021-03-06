<?php

namespace ContainerS6TDPTM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AGzJFobService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AGzJFob' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AGzJFob'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paciente' => ['privates', '.errored..service_locator.AGzJFob.App\\Entity\\Paciente', NULL, 'Cannot autowire service ".service_locator.AGzJFob": it references class "App\\Entity\\Paciente" but no such service exists.'],
            'pacienteRepository' => ['privates', 'App\\Repository\\PacienteRepository', 'getPacienteRepositoryService', true],
        ], [
            'paciente' => 'App\\Entity\\Paciente',
            'pacienteRepository' => 'App\\Repository\\PacienteRepository',
        ]);
    }
}
