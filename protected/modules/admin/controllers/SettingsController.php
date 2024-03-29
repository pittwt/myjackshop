<?php

class SettingsController extends Controller
{
	/**
	 * 站点设置
	 */
	public function actionIndex()
	{
		if(isset($_POST['setting']))
		{
            foreach($_POST['setting'] as $key=>$value)
            {
                Settings::setValue($key, $value);
            }
        }
	   	$settings = Settings::model()->findAll();
        
        $array = array();
        foreach($settings as $item)
        {
            $array[$item->key] = $item->value;
        }
		$this->render('index',array(
            'setting' => $array,
		));
		
	}
    
	/*
	 * 友情链接
	 */
	public function actionFriendlink()
	{
        $criteria = new CDbCriteria();
        $criteria->limit = 10;
        
        $pages = new CPagination(Friendlink::model()->count($criteria));
	    $pages->pageSize = 10;
		$pages->applyLimit($criteria);
        $friendlink = Friendlink::model()->findAll($criteria);
        
        $this->pageTitle = '友情链接';
		$this->render('friendlink',array(
			'friendlink' => $friendlink,
            'pages' => $pages,
		));
	}

	/*
	 * 删除友情链接
	 */
	public function actionDelFriendlink($id = null)
	{
		if(isset($id))
		{
			if(Friendlink::model()->findByPk($id)->delete())
			{
				$this->redirect(url('admin/settings/friendlink'));
			}
		}
	}

    /*
     * 添加友情链接
     */
    public function actionAddFriendlink()
    {
        $model = new Friendlink();
        if(isset($_POST['Friendlink']))
        {
            $model->attributes = $_POST['Friendlink'];
            if($model->save())
            {
                $this->redirect(url('admin/settings/friendlink'));
            }
        }
        
        $this->pageTitle = "添加友情链接";
        $this->render('addfriendlink', array(
            'model' => $model,
        ));
        
    }
    
	/*
	 * 更新友情链接
	 */
	public function actionEditFriendlink()
	{
		if(isset($_GET['id']))
		{
            $model=Friendlink::model()->findbyPk($_GET['id']);
			if(isset($_POST['Friendlink']))
			{
				$model->attributes=$_POST['Friendlink'];
				if($model->save())
					$this->refresh();
			}
			$this->render('editfriendlink',array(
			     'model'=>$model));

		}
		else
		{
			$this->redirect(url('admin/settings/friendlink'));
		}
	}
    
    /**
     * 改变状态
     */
    public static function actionChangestate()
    {
        if(isset($_GET['isvalid']) && isset($_GET['id']))
        {
            $friendlink = Friendlink::model()->findByPk($_GET['id']);
            if($_GET['isvalid']==1){
                $isvalid = 0;
                $img = "cross.png";
            }
            else{
                $isvalid = 1;
                $img = "tick_circle.png";
            }
            $friendlink->isvalid = $isvalid;
            if($friendlink->save())
                echo CHtml::link('<img src="'.resBu("admin/images/icons/$img").'" />',array("settings/changestate",'isvalid'=>$isvalid,'id'=>$_GET['id']),array('class'=>'flstate','rel'=>$isvalid));
            else
                //echo CHtml::link('<img src="'.resBu("admin/images/icons/tick_circle.png").'" />',array("settings/changestate",'isvalid'=>$_GET['isvalid'],'id'=>$_GET['id']),array('class'=>'flstate','rel'=>$_GET['isvalid']));
                echo 0;
        }
    }
    
    /**
	 * This is invoked before the record is saved.
	 * @return boolean whether the record should be saved.
	 */
	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
				$this->create_time=time();
			return true;
		}
		else
			return false;
	}
}











