<?php
/* @var $this EncomendaController */
/* @var $model Encomenda */

$this->breadcrumbs=array(
	'Encomendas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Ver Encomendas', 'url'=>array('index')),
	array('label'=>'Criar Encomenda', 'url'=>array('create')),
	array('label'=>'Editar Encomenda', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Encomenda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerir Encomendas', 'url'=>array('admin')),
	array('label'=>'Adicionar Linha de Encomenda', 'url'=>array('/encomendalinha/CreateInEncomenda/EncomendaID/'.$model->id)),
);
?>

<h1>Encomenda #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'serie',
		'numero',
		'data',
		'anexos',
		'estado',
		'users_id',
	),
)); ?>
<br/>
<h1> Pedidos </h1>
<?php
	/* http://www.yiiframework.com/wiki/428/drills-search-by-a-has_many-relation/ */
	/* http://www.yiiframework.com/doc/guide/1.1/en/database.arr */
	
	foreach ($model->linhas as $linha){
		echo '<br/><br/>';
		echo '<h6>ID da Linha:</h6>'.$linha->id;
		echo '<h6>Descrição:</h6>'.$linha->descricao;
		echo '<h6>Produto:</h6>'.$linha->produto_id;
	}

	/* isto é só para testar */
	/* faz o dump da variável $model->fotografias, ou seja, mostra todo o conteúdo da variável */
	echo '<br/><br/><h2>Isto e o vardump da variavel $model->fotografias:</h2>';
	echo CVarDumper::dump($model->linhas, 3, true);
	
?>