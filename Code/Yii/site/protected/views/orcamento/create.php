<?php
/* @var $this OrcamentoController */
/* @var $model Orcamento */

$this->breadcrumbs=array(
	'Orcamentos'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Ver Orcamentos', 'url'=>array('index')),
	array('label'=>'Gerir Orcamentos', 'url'=>array('admin')),
);
?>

<h1>Criar Orcamento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>