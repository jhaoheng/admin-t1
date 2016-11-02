<?php
use Phalcon\Mvc\Controller;
class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	$this->view->setTemplateAfter('index');
    	$this->view->postid="index";
		// $this->view->pick("test");
    	// $this->view->disable();
  //   	$user = new User();
		// $user->assign(
		// 	array(
		// 		'email' 			=> 'subb@gmail.com',
		// 		// 'password' 			=> 'test',
		// 		// 'birth'	=> '123'
		// 	)
		// );
		// $user->save();
		// echo "hello";
		// echo $this->tag->image("img/1.jpg");
    }
}

