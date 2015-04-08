<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function testDemoFormOneAction()
    {
        // this works just fine
        // $form = $this->getServiceLocator()->get('Application\Form\DemoFormOne');
        $form = $this->getServiceLocator()->get('FormElementManager')->get('Application\Form\DemoFormOne');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                // do things
            }
        }

        return array(
            'form' => $form
        );
    }

    public function testDemoFormTwoAction()
    {
        // this works just fine
        // $form = $this->getServiceLocator()->get('Application\Form\DemoFormTwo');
        $form = $this->getServiceLocator()->get('FormElementManager')->get('Application\Form\DemoFormTwo');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                // do things
            }
        }

        return array(
            'form' => $form
        );
    }

    public function testFormWithDivElementAction()
    {
        $form = new \DivFormElement\Form\FormWithDivElement();

        return array(
            'form' => $form
        );
    }
}
