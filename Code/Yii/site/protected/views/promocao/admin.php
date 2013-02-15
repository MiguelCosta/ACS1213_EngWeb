<?php
/* @var $this PromocaoController */
/* @var $model Promocao */

$this->breadcrumbs=array(
	'Promocoes'=>array('index'),
	'Gerir',
);

$this->menu=array(
	array('label'=>'Ver Promocoes', 'url'=>array('index')),
	array('label'=>'Criar Promocao', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#promocao-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerir Promocoes</h1>

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
	'id'=>'promocao-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nome',
		'descricao',
		'datainicial',
		'datafinal',
		'produto_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
