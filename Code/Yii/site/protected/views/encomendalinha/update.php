<?php
/* @var $this EncomendalinhaController */
/* @var $model Encomendalinha */

$this->breadcrumbs=array(
	'Encomenda'=>array('encomendalinha/admin?EncomendaID='.$model->encomenda_id),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);
?>

<h1>Editar Linha <?php echo $model->id; ?> da Encomenda</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>