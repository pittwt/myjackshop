<?php
class CategoryController extends CController
{
    /**
     * 分类列表
     */
    public function actionList()
    {
        $model = self::getCategoryList();
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
        $catelist = self::getCategoryNamelist();
        $category = new Category();
        if(isset($_POST['Category']))
        {
            $category->attributes = $_POST['Category'];
            if($category->save())
            {
                $this->redirect(url('admin/category/list'));
            }
        }
        $this->pageTitle = "添加文章分类";
        $this->render('add',array(
            'category' => $category,
            'catelist' => $catelist,
        ));
    }
    
    /**
     * 修改分类
     */
    public function actionEdit()
    {
        $catelist = self::getCategoryNamelist();
        $criteria = new CDbCriteria();
        if(isset($_GET['id']))
        {
            $category = Category::model()->findByPk($_GET['id']);
            $this->pageTitle = '修改文章分类';
            $this->render('edit', array(
                'category' => $category,
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
     
    /**
     * 获取分类id列表
     */
    public static function getCategoryList()
    {
        $criteria = new CDbCriteria();
        $model = Category::model()->findAll($criteria);
        $catearray = array();
        if(is_array($model))
        {
            foreach($model as $value)
            {
                $catearray[$value->id] = $value->attributes;
            }
            return self::getCategory($catearray);
        }
            return false;
    }
    
    public static function getCategoryNamelist()
    {
        $array = array();
        $category = self::getCategoryList();
        if(is_array($category))
        {
            foreach($category as $item)
            {
                $array[$item['id']] = $item['strpre'].$item['name'];
            }
            return $array;
        }
        return null;
    }
    
    /**
     * 获取分类目录树
     */
    public static function getCategory($array, $parent_id=0, $level=0)
    {
        $newarray = array();
        $temparray = array();
        $separator = self::getSeparator($level);
        foreach($array as $item)
        {
            if($item['parent_id']==$parent_id)
            {
                $newarray[] = array(
                    'id'         => $item['id'],
                    'parent_id'  => $item['parent_id'],
                    'model'      => $item['model'],
                    'name'       => $item['name'],
                    'description'=> $item['description'],
                    'linkurl'    => $item['linkurl'],
                    'hits'       => $item['hits'],
                    'strpre'     => $separator,
                );
            
                $temparray = self::getCategory($array, $item['id'], $level+1);
                if($temparray)
                {
                    $newarray = array_merge($newarray, $temparray);
                }
           }
           
        }
        return $newarray;
    }
    
    public static function getSeparator($level)
    {
        $separator = '';
        for($i=0;$i<$level;$i++)
        {
            $separator .= "—";
        }
        return $separator;
    }
    
}
?>