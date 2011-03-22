<?php

class SettingsController extends Controller
{
	/*
	 * 站点设置
	 */
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

	/*
	 * 友情链接
	 */
	public function actionFriendlink()
	{
		if(isset($_GET['friendlinkform']))
		{
			exit;
		}
		else
		{
			$criteria = new CDbCriteria();
			$friendlink = Friendlink::model()->findAll($criteria);
			$this->pageTitle = '友情链接';
			$this->render('friendlink',array(
				'friendlink' => $friendlink,
			));
		}
	}

	/*
	 * 删除友情链接
	 */
	public function actionDelFriendlink($id = null)
	{
		if(isset($id))
		{
			$this->loadModel($id)->delete();
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
		}
	}

}











