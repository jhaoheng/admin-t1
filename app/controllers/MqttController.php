<?php

class MqttController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->view->setTemplateAfter('mqtt');
    	$this->view->postid="Mqtt";
    }

}

