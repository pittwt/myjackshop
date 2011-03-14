<?php

class SettingsController extends Controller
{
	public function actionIndex()
	{
	   	$criteria = new CDbCriteria();
	   	$sysinfo = Settings::model()->findAll();
	   	$this->pageTitle = '站点设置';
		$this->render('index',array(
			'sysinfo' => $sysinfo,
		));
	}

}