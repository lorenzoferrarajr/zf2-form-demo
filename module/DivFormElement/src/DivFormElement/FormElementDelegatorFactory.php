<?php

namespace DivFormElement;

use Zend\ServiceManager\DelegatorFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class FormElementDelegatorFactory implements DelegatorFactoryInterface
{
    public function createDelegatorWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName, $callback)
    {
        $formElement = $callback();
        $formElement->addType('div', 'formdiv');
        return $formElement;
    }
}
