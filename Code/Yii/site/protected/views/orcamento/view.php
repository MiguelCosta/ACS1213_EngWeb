<?php
/* @var $this OrcamentoController */
/* @var $model Orcamento */

$this->breadcrumbs=array(
	'Orcamentos'=>array('indexByUser?UserID='.Yii::app()->user->id),
	$model->GetCodigo(),
);

$this->menu=array(
	array('label'=>'Editar Orcamento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Orcamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Adicionar Linha de Orcamento', 'url'=>array('/orcamentolinha/CreateInOrcamento/OrcamentoID/'.$model->id)),
	array('label'=>'Gerir Linhas', 'url'=>array('/orcamentolinha/admin?OrcamentoID='.$model->id)),
);
?>

<h1>Orcamento <?php echo $model->GetCodigo(); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'serie',
		'numero',
		'data',
		'anexos',
		'estado',
		//'valortotal',
		//'users_id',
		array(
			'name'=>'users_id',
			//'type'=>'html',
			'value'=>User::model()->findByPk($model->users_id)->username,
		),
		array(
			'name'=>'valortotal',
			'value'=>$model->GetValorTotal(),
		),
	),
)); ?>



<?php

$columnsArray = array('ID','Descricao','Produto','Valor');
$rowsArray = $model->GetLinhasArray();

$this->widget('ext.htmlTableUi.htmlTableUi',array(
		'collapsed'=>false,
		//'editable'=>true,
		'enableSort'=>true,
		'exportUrl'=>'site/exportTable',
		'title'=>'Detalhes',
		//'subtitle'=>'Rev 1.3.3',
		'columns'=>$columnsArray,
		'rows'=>$rowsArray,
		'footer'=>'Valor Total: '.$model->GetValorTotal(),
));
	
?>
