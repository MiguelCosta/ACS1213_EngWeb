<?php
/* @var $this OrcamentoController */
/* @var $model Orcamento */

$this->breadcrumbs=array(
	'Orcamentos'=>array('indexByUser?UserID='.Yii::app()->user->id),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Ver Orcamentos', 'url'=>array('index')),
	array('label'=>'Criar Orcamento', 'url'=>array('create')),
	array('label'=>'Ver Orcamento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerir Orcamentos', 'url'=>array('admin')),
);
?>

<h1>Editar Orcamento <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>