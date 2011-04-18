<?php
class CategoryController extends CController
{
    /**
     * 分类列表
     */
    function actionList()
    {
        $criteria = new CDbCriteria();
        $criteria->limit = 2;
        $count = Category::model()->count($criteria);
        $pages = new CPagination($count);
        $pages->pageSize = 2;
        $pages->applyLimit($criteria);
        $model = Category::model()->findAll($criteria);
        
        $this->pageTitle = "文章分类";
        $this->render('list',array(
            'model' => $model,
            'pages' => $pages
        ));
    }
    
    /**
     * 添加分类
     */
    function actionAdd()
    {
        $catearray = $this->get_category_list();
        $category = new Category();
        if(isset($_POST['Category']))
        {
            $category->attributes = $_POST['Category'];
            if($category->save())
            {
                $this->redirect(url('admin/category/list'));
            }
        }
        $this->pageTitle = "添加分类";
        $this->render('add',array(
            'category' => $category,
            'catearray' => $catearray,
        ));
    }
    
    /**
     * 修改分类
     */
    function actionEdit()
    {
        $catearray = $this->get_category_list();
        $criteria = new CDbCriteria();
        if(isset($_GET['id']))
        {
            $category = Category::model()->findByPk($_GET['id']);
            $this->render('edit', array(
                'category' => $category,
                'catearray' => $catearray
            ));
        }
        else
        {
            $this->redirect(url('admin/category/list'));
        }
    }
    
    /**
     * 获取分类id列表
     */
    function get_category_list()
    {
        $criteria = new CDbCriteria();
        $model = Category::model()->findAll($criteria); 
        $catearray = array();
        if(is_array($model))
        {
            foreach($model as $value)
            {
                $catearray[$value->id] = $value->name;
            }
            return $catearray;
        }
        else
        {
            return false;
        }
    }
}
?>