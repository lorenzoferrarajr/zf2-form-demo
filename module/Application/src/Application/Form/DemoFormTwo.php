<?php
namespace Application\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

class DemoFormTwo extends Form
{
    public function __construct($serviceManager)
    {
        parent::__construct('demo_form_two');
        $this->setAttribute('method', 'post')->setInputFilter(new InputFilter());

        $this->add(array(
            'name' => 'demo_fieldset',
            'type' => 'Application\Form\DemoFieldset'
        ));

        $this->add(array(
            'name' => 'security',
            'type' => 'Zend\Form\Element\Csrf'
        ));

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Submit',
                'id' => 'submit_button',
            ),
            'options' => array()
        ));

        $this->setValidationGroup(array(
            'security',
            'demo_fieldset' => array(
                'message'
            )
        ));
    }
}
