<?php

class SettingsController extends Controller
{
	/*
	 * 站点设置
	 */
	public function actionIndex()
	{
		if(isset($_POST['val']))
		{
			//print_r($_POST['val']);
//			exit;
            //$friendlink = Friendlink::model()->findbyPk($_GET['id']);
//			$friendlink->attributes=$_POST['friendlink'];

            $settings = new Settings;
            $settings->attributes=$_POST['val'];
            if($settings->save())
            {
                $this->redirect(url("admin/settings"));
            }
		}
		else
		{
			$criteria = new CDbCriteria();
		   	$settings = Settings::model()->findAll($criteria);
		   	$this->pageTitle = '站点设置';
			$this->render('index',array(
				'settings' => $settings,
			));
		}
	}
    
    /*
     * 更新站点设置
     */
    public function actionUpdate($id = 1)
    {
        //$model=$this->loadModel($id);
        if(isset($_POST['val']))
		{
            $model = Settings::model()->findbyPk($id);
            $settings->attributes=$_POST['val'];
            if($settings->save())
            {
                $this->redirect(url("admin/settings"));
            }
        }
         
    }

	/*
	 * 友情链接
	 */
	public function actionFriendlink()
	{
        $criteria = new CDbCriteria();
        $criteria->limit = 2;
        
        $pages = new CPagination(Friendlink::model()->count($criteria));
	    $pages->pageSize = 2;
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
			//if(!isset($_GET['ajax']))
				//$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
		}
	}

    /*
     * 添加友情链接
     */
    public function actionAddFriendlink()
    {
        $friendlink = new Friendlink();
        if(isset($_POST['Friendlink']))
        {
            $friendlink->attributes = $_POST['Friendlink'];
            if($friendlink->save())
            {
                //echo "添加成功";
                $this->redirect(url('admin/settings/friendlink'));
            }
        }
        
        $this->pageTitle = "添加友情链接";
        $this->render('addfriendlink', array(
            'friendlink' => $friendlink,
        ));
        
    }
    
	/*
	 * 删除友情链接
	 */
	public function actionEditFriendlink()
	{
		if(isset($_GET['id']))
		{
			if(isset($_POST['friendlink']))
			{
				$friendlink = Friendlink::model()->findbyPk($_GET['id']);
				$friendlink->attributes=$_POST['friendlink'];
				if($friendlink->save())
					$this->redirect(url('admin/settings/friendlink'));
			}
			else
			{
				$friendlink=Friendlink::model()->findbyPk($_GET['id']);
				$this->render('editfriendlink',array(
					'friendlink'=>$friendlink));
			}
		}
		else
		{
			$this->redirect(url('admin/settings/friendlink'));
		}
	}

	/**
	 * 更新友情链接
	 */
	public function actionUpdateFriendlink()
	{
		if(isset($_GET['id']))
		{
			$friendlink = Friendlink::model()->findbyPk($_GET['id']);
			$friendlink->attributes=$_POST['friendlink'];
			if($model->save())
				echo "ok";
		}
	}
    
    /**
     * 改变状态
     */
    public function actionChangestate()
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











