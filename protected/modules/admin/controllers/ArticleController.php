<?php
class ArticleController extends Controller
{
    private $_model;
    
    /**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('list','add','edit','del'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
    
    /**
     * 文章列表
     */ 
    public function actionList()
    {
        $criteria = new CDbCriteria;
        $criteria->limit = 1;
        $count = Article::model()->count($criteria);
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
    	$model = new Article();
    	if(isset($_POST['Article']))
    	{
    		$model->attributes = $_POST['Article'];
    		if($model->save())
    			$this->redirect(url('admin/article/list'));
    	}
    	$this->pageTitle = "添加文章";
        $this->render('add', array(
        	'model' => $model,
            'catelist' => $catelist,
        ));
    }
    
    /**
     * 删除文章
     */
    public function actionDel()
    {
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
        $catelist = Category::getCAtegoryNamelist();
        $model = $this->loadModel();
        if(isset($_POST['Article']))
        {
            $model->attributes = $_POST['Article'];
            if($model->save())
                $this->refresh();
        }
        
        $this->pageTitle = "修改文章";
        $this->render('edit', array(
            'model'=>$model,
            'catelist'=>$catelist
        ));
    }
    
    public function loadModel()
    {
        if($this->_model===null)
        {
            if(isset($_GET['id']))
                $this->_model = Article::model()->findByPk($_GET['id']);
            if($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }
}

?>