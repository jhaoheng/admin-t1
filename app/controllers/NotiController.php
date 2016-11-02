<?php

class NotiController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->view->setTemplateAfter('noti');
    	$this->view->postid="Notification";
    }

}

