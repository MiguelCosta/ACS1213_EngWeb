<?php
/* @var $this EncomendaController */
/* @var $model Encomenda */

$this->breadcrumbs=array(
	'Encomendas'=>array('indexByUser?UserID='.Yii::app()->user->id),
	'Criar',
);

?>

<h1>Criar Encomenda</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>