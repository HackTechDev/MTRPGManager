<?php

/**
 * This is the model class for table "Scene".
 *
 * The followings are the available columns in table 'Scene':
 * @property integer $id
 * @property integer $num
 * @property string $title
 * @property string $description
 * @property integer $starttime
 * @property integer $endtime
 *
 * The followings are the available model relations:
 * @property SceneTree[] $sceneTrees
 * @property SceneTree[] $sceneTrees1
 */
class Scene extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Scene';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('num, title, description', 'required'),
			array('num, starttime, endtime', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, num, title, description, starttime, endtime', 'safe', 'on'=>'search'),
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
			'sceneTrees' => array(self::HAS_MANY, 'SceneTree', 'scene_child_num'),
			'sceneTrees1' => array(self::HAS_MANY, 'SceneTree', 'scene_parent_num'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'num' => 'Num',
			'title' => 'Title',
			'description' => 'Description',
			'starttime' => 'Starttime',
			'endtime' => 'Endtime',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('num',$this->num);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('starttime',$this->starttime);
		$criteria->compare('endtime',$this->endtime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Scene the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
