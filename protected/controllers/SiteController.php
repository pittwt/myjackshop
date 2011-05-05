<?php

class SiteController extends Controller
{

	public function actionIndex()
	{	
		$criteria = new CDbCriteria();
		$criteria->addColumnCondition(array('state'=>'1'));
		$criteria->order = 't.order desc';
        $pages = new CPagination(Article::model()->count($criteria));
        $pages->pageSize = 10;
        $pages->applyLimit($criteria);
        //文章
		$article = Article::model()->with('category','commentCount')->findAll($criteria);
        //友情链接
        $criteria = new CDbCriteria();
        $criteria->addColumnCondition(array('isvalid'=>'1'));
        $criteria->order = 't.order desc';
        $friendlink = Friendlink::model()->findAll($criteria);
        //文章分类
        $category = Category::getCategoryList();
        
        $this->pageTitle = 'My-yiicms';
		$this->render('index', array(
			'article' => $article,
            'friendlink' => $friendlink,
            'category' => $category,
            'pages' => $pages
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
	    }
	}
	
}