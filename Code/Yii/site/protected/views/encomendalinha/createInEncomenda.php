<?php
/* @var $this EncomendalinhaController */
/* @var $model Encomendalinha */

$this->breadcrumbs=array(
	'Encomendalinhas'=>array('index'),
	'Criar',
);
?>

<h1>Criar Linha de Encomenda</h1>

<?php echo $this->renderPartial('_formInEncomenda', 
		array('model'=>$model,
				'encomendaID'=>$encomendaID)); ?>