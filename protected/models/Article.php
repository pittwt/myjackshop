<?php

/**
 * This is the model class for table "{{Article}}".
 *
 * The followings are the available columns in table '{{Article}}':
 * @property integer $id
 * @property integer $user_id
 * @property integer $cat_id
 * @property integer $type_id
 * @property integer $area_id
 * @property string $title
 * @property string $style
 * @property string $thumb
 * @property string $keywords
 * @property string $description
 * @property integer $order
 * @property integer $islink
 * @property string $linkurl
 * @property integer $create_time
 * @property string $create_ip
 * @property integer $update_time
 * @property string $update_ip
 * @property integer $state
 * @property integer $hits
 * @property integer $comments
 */
class Article extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Article the static model class
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
		return '{{Article}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, cat_id, type_id, area_id, order, create_time, update_time, hits, comments, islink, state', 'numerical', 'integerOnly'=>true),
			array('title, thumb, keywords', 'length', 'max'=>255),
			array('style, linkurl', 'length', 'max'=>50),
			array('description', 'safe'),
			array('create_ip, update_ip', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, cat_id, type_id, area_id, title, style, thumb, keywords, description, order, islink, linkurl, create_time, create_ip, update_time, update_ip, state, hits, comments', 'safe', 'on'=>'search'),
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
			'category' => array(self::BELONGS_TO, 'Category', 'id'),
			'album' => array(self::HAS_MANY, 'ArticleAlbum', 'article_id'),
			'news' => array(self::HAS_ONE, 'ArticleNews', 'article_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'user_id' => 'User',
			'cat_id' => 'Cat',
			'type_id' => 'Type',
			'area_id' => 'Area',
			'title' => 'Title',
			'style' => 'Style',
			'thumb' => 'Thumb',
			'keywords' => 'Keywords',
			'description' => 'Description',
			'order' => 'Order',
			'islink' => 'Islink',
			'linkurl' => 'Linkurl',
			'create_time' => 'Create Time',
			'create_ip' => 'Create Ip',
			'update_time' => 'Update Time',
			'update_ip' => 'Update Ip',
			'state' => 'State',
			'hits' => 'Hits',
			'comments' => 'Comments',
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

		$criteria->compare('user_id',$this->user_id,true);

		$criteria->compare('cat_id',$this->cat_id,true);

		$criteria->compare('type_id',$this->type_id,true);

		$criteria->compare('area_id',$this->area_id,true);

		$criteria->compare('title',$this->title,true);

		$criteria->compare('style',$this->style,true);

		$criteria->compare('thumb',$this->thumb,true);

		$criteria->compare('keywords',$this->keywords,true);

		$criteria->compare('description',$this->description,true);

		$criteria->compare('order',$this->order,true);

		$criteria->compare('islink',$this->islink);

		$criteria->compare('linkurl',$this->linkurl,true);

		$criteria->compare('create_time',$this->create_time,true);

		$criteria->compare('create_ip',$this->create_ip,true);

		$criteria->compare('update_time',$this->update_time,true);

		$criteria->compare('update_ip',$this->update_ip,true);

		$criteria->compare('state',$this->state);

		$criteria->compare('hits',$this->hits,true);

		$criteria->compare('comments',$this->comments,true);

		return new CActiveDataProvider('Article', array(
			'criteria'=>$criteria,
		));
	}

	public function behaviors()
	{
	    return array(
	        'CTimestampBehavior' => array(
	            'class' => 'zii.behaviors.CTimestampBehavior',
	        ),
	        'CDIpBehavior' => array(
	            'class' => 'application.behaviors.CDIpBehavior',
	        )
	    );
	}
	
	public function getThumbUrl()
	{
		return sbu($this->thumb);
	}
}