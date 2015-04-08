<?php

namespace DivFormElement\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

class FormWithDivElement extends Form
{
    public function __construct()
    {
        parent::__construct('demo_form_one');
        $this->setAttribute('method', 'post')->setInputFilter(new InputFilter());

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Submit',
                'id' => 'submit_button',
            ),
            'options' => array()
        ));

        $this->add(array(
            'name' => 'demo_element',
            'type' => 'DivFormElement\Form\Element\DivElement'
        ));

        $this->setValidationGroup(array(
        ));
    }
}
