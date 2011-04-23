<?php

/**
 * This is the model class for table "{{Attachment}}".
 *
 * The followings are the available columns in table '{{Attachment}}':
 * @property integer $id
 * @property integer $article_id
 * @property string $name
 * @property string $path
 * @property string $filetype
 * @property integer $filesize
 * @property string $fileext
 * @property string $description
 * @property integer $ispic
 * @property integer $create_time
 * @property string $create_ip
 */
class Attachment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Attachment the static model class
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
		return '{{attachment}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ispic, article_id, filesize, create_time', 'numerical', 'integerOnly'=>true),
			array('name, filetype, fileext', 'length', 'max'=>50),
			array('path, description', 'length', 'max'=>255),
			array('create_ip', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, article_id, name, path, filetype, filesize, fileext, description, ispic, create_time, create_ip', 'safe', 'on'=>'search'),
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
			'article' => array(self::BELONGS_TO, 'Article', 'article_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'article_id' => 'Article',
			'name' => 'Name',
			'path' => 'Path',
			'filetype' => 'Filetype',
			'filesize' => 'Filesize',
			'fileext' => 'Fileext',
			'description' => 'Description',
			'ispic' => 'Ispic',
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

		$criteria->compare('article_id',$this->article_id,true);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('path',$this->path,true);

		$criteria->compare('filetype',$this->filetype,true);

		$criteria->compare('filesize',$this->filesize,true);

		$criteria->compare('fileext',$this->fileext,true);

		$criteria->compare('description',$this->description,true);

		$criteria->compare('ispic',$this->ispic);

		$criteria->compare('create_time',$this->create_time,true);

		$criteria->compare('create_ip',$this->create_ip,true);

		return new CActiveDataProvider('Attachment', array(
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