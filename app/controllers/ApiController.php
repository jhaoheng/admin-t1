<?php

class ApiController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->view->setTemplateAfter('api');
    	$this->view->postid="API";
    	// $this->view->disable();

    	

    	$suffix = ".postman_collection.json";
    	$ver = "Orbweb-v1.15-2";

    	// echo $this->config->application->publicDir."files/".$ver.$suffix;

    	$filepath = $this->config->application->publicDir."files/".$ver.$suffix;

		$jsonarr = json_decode(file_get_contents($filepath),true);

		$apiver = $jsonarr['info']['name'];
		$this->view->apiver = $apiver;
		echo $apiver;
		echo "<br>";
		// 解析 item
		$groupItem = $jsonarr['item'];
		$this->view->groupItem = $groupItem;
		// echo count($item);
    }

}

