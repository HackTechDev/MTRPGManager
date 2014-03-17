<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>You can now start your first scenario!</p>

<h2>Player and character manager</h2>
<a href="/mtrpgmanager/index.php?r=player/admin">Player manager</a><br/>
<a href="/mtrpgmanager/index.php?r=playerCharacter/admin">Player-character manager</a><br/>
<a href="/mtrpgmanager/index.php?r=nonPlayerCharacter/admin">Non-player-character manager</a><br/>
<a href="/mtrpgmanager/index.php?r=sheet/admin">Character-sheet manager</a><br/>
<br/>

<h2>Gamemaster manager</h2>
<a href="/mtrpgmanager/index.php?r=gamemaster/admin">Gamemaster manager</a><br/>
<br/>

<h2>Scenario manager</h2>
<a href="/mtrpgmanager/index.php?r=game/admin">Game manager</a><br/>
<a href="/mtrpgmanager/index.php?r=scenario/admin">Scenario manager</a><br/>
<br/>

<h2>Scene tree manager</h2>
<a href="/mtrpgmanager/index.php?r=scene/admin">Scene manager</a><br/>
<a href="/mtrpgmanager/index.php?r=sceneTree">Scene tree manager</a><br/>
<a href="/mtrpgmanager/index.php?r=sceneTree/display">Scene tree display</a><br/>
<br/>

<h2>Document manager</h2>
<a href="/mtrpgmanager/index.php?r=document/admin">Document manager</a><br/>
<br/>

<h2>Tabletop manager</h2>
<a href="/mtrpgmanager/index.php?r=tabletop/admin">Tabletop manager</a><br/>
<br/>

<h2>Scenario tag and document type manager</h2>
<a href="/mtrpgmanager/index.php?r=scenarioTag/admin">Scenario tag manager</a><br/>
<a href="/mtrpgmanager/index.php?r=documentType/admin">Document type manager</a><br/>

