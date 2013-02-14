<?php
/* @var $this OrcamentolinhaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orcamentolinhas',
);

$this->menu=array(
	array('label'=>'Criar Orcamentolinha', 'url'=>array('create')),
	array('label'=>'Gerir Orcamentolinhas', 'url'=>array('admin')),
);
?>

<h1>Orcamentolinhas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
