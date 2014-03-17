<?php

/**
 * This is the model class for table "SceneTree".
 *
 * The followings are the available columns in table 'SceneTree':
 * @property integer $id
 * @property integer $scenario_id
 * @property integer $scene_parent_num
 * @property integer $scene_child_num
 *
 * The followings are the available model relations:
 * @property Scenario $scenario
 * @property Scene $sceneParentNum
 * @property Scene $sceneChildNum
 */
class SceneTree extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'SceneTree';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('scenario_id, scene_parent_num, scene_child_num', 'required'),
			array('scenario_id, scene_parent_num, scene_child_num', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, scenario_id, scene_parent_num, scene_child_num', 'safe', 'on'=>'search'),
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
			'scenario' => array(self::BELONGS_TO, 'Scenario', 'scenario_id'),
			'sceneParentNum' => array(self::BELONGS_TO, 'Scene', 'scene_parent_num'),
			'sceneChildNum' => array(self::BELONGS_TO, 'Scene', 'scene_child_num'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'scenario_id' => 'Scenario',
			'scene_parent_num' => 'Scene Parent Num',
			'scene_child_num' => 'Scene Child Num',
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
		$criteria->compare('scenario_id',$this->scenario_id);
		$criteria->compare('scene_parent_num',$this->scene_parent_num);
		$criteria->compare('scene_child_num',$this->scene_child_num);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SceneTree the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
