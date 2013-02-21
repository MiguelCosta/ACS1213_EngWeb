<?php
/* @var $this EncomendalinhaController */
/* @var $model Encomendalinha */

$this->breadcrumbs=array(
	'Encomendalinhas'=>array('index'),
	'Gerir',
);

$this->menu=array(
	array('label'=>'Ver Encomendalinhas', 'url'=>array('index')),
	array('label'=>'Criar Encomendalinha', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#encomendalinha-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerir Linhas da Encomenda</h1>

<?php
if($encomendaID != null)
	$values = new CActiveDataProvider('Encomendalinha', array('criteria' => array('condition' => 'encomenda_id='. $encomendaID,)));
else
	$values = $model->search();
	
?>	

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'encomendalinha-grid',
	'dataProvider'=>$values,
	'columns'=>array(
		'id',
		'descricao',
		'encomenda_id',
		'produto_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
