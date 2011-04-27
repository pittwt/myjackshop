<?php

/**
 * This is the model class for table "{{Category}}".
 *
 * The followings are the available columns in table '{{Category}}':
 * @property integer $id
 * @property integer $parent_id
 * @property string $model
 * @property string $name
 * @property string $description
 * @property integer $islink
 * @property string $linkurl
 * @property string $template
 * @property integer $ismenu
 * @property integer $hits
 */
class Category extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Category the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{category}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('name', 'required'),
			array('islink, ismenu, parent_id, hits', 'numerical', 'integerOnly'=>true),
			array('model, name, template', 'length', 'max'=>50),
			array('description, linkurl', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, parent_id, model, name, description, islink, linkurl, template, ismenu, hits', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
            'article' => array(self::HAS_MANY,'Article','cat_id'),
            'articlecount' => array(self::STAT,'Article','cat_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'parent_id' => '上级分类',
			'model' => '模型',
			'name' => '分类名称',
			'description' => '描述',
			'islink' => '链接',
			'linkurl' => '链接地址',
			'template' => '模板',
			'ismenu' => '菜单',
			'hits' => '查看次数',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);

		$criteria->compare('parent_id',$this->parent_id,true);

		$criteria->compare('model',$this->model,true);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('description',$this->description,true);

		$criteria->compare('islink',$this->islink);

		$criteria->compare('linkurl',$this->linkurl,true);

		$criteria->compare('template',$this->template,true);

		$criteria->compare('ismenu',$this->ismenu);

		$criteria->compare('hits',$this->hits,true);

		return new CActiveDataProvider('Category', array(
			'criteria'=>$criteria,
		));
	}
	
	public static function getSubCategory($catId) {
		$criteria = new CDbCriteria();
		$criteria->addColumnCondition(array('parent_id'=>$catId));
		return self::model()->findAll();
	}
	
/**
     * 获取分类id列表
     */
    public static function getCategoryList()
    {
        $criteria = new CDbCriteria();
        $model = self::model()->with('articlecount')->findAll($criteria);
        $catearray = array();
        if(is_array($model))
        {
            foreach($model as $value)
            {
                $catearray[$value->id] = $value->attributes;
                $catearray[$value->id]['articlecount'] = $value->articlecount;
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
            	$item['strpre'] = $separator;
                $newarray[] = $item;            
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