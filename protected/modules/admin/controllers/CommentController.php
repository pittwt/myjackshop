<?php
class CommentController extends Controller
{
    /**
     * 评论列表
     */
    public function actionList()
    {
        $criteria = new CDbCriteria;
        $criteria->limit = 1;
        $count = Comment::model()->count($criteria);
        $pages = new CPagination($count);
        $pages->pageSize = 1;
        $pages->applyLimit($criteria);
        $model = Comment::model()->with('article')->findAll($criteria);
        
        $this->pageTitle = '文章评论';
        $this->render('list', array(
            'model' => $model,
            'pages' => $pages
        ));
    }
    
    /**
     * 编辑评论
     */
    public function actionEdit()
    {
        if(isset($_GET['id']))
        {
            $model = Comment::model()->findByPk($_GET['id']);
            if(isset($_POST['Comment']))
            {
                $model->attributes = $_POST['Comment'];
                if($model->save())
                    $this->refresh();
            }
            $this->render('edit', array(
                'model' => $model,
            ));
        }
    }
    
    /**
     * 删除评论
     */
    public function actionDel()
    {
        if(isset($_GET['id']))
        {
            if(Comment::model()->findByPk($_GET['id'])->delete())
                $this->redirect(url('admin/comment/list'));
        }
        else
        {
            throw new CHttpException(404,'Invalid request Please do not repaet again');
        }
    }
}

?>