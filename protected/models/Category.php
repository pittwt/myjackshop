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
		return '{{Category}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'parent_id' => 'Parent',
			'model' => 'Model',
			'name' => 'Name',
			'description' => 'Description',
			'islink' => 'Islink',
			'linkurl' => 'Linkurl',
			'template' => 'Template',
			'ismenu' => 'Ismenu',
			'hits' => 'Hits',
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
}