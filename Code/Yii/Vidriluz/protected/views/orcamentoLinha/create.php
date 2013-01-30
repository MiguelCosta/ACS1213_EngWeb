<?php
/* @var $this OrcamentoLinhaController */
/* @var $model OrcamentoLinha */

$this->breadcrumbs=array(
	'Orcamento Linhas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrcamentoLinha', 'url'=>array('index')),
	array('label'=>'Manage OrcamentoLinha', 'url'=>array('admin')),
);
?>

<h1>Create OrcamentoLinha</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>