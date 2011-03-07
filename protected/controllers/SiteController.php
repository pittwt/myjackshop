<?php

class SiteController extends Controller
{

	public function actionIndex()
	{
		$this->pageTitle = '看什么？尽在看什么网';
		$criteria = new CDbCriteria();
		$criteria->addColumnCondition(array('isvalid'=>'1'));
		$criteria->order = 't.order desc';
		$friendlink = Friendlink::model()->findAll($criteria);
		$this->render('index', array(
			'friendlink'=>$friendlink
		));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	//else
	        	//$this->render('error', $error);
	    }
	}
	
}