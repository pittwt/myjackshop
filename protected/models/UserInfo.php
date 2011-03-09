<?php

/**
 * This is the model class for table "{{UserInfo}}".
 *
 * The followings are the available columns in table '{{UserInfo}}':
 * @property integer $user_id
 * @property integer $area_id
 * @property string $birthday
 * @property integer $gender
 * @property string $portrait
 * @property string $telphone
 * @property string $mobile
 * @property string $qq
 * @property string $msn
 * @property string $postcode
 */
class UserInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return UserInfo the static model class
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
		return '{{UserInfo}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id', 'required'),
			array('area_id, gender, user_id, postcode', 'numerical', 'integerOnly'=>true),
			array('portrait', 'length', 'max'=>255),
			array('telphone, mobile, qq', 'length', 'max'=>20),
			array('msn', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, area_id, birthday, gender, portrait, telphone, mobile, qq, msn, postcode', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'area' => array(self::BELONGS_TO, 'Area', 'area_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'area_id' => 'Area',
			'birthday' => 'Birthday',
			'gender' => 'Gender',
			'portrait' => 'Portrait',
			'telphone' => 'Telphone',
			'mobile' => 'Mobile',
			'qq' => 'Qq',
			'msn' => 'Msn',
			'postcode' => 'Postcode',
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

		$criteria->compare('user_id',$this->user_id,true);

		$criteria->compare('area_id',$this->area_id);

		$criteria->compare('birthday',$this->birthday,true);

		$criteria->compare('gender',$this->gender);

		$criteria->compare('portrait',$this->portrait,true);

		$criteria->compare('telphone',$this->telphone,true);

		$criteria->compare('mobile',$this->mobile,true);

		$criteria->compare('qq',$this->qq,true);

		$criteria->compare('msn',$this->msn,true);

		$criteria->compare('postcode',$this->postcode,true);

		return new CActiveDataProvider('UserInfo', array(
			'criteria'=>$criteria,
		));
	}
}