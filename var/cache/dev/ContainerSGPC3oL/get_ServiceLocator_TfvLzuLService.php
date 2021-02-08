<?php

namespace ContainerSGPC3oL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TfvLzuLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TfvLzuL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TfvLzuL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'task' => ['privates', '.errored..service_locator.TfvLzuL.App\\Entity\\Task', NULL, 'Cannot autowire service ".service_locator.TfvLzuL": it references class "App\\Entity\\Task" but no such service exists.'],
        ], [
            'task' => 'App\\Entity\\Task',
        ]);
    }
}
