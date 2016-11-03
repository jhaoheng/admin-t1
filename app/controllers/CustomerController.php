<?php

class CustomerController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->view->setTemplateAfter('customers');
    	$this->view->postid="cus";
    	// $this->view->disable();

    }

}

