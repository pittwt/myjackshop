<?php

/**
 * This is the model class for table "{{User}}".
 *
 * The followings are the available columns in table '{{User}}':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property integer $state
 * @property string $realname
 * @property integer $login_nums
 * @property integer $create_time
 * @property string $create_ip
 * @property integer $last_login_time
 * @property string $last_login_ip
 * @property integer $ismanage
 */
class User extends CActiveRecord
{
    /**
     * 用户角色 0普通用户， 1管理员
     */
    const IS_NOT_MANAGE = 0;
    const IS_MANAGE = 1;
    public static $userRole = array(
        self::IS_NOT_MANAGE => '普通用户',
        self::IS_MANAGE => '管理员',
    );
    
    /**
     * 用户状态 
     */
    public static $states = array(
    	STATE_DISABLED => '禁用',
    	STATE_ENABLED => '正常'
    );
    
	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
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
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('username','required'),
			array('state, ismanage, login_nums, create_time, last_login_time', 'numerical', 'integerOnly'=>true),
			array('username, email, realname', 'length', 'max'=>50),
            array('email', 'email'),
			array('password', 'length', 'max'=>32),
			array('create_ip, last_login_ip', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, email, state, realname, login_nums, create_time, create_ip, last_login_time, last_login_ip, ismanage', 'safe', 'on'=>'search'),
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
			'userApi' => array(self::HAS_ONE, 'UserApi', 'user_id'),
			'userNote' => array(self::HAS_MANY, 'UserNote', 'user_id'),
			'userSession' => array(self::HAS_MANY, 'UserSession', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'username' => '用户名',
			'password' => '密码',
			'email' => 'Email',
			'state' => '状态',
			'realname' => '真实姓名',
			'login_nums' => '登录次数',
			'create_time' => '注册时间',
			'create_ip' => '注册IP',
			'last_login_time' => '上次登录时间',
			'last_login_ip' => '上次登录IP',
			'ismanage' => '角色',
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

		$criteria->compare('username',$this->username,true);

		$criteria->compare('password',$this->password,true);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('state',$this->state);

		$criteria->compare('realname',$this->realname,true);

		$criteria->compare('login_nums',$this->login_nums,true);

		$criteria->compare('create_time',$this->create_time,true);

		$criteria->compare('create_ip',$this->create_ip,true);

		$criteria->compare('last_login_time',$this->last_login_time,true);

		$criteria->compare('last_login_ip',$this->last_login_ip,true);

		$criteria->compare('ismanage',$this->ismanage);

		return new CActiveDataProvider('User', array(
			'criteria'=>$criteria,
		));
	}

	public function validatePassword($password)
	{
		return md5($password) === $this->password;
	}

}