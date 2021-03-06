<?php

namespace ContainerYb6AzfV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DgwJZulService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dgwJZul' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dgwJZul'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\MedicoController::delete' => ['privates', '.service_locator.xBGrqZb', 'get_ServiceLocator_XBGrqZbService', true],
            'App\\Controller\\MedicoController::edit' => ['privates', '.service_locator.xBGrqZb', 'get_ServiceLocator_XBGrqZbService', true],
            'App\\Controller\\MedicoController::index' => ['privates', '.service_locator.kh4v9GZ', 'get_ServiceLocator_Kh4v9GZService', true],
            'App\\Controller\\MedicoController::new' => ['privates', '.service_locator.kh4v9GZ', 'get_ServiceLocator_Kh4v9GZService', true],
            'App\\Controller\\MedicoController::show' => ['privates', '.service_locator.RPP0iV.', 'get_ServiceLocator_RPP0iV_Service', true],
            'App\\Controller\\PacienteController::delete' => ['privates', '.service_locator.AGzJFob', 'get_ServiceLocator_AGzJFobService', true],
            'App\\Controller\\PacienteController::edit' => ['privates', '.service_locator.AGzJFob', 'get_ServiceLocator_AGzJFobService', true],
            'App\\Controller\\PacienteController::index' => ['privates', '.service_locator.hC_R9Gu', 'get_ServiceLocator_HCR9GuService', true],
            'App\\Controller\\PacienteController::new' => ['privates', '.service_locator.hC_R9Gu', 'get_ServiceLocator_HCR9GuService', true],
            'App\\Controller\\PacienteController::show' => ['privates', '.service_locator.ARt4mUO', 'get_ServiceLocator_ARt4mUOService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\MedicoController:delete' => ['privates', '.service_locator.xBGrqZb', 'get_ServiceLocator_XBGrqZbService', true],
            'App\\Controller\\MedicoController:edit' => ['privates', '.service_locator.xBGrqZb', 'get_ServiceLocator_XBGrqZbService', true],
            'App\\Controller\\MedicoController:index' => ['privates', '.service_locator.kh4v9GZ', 'get_ServiceLocator_Kh4v9GZService', true],
            'App\\Controller\\MedicoController:new' => ['privates', '.service_locator.kh4v9GZ', 'get_ServiceLocator_Kh4v9GZService', true],
            'App\\Controller\\MedicoController:show' => ['privates', '.service_locator.RPP0iV.', 'get_ServiceLocator_RPP0iV_Service', true],
            'App\\Controller\\PacienteController:delete' => ['privates', '.service_locator.AGzJFob', 'get_ServiceLocator_AGzJFobService', true],
            'App\\Controller\\PacienteController:edit' => ['privates', '.service_locator.AGzJFob', 'get_ServiceLocator_AGzJFobService', true],
            'App\\Controller\\PacienteController:index' => ['privates', '.service_locator.hC_R9Gu', 'get_ServiceLocator_HCR9GuService', true],
            'App\\Controller\\PacienteController:new' => ['privates', '.service_locator.hC_R9Gu', 'get_ServiceLocator_HCR9GuService', true],
            'App\\Controller\\PacienteController:show' => ['privates', '.service_locator.ARt4mUO', 'get_ServiceLocator_ARt4mUOService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\MedicoController::delete' => '?',
            'App\\Controller\\MedicoController::edit' => '?',
            'App\\Controller\\MedicoController::index' => '?',
            'App\\Controller\\MedicoController::new' => '?',
            'App\\Controller\\MedicoController::show' => '?',
            'App\\Controller\\PacienteController::delete' => '?',
            'App\\Controller\\PacienteController::edit' => '?',
            'App\\Controller\\PacienteController::index' => '?',
            'App\\Controller\\PacienteController::new' => '?',
            'App\\Controller\\PacienteController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\MedicoController:delete' => '?',
            'App\\Controller\\MedicoController:edit' => '?',
            'App\\Controller\\MedicoController:index' => '?',
            'App\\Controller\\MedicoController:new' => '?',
            'App\\Controller\\MedicoController:show' => '?',
            'App\\Controller\\PacienteController:delete' => '?',
            'App\\Controller\\PacienteController:edit' => '?',
            'App\\Controller\\PacienteController:index' => '?',
            'App\\Controller\\PacienteController:new' => '?',
            'App\\Controller\\PacienteController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
