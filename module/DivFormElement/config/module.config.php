<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'service_manager' => array(
        'delegators' => array(
            'Zend\Mvc\Service\FormElementManagerFactory' => [ 'DivFormElement\TestDelegatorFactory' ]
        ),
    ),
    'form_elements' => array(
        'invokables' => array(
            'DivFormElement\Form\Element\DivElement' => 'DivFormElement\Form\Element\DivElement',
        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
            'FormDiv' => 'DivFormElement\Form\View\Helper\DivElementHelper',
        ),
        'delegators' => array(
            'FormElement' => [ 'DivFormElement\FormElementDelegatorFactory' ]
        )
    ),
);
