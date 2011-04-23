<?php
class ArticleController extends CController
{
    /**
     * 文章列表
     */ 
    public function actionList()
    {
        $criteria = new CDbCriteria;
        $criteria->limit = 10;
        $count = Article::model()->count($criteria);
        $pages = new CPagination($count);
        $pages->pageSize = 10;
        $pages->applyLimit($criteria);
        $model = Article::model()->with('category')->findAll();

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
    	$this->pageTitle = "添加文章分类";
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
        
    }
}

?>