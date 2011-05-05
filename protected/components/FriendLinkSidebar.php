<?php
class FriendLinkSidebar extends CWidget
{
    public function init()
    {
    	
    }
    
    public function run()
    {
    	//友情链接
        $criteria = new CDbCriteria();
        $criteria->addColumnCondition(array('isvalid'=>'1'));
        $criteria->order = 't.order desc';
        $friendlink = Friendlink::model()->findAll($criteria);
        
	    $this->render('friendlink', array(
	    	'friendlink'=>$friendlink
	    ));
    }
}