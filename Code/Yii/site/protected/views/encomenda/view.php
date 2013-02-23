<?php
/* @var $this EncomendaController */
/* @var $model Encomenda */

$this->breadcrumbs=array(
	'Encomendas'=>array('index'),
	$model->GetCodigo(),
);

$this->menu=array(
	array('label'=>'Editar Encomenda', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Encomenda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Adicionar Linha de Encomenda', 'url'=>array('/encomendalinha/CreateInEncomenda/EncomendaID/'.$model->id)),
	array('label'=>'Gerir Linhas', 'url'=>array('/encomendalinha/admin?EncomendaID='.$model->id)),
);
?>

<h1>Encomenda <?php echo $model->GetCodigo(); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'serie',
		'numero',
		'data',
		'anexos',
		'estado',
		//'users_id',
		array(
			'name'=>'users_id',
			//'type'=>'html',
			'value'=>User::model()->findByPk($model->users_id)->username,	
		),
	),
)); ?>
<br/>


<?php

$columnsArray = array('ID','Descricao','Produto');
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
));
	
?>