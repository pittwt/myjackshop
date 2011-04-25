<?php
class ArticleController extends CController
{
    /**
     * 文章列表
     */ 
    public function actionList()
    {
        $criteria = new CDbCriteria;
        $criteria->limit = 1;
        //$criteria->order = 'a.id desc';
        $count = Article::model()->count($criteria);
        //echo $count;
        $pages = new CPagination($count);
        $pages->pageSize = 1;
        $pages->applyLimit($criteria);
        $model = Article::model()->with('category')->findAll($criteria);
        
        $this->render('list',array(
            'model' => $model,
            'pages' => $pages,
        ));
    }
    
    /**
     * 添加文章
     */
    public function actionAdd()
    {	
    	$catelist = Category::getCategoryNamelist();
    	$article = new Article();
    	if(isset($_POST['Article']))
    	{
    		$article->attributes = $_POST['Article'];
    		if($article->save())
    			$this->redirect(url('admin/article/list'));
    	}
    	$this->pageTitle = "添加文章";
        $this->render('add', array(
        	'article' => $article,
            'catelist' => $catelist,
        ));
    }
    
    /**
     * 删除文章
     */
    public function actionDel()
    {
        $catelist = Category::getCAtegoryNamelist();
        
        if(isset($_GET['id']))
        {
        	$article = Article::model()->findByPk($_GET['id']);
        }
    }
    
    /**
     * 编辑文章
     */
    public function actionEdit()
    {
        $article = Article::model()->findByPk($id);
        if(isset($_POST['article']))
        {
            $article->attributes = $_POST['article'];
            if($article->save())
                $this->refresh();
        }
        
        $this->pageTitle = "修改文章";
        $this->render('edit', array(
            'article'=>$article,
        ));
    }
}

?>