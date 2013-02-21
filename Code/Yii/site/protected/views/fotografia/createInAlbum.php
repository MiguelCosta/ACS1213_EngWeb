<?php
/* @var $this FotografiaController */
/* @var $model Fotografia */

$this->breadcrumbs=array(
	'Album '.$albumID=>array('/album/'.$albumID),
	'Criar',
);

?>

<h1>Criar Fotografia</h1>

<?php echo $this->renderPartial('_formInAlbum', 
		array('model'=>$model,
				'albumID'=>$albumID)); ?>