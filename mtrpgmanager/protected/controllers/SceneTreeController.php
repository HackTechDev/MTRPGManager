<?php

class SceneTreeController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'display'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function displayNode() {
		return "Node";
	}


	public function displaySceneTree($parent, $level, $array) {
		$html = "";
		/*
		foreach ($array as $node) {
			echo $node["scene_parent_num"] . " " .  $node["scene_child_num"] . " " . $parent . "<br>";
			
			
			if ($node["scene_child_num"] >= 1)  {
				if( $node["scene_parent_num"] == $parent) {	
					if($node["scene_parent_num"] == $parent ) {
						for($i = 0;$i < $level; $i++) {
							$html .= "-";
						}
						$html .= " " . $node["scene_name"] . "<br/>";
						$html .= $this->displaySceneTree($node['scene_child_num'], 0, $array);
					}
				}
			}
		}
		*/
		return $html;
	}

	/**
	 * Displays a scene tree.
	 */
	public function actionDisplay()
	{
	
		$sceneTreeArr = array();

		$dataProvider = "";
		$criteria = new CDbCriteria();
		$criteria->condition = 'scenario_id=:id';
		$criteria->params = array(':id'=>1); // TODO: get the scenario id
		$ScenesTree = SceneTree::model()->findAll($criteria);

		foreach($ScenesTree as $SceneTreeNode ) {
			// Get title scenario
			$Scenario = Scenario::model()->findByPK($SceneTreeNode->scenario_id);
	
			// Get name tabletop
			$Tabletop = Tabletop::model()->findByPK($SceneTreeNode->tabletop_id);
	
			// Get scene parent title 
			$criteria = new CDbCriteria();
			$criteria->condition = 'num=:num';
			$criteria->params = array(':num'=>$SceneTreeNode->scene_parent_num);
			$SceneParent = Scene::model()->find($criteria);

			// Get scene children title
			$criteria = new CDbCriteria();
			$criteria->condition = 'num=:num';
			$criteria->params = array(':num'=>$SceneTreeNode->scene_child_num);
			$SceneChild = Scene::model()->find($criteria);

			// Display all
			 $dataProvider .= "<b>" . $Scenario->title . "</b> on  <b>" . $Tabletop->name . "</b> with " . $SceneTreeNode->scene_parent_num . " (<b>". $SceneParent->title ."</b>)   ==> " . $SceneTreeNode->scene_child_num . " (<b>" . $SceneChild->title . "</b>)  <br/>";

			// Build array
			$sceneTreeArr[] = array (
						'scenario' => $Scenario->title,
						'tabletop' => $Tabletop->name,
						'scene_parent_num' => $SceneTreeNode->scene_parent_num,
						'scene_child_num' => $SceneTreeNode->scene_child_num,
						'scene_name' => $SceneChild->title,
					);
		}
		

		echo $this->displaySceneTree(1, 0, $sceneTreeArr);

		$this->render('display',array(
			'dataProvider'=>$dataProvider,
		));

	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new SceneTree;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SceneTree']))
		{

			$model->attributes=$_POST['SceneTree'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SceneTree']))
		{
			$model->attributes=$_POST['SceneTree'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('SceneTree');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new SceneTree('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SceneTree']))
			$model->attributes=$_GET['SceneTree'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return SceneTree the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=SceneTree::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param SceneTree $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='scene-tree-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
