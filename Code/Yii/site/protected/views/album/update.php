<?php
/* @var $this AlbumController */
/* @var $model Album */

$this->breadcrumbs=array(
	'Albums'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Ver Albuns', 'url'=>array('index')),
	array('label'=>'Criar Album', 'url'=>array('create')),
	array('label'=>'Ver Album', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerir Albuns', 'url'=>array('admin')),
);
?>

<h1>Editar Album <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>