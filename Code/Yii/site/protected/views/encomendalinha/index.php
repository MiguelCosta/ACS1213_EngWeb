<?php
/* @var $this EncomendalinhaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Encomendalinhas',
);

$this->menu=array(
	array('label'=>'Criar Encomendalinha', 'url'=>array('create')),
	array('label'=>'Gerir Encomendalinha', 'url'=>array('admin')),
);
?>

<h1>Encomendalinhas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
