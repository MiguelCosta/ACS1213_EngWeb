<?php
/* @var $this OrcamentoController */
/* @var $model Orcamento */

$this->breadcrumbs=array(
	'Orcamentos'=>array('index'),
	'Criar',
);
?>

<h1>Criar Orcamento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>