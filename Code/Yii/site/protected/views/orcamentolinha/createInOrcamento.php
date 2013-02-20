<?php
/* @var $this OrcamentoLinhaController */
/* @var $model OrcamentoLinha */

$this->breadcrumbs=array(
	'Linhas de Orcamento'=>array('index'),
	'Criar',
);

?>

<h1>Criar Linha de Orcamento</h1>

<?php echo $this->renderPartial('_formInOrcamento', 
		array('model'=>$model,
				'orcamentoID'=>$orcamentoID)); ?>