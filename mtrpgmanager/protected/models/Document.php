<?php

/**
 * This is the model class for table "Document".
 *
 * The followings are the available columns in table 'Document':
 * @property integer $id
 * @property string $title
 * @property integer $documenttype_id
 * @property integer $number
 * @property string $album
 * @property string $author
 * @property integer $duration
 * @property string $description
 * @property string $url
 *
 * The followings are the available model relations:
 * @property DocumentType $documenttype
 */
class Document extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Document';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, documenttype_id, number, description, url', 'required'),
			array('documenttype_id, number', 'numerical', 'integerOnly'=>true),
			array('title, album, author, url', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, documenttype_id, number, album, author, duration, description, url', 'safe', 'on'=>'search'),
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
			'documenttype' => array(self::BELONGS_TO, 'DocumentType', 'documenttype_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'documenttype_id' => 'Documenttype',
			'number' => 'Number',
			'album' => 'Album',
			'author' => 'Author',
			'duration' => 'Duration',
			'description' => 'Description',
			'url' => 'Url',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		
		  //add the magic letter 't' to refer to the 'main' (not the related) table:
  		$criteria->compare('t.id',$this->id);
  		$criteria->compare('documenttype.name',$this->documenttype_id, true);
		$criteria->with=array('documenttype');
	
		$criteria->compare('title',$this->title,true);
		$criteria->compare('number',$this->number);
		$criteria->compare('album',$this->album,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('duration',$this->duration);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('url',$this->url,true);

		/*
		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('documenttype_id',$this->documenttype_id);
		$criteria->compare('number',$this->number);
		$criteria->compare('album',$this->album,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('duration',$this->duration);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('url',$this->url,true);
		*/


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Document the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
