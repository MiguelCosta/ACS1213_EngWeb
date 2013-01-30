<?php
/* @var $this OrcamentoLinhaController */
/* @var $model OrcamentoLinha */

$this->breadcrumbs=array(
	'Orcamento Linhas'=>array('index'),
	$model->oid=>array('view','id'=>$model->oid),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrcamentoLinha', 'url'=>array('index')),
	array('label'=>'Create OrcamentoLinha', 'url'=>array('create')),
	array('label'=>'View OrcamentoLinha', 'url'=>array('view', 'id'=>$model->oid)),
	array('label'=>'Manage OrcamentoLinha', 'url'=>array('admin')),
);
?>

<h1>Update OrcamentoLinha <?php echo $model->oid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>