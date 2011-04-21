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
        $this->render('add', array(
            'model' => $model,
        ));
    }
    
    /**
     * 删除文章
     */
    public function actionDel()
    {
        
    }
    
    /**
     * 编辑文章
     */
    public function actionEdit()
    {
        
    }
}

?>