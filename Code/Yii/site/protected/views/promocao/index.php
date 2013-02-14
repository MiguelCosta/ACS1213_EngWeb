<?php
/* @var $this PromocaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Promocoes',
);

$this->menu=array(
	array('label'=>'Criar Promocao', 'url'=>array('create')),
	array('label'=>'Gerir Promocoes', 'url'=>array('admin')),
);
?>

<h1>Promocoes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
