<?php
namespace Application\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

class DemoFormOne extends Form
{
    public function __construct($serviceManager)
    {
        parent::__construct('demo_form_one');
        $this->setAttribute('method', 'post')->setInputFilter(new InputFilter());

        $demoFieldset = $serviceManager->get('FormElementManager')->get('Application\Form\DemoFieldset');
        $this->add($demoFieldset);

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
