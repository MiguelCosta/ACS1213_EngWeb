<?php
/* @var $this OrcamentoLinhaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orcamento Linhas',
);

$this->menu=array(
	array('label'=>'Create OrcamentoLinha', 'url'=>array('create')),
	array('label'=>'Manage OrcamentoLinha', 'url'=>array('admin')),
);
?>

<h1>Orcamento Linhas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
