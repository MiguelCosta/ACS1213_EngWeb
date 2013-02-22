<?php
/* @var $this OrcamentolinhaController */
/* @var $model Orcamentolinha */

$this->breadcrumbs=array(
	'Orcamento'=>array('orcamentolinha/admin?OrcamentoID='.$model->orcamento_id),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

?>

<h1>Editar Linha <?php echo $model->id; ?> do Orcamento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>