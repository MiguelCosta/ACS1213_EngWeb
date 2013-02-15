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

<h1>Gerir Orcamentolinhas</h1>

<p>
Pode utilizar os operadores (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ou <b>=</b>) no inicio de cada pesquisa para especificar como a comparacao deve ser feita.
</p>

<?php echo CHtml::link('Pesquisa Avancada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'orcamentolinha-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
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
