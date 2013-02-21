<?php
/* @var $this FotografiaController */
/* @var $model Fotografia */

$this->breadcrumbs=array(
	'Album '. $albumID =>array('/album/'.$albumID),
	'Gerir',
);

$this->menu=array(
	array('label'=>'Criar Fotografia', 'url'=>array('create')),
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


<?php
if($albumID != null)
	$values = new CActiveDataProvider('Fotografia', array('criteria' => array('condition' => 'album_id='. $albumID,)));
else
	$values = $model->search();
	
?>	
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'fotografia-grid',
	'dataProvider'=>$values,
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
