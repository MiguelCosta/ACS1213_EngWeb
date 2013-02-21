<?php
	/* @var $this FotografiaController */
	/* @var $model Fotografia */

	$this->breadcrumbs=array(
		'Albuns'=>array('/album/'),
		'Gerir',
	);
	
	Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#fotografia-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
	");
?>

<h1>Gerir Fotografias</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'fotografia-grid',
	'dataProvider'=>$model,
	'filter'=>$model,
	'columns'=>array(
		'id',
		'path',
		'descricao',
		'album_id',
		'produto_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>