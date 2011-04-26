<?php
class UserController extends Controller
{
    private $_model;
    
    /**
     * 用户列表
     */
    public function actionList()
    {
        $criteria = new CDbCriteria;
        $criteria->limit = 10;
        $pages = new CPagination(User::model()->count($criteria));
        $pages->pageSize = 10;
        $pages->applyLimit($criteria);
        $model = User::model()->findAll($criteria);
        $this->pageTitle = "用户管理";
        $this->render('list', array(
            'model' => $model,
            'pages' => $pages,
        ));
    }
    
    /**
     * 添加用户
     */
    public function actionAdd()
    {
        $criteria = new CDbCriteria;
        $model = User::model()->findAll($criteria);
        $this->pageTitle = '添加用户';
        $this->render('add', array(
            'model' => $model,
        ));
    }
    
    /**
     * 编辑用户
     */
    public function actionEdit()
    {
        $model = $this->loadModel();
        if(isset($_POST['User']))
        {
            $model->attributes = $_POST['User'];
            if($model->save())
                $this->refresh();
        }
        
        $this->render('edit', array(
            'model' => $model,
        ));
    }
    
    /**
     * 删除用户
     */
    public function actionDel()
    {
        $model = $this->loadModel();
        if($model->delete())
            $this->redirect(url('admin/user/list'));
    }
    
    public function loadModel()
    {
        if($this->_model===null)
        {
            if(isset($_GET['id']))
                $this->_model = User::model()->findByPk($_GET['id']);
            if($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }
}