<?php
/* @var $this OrcamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orcamentos',
);

$this->menu=array(
	array('label'=>'Create Orcamento', 'url'=>array('create')),
	array('label'=>'Manage Orcamento', 'url'=>array('admin')),
);
?>

<h1>Orcamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
