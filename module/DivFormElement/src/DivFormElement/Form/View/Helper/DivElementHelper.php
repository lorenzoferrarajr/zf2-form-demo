<?php

namespace DivFormElement\Form\View\Helper;

use Zend\Form\ElementInterface;
use Zend\View\Helper\AbstractHelper;

class DivElementHelper extends AbstractHelper
{
    public function __invoke(ElementInterface $element = null)
    {
        if (!$element)
            return $this;

        return $this->render($element);
    }

    public function render(ElementInterface $oElement)
    {
        return "<div class='" . $oElement->getAttribute('class')  . "'></div>";
    }
}
