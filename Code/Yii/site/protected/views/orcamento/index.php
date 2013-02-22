<?php
/* @var $this OrcamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orcamentos',
);

$this->menu=array(
	array('label'=>'Criar Orcamento', 'url'=>array('create')),
);
?>

<h1>Orcamentos</h1>

<?php 


$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
