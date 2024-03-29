<?php

class DefaultController extends Controller
{
    public $layout = "logins";
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionLogin()
	{
		$loginModel = new LoginForm('login');
		if(isset($_POST['LoginForm']))
		{
			$loginModel->attributes = $_POST['LoginForm'];
			if($loginModel->validate())
			{
				$loginModel->login();
//				LoginForm::clearErrorLoginNums();
				$this->redirect(url('admin/default/start'));
			}
		}
		$this->pageTitle = '管理登录';
		$this->render('login', array(
	        'loginModel' => $loginModel,
	    ));
	}

	public function actionStart()
	{
		$loginModel = new LoginForm('login');
		if(isset($_POST['LoginForm']))
		{
			$loginModel->attributes = $_POST['LoginForm'];
			if($loginModel->validate())
			{
				$loginModel->login();
//				LoginForm::clearErrorLoginNums();
				$this->redirect(url('admin/default/index'));
			}
		}
		$this->pageTitle = 'Welcome';
		$this->render('start', array(
	        'loginModel' => $loginModel,
	    ));
	}

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(url('admin/default/login'));
	}
}