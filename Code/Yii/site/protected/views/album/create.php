<?php
/* @var $this AlbumController */
/* @var $model Album */

$this->breadcrumbs=array(
	'Albuns'=>array('index'),
	'Criar Album',
);

$this->menu=array(
	array('label'=>'Ver Albuns', 'url'=>array('index')),
	array('label'=>'Gerir Albuns', 'url'=>array('admin')),
);
?>

<h1>Criar Album</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>