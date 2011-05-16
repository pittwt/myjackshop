<?php
class CategorySidebar extends CWidget
{
    public function init()
    {
    	
    }
    
    public function run()
    {
    	//ÎÄÕÂ·ÖÀà
        $category = Category::getCategoryList();
        
	    $this->render('category', array(
	    	'category'=>$category
	    ));
    }
}