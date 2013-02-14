<?php
/* @var $this OrcamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orcamentos',
);

$this->menu=array(
	array('label'=>'Criar Orcamento', 'url'=>array('create')),
	array('label'=>'Gerir Orcamentos', 'url'=>array('admin')),
);
?>

<h1>Orcamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
