<?php
/* @var $this AlbumController */
/* @var $model Album */

$this->breadcrumbs=array(
	'Albums'=>array('index'),
	$model->oid=>array('view','id'=>$model->oid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Album', 'url'=>array('index')),
	array('label'=>'Create Album', 'url'=>array('create')),
	array('label'=>'View Album', 'url'=>array('view', 'id'=>$model->oid)),
	array('label'=>'Manage Album', 'url'=>array('admin')),
);
?>

<h1>Update Album <?php echo $model->oid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>