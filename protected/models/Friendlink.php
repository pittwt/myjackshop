<?php

/**
 * This is the model class for table "{{Friendlink}}".
 *
 * The followings are the available columns in table '{{Friendlink}}':
 * @property integer $id
 * @property string $name
 * @property string $linkurl
 * @property string $logo
 * @property string $description
 * @property integer $order
 * @property integer $isvalid
 * @property integer $create_time
 * @property string $create_ip
 */
class Friendlink extends CActiveRecord
{
    public static $static = array(
        0 => '禁用',
        1 => '正常',
    );
    
	/**
	 * Returns the static model of the specified AR class.
	 * @return Friendlink the static model class
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
		return '{{friendlink}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('isvalid, order, create_time', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('linkurl, logo, description', 'length', 'max'=>255),
			array('create_ip', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, linkurl, logo, description, order, isvalid, create_time, create_ip', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'linkurl' => 'Linkurl',
			'logo' => 'Logo',
			'description' => 'Description',
			'order' => 'Order',
			'isvalid' => 'Isvalid',
			'create_time' => 'Create Time',
			'create_ip' => 'Create Ip',
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

		$criteria->compare('name',$this->name,true);

		$criteria->compare('linkurl',$this->linkurl,true);

		$criteria->compare('logo',$this->logo,true);

		$criteria->compare('description',$this->description,true);

		$criteria->compare('order',$this->order,true);

		$criteria->compare('isvalid',$this->isvalid);

		$criteria->compare('create_time',$this->create_time,true);

		$criteria->compare('create_ip',$this->create_ip,true);

		return new CActiveDataProvider('Friendlink', array(
			'criteria'=>$criteria,
		));
	}

	public function behaviors()
	{
	    return array(
	        'CTimestampBehavior' => array(
	            'class' => 'zii.behaviors.CTimestampBehavior',
	    		'updateAttribute' => NULL,
	        ),
	        'CDIpBehavior' => array(
	            'class' => 'application.behaviors.CDIpBehavior',
	        	'updateAttribute' => NULL,
	        )
	    );
	}
}