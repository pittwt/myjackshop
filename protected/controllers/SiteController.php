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
        
        $this->pageTitle = 'My-yiicms';
		$this->render('index', array(
			'article' => $article,
            'pages' => $pages
		));
	}
    
    /**
     * 文章详情
     */
    public function actionInfo()
    {
        if(isset($_GET['id']))
        {
            $article = Article::model()->with('user','category','comment','commentCount')->findByPk($_GET['id']);
            $comment = new Comment();
            if(isset($_POST['Comment']))
            {
                $comment->attributes = $_POST['Comment'];
            }
    		$this->render('info', array(
    			'article' => $article,
    		));
        }
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