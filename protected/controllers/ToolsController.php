<?php

class ToolsController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionWn()
	{
		$this->renderPartial('wn');
	}
}