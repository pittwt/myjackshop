<?php

/**
 * This is the model class for table "{{comment}}".
 *
 * The followings are the available columns in table '{{comment}}':
 * @property string $id
 * @property string $article_id
 * @property string $user_id
 * @property string $nick
 * @property string $content
 * @property string $create_time
 * @property string $create_ip
 * @property integer $status
 */
class Comment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Comment the static model class
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
		return '{{comment}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status', 'numerical', 'integerOnly'=>true),
			array('article_id', 'length', 'max'=>45),
			array('user_id, create_time', 'length', 'max'=>10),
			array('nick', 'length', 'max'=>50),
			array('create_ip', 'length', 'max'=>15),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, article_id, user_id, nick, content, create_time, create_ip, status', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'article_id' => 'Article',
			'user_id' => 'User',
			'nick' => 'Nick',
			'content' => 'Content',
			'create_time' => 'Create Time',
			'create_ip' => 'Create Ip',
			'status' => 'Status',
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
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('nick',$this->nick,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_ip',$this->create_ip,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider('Comment', array(
			'criteria'=>$criteria,
		));
	}
}