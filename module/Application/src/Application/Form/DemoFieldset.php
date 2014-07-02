<?php

namespace Application\Form;

use Application\Service\GreatServiceAwareInterface;
use Application\Service\GreatService;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;

class DemoFieldset extends Fieldset implements InputFilterProviderInterface, GreatServiceAwareInterface
{
    /**
     * @var GreatService
     */
    protected $greatService;

    public function setGreatService(GreatService $greatService)
    {
        $this->greatService = $greatService;
    }

    public function init()
    {
        $this->add(array(
            'name' => 'message',
            'options' => array(
                'label' => $this->greatService->getDefaultLabel(),
            ),
            'type' => 'Zend\Form\Element\Text',
        ));
    }

    public function __construct() {
        parent::__construct('demo_fieldset');
    }

    public function getInputFilterSpecification()
    {
        return array(
            'message' => array(
                'required' => false,
                'filters' => array(
                    array('name' => 'StringTrim'),
                    array('name' => 'StripTags')
                ),
                'properties' => array(
                    'required' => false
                )
            )
        );
    }
}
