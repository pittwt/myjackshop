<?php

class AdminModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));

		$this->layout = 'admin';
	}

	public function beforeControllerAction($controller, $action)
	{
	    $actions = array('login');
	    if (in_array($action->id, $actions)) return true;

		if(parent::beforeControllerAction($controller, $action))
		{
			if (Yii::app()->user->isGuest) {
    		    $controller->redirect(url('admin/default/login'));
    		}
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
