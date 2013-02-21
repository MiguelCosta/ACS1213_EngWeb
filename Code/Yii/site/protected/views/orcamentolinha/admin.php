<?php
/* @var $this OrcamentolinhaController */
/* @var $model Orcamentolinha */

$this->breadcrumbs=array(
	'Orcamentolinhas'=>array('index'),
	'Gerir',
);

$this->menu=array(
	array('label'=>'Ver Orcamentolinhas', 'url'=>array('index')),
	array('label'=>'Criar Orcamentolinha', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#orcamentolinha-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerir Linhas de Oramento</h1>

<?php
if($orcamentoID != null)
	$values = new CActiveDataProvider('Orcamentolinha', array('criteria' => array('condition' => 'orcamento_id='. $orcamentoID,)));
else
	$values = $model->search();
	
?>	

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'orcamentolinha-grid',
	'dataProvider'=>$values,
	'columns'=>array(
		'id',
		'descricao',
		'valor',
		'produto_id',
		'orcamento_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
