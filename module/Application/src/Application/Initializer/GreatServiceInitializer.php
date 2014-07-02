<?php

namespace Application\Initializer;

use Application\Service\GreatService;
use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\InitializerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Application\Service\GreatServiceAwareInterface;

class GreatServiceInitializer implements InitializerInterface
{
    public function initialize($instance, ServiceLocatorInterface $serviceLocator)
    {
        if ($instance instanceof GreatServiceAwareInterface) {
            if ($serviceLocator instanceof AbstractPluginManager) {
                $serviceLocator = $serviceLocator->getServiceLocator();
            }

            /** @var GreatService $greatService */
            $greatService = $serviceLocator->get('GreatService');
            $instance->setGreatService($greatService);
        }
    }
}
