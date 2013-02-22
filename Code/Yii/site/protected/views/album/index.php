<?php
/* @var $this AlbumController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Albuns',
);
if (Yii::app()->user->isAdmin()) {
	$this->menu=array(
		array('label'=>'Criar Album', 'url'=>array('create')),
		array('label'=>'Gerir Albuns', 'url'=>array('admin')),
	);
}
?>

<h1>Albuns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
