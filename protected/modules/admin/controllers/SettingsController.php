<?php

class SettingsController extends Controller
{
	public function actionIndex()
	{
		if(isset($_POST['settingsform']))
		{
			print_r($_POST['val']);
			exit;
			$this->render('index');
		}
		else
		{
			$criteria = new CDbCriteria();
		   	$settings = Settings::model()->findAll($criteria);
		   	$this->pageTitle = '站点设置';
			$this->render('index',array(
				'settings' => $settings,
			));
		}
	}

}