<?php
/* @var $this EncomendalinhaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Encomendalinhas',
);

$this->menu=array(
	array('label'=>'Create Encomendalinha', 'url'=>array('create')),
	array('label'=>'Manage Encomendalinha', 'url'=>array('admin')),
);
?>

<h1>Encomendalinhas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
