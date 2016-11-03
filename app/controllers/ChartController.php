<?php

class ChartController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->view->setTemplateAfter('chart');
    	$this->view->postid="chart";
    }

}

