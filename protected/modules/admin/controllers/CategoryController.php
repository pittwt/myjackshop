<?php
class CategoryController extends CController
{
    /**
     * 分类列表
     */
    public function actionList()
    {
        $model = Category::getCategoryList();
        $this->pageTitle = "文章分类";
        $this->render('list',array(
            'model' => $model,
        ));
    }
    
    /**
     * 添加分类
     */
    public function actionAdd()
    {
        $catelist = Category::getCategoryNamelist();
        $model = new Category();
        if(isset($_POST['Category']))
        {
            $model->attributes = $_POST['Category'];
            if($model->save())
            {
                $this->redirect(url('admin/category/list'));
            }
        }
        $this->pageTitle = "添加文章分类";
        $this->render('add',array(
            'model' => $model,
            'catelist' => $catelist,
        ));
    }
    
    /**
     * 修改分类
     */
    public function actionEdit()
    {
        $catelist = Category::getCategoryNamelist();
        if(isset($_GET['id']))
        {
            $model = Category::model()->findByPk($_GET['id']);
            if(isset($_POST['Category']))
            {
                $model->attributes = $_POST['Category'];
                if($model->save())
                    $this->refresh();
            }
            $this->pageTitle = '修改文章分类';
            $this->render('edit', array(
                'model' => $model,
                'catelist' => $catelist
            ));
        }
        else
        {
            $this->redirect(url('admin/category/list'));
        }
    }
    
    /**
     * 删除分类
     */
    public function actionDel()
    {
        if(isset($_GET['id']))
        {
            $category = Category::model()->findByPk($_GET['id']);
            if($category->delete())
            {
                $this->redirect(url('admin/category/list'));
            }
        }
    }
     
    
    
}
?>