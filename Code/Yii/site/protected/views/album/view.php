<?php
/* @var $this AlbumController */
/* @var $model Album */

$this->breadcrumbs=array(
	'Albuns'=>array('index'),
	$model->nome,
);

if (!Yii::app()->user->isGuest) {
	$this->menu=array(
		array('label'=>'Todos os Albuns', 'url'=>array('index')),
		array('label'=>'Criar album', 'url'=>array('create')),
		array('label'=>'Editar Album', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Eliminar Album', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem a certeza que pretende eliminar este item?')),
		array('label'=>'Adicionar Fotografia', 'url'=>array('/fotografia/CreateInAlbum/AlbumID/'.$model->id)),
		array('label'=>'Gerir Fotografias', 'url'=>array('AdminFotos')),

	);
}
?>

<h1><?php echo $model->nome; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'data',
	),
));
 ?>
<br/>
<h1>Fotografias</h1>

<?php
	/* http://www.yiiframework.com/wiki/428/drills-search-by-a-has_many-relation/ */
	/* http://www.yiiframework.com/doc/guide/1.1/en/database.arr */
	
	// este foreach devolve todo o caminho da fotografia
	foreach ($model->fotografias as $foto){
		echo '<br/><br/>';
		echo CHtml::image(Yii::app()->request->baseUrl.'/images/fotos/'.$foto->path,"image",array("width"=>200));
		echo '<h6>Descricao:</h6>'.$foto->descricao;
		echo '<h6>ID do produto:</h6>'.$foto->produto_id;
	}

	/* isto é só para testar */
	/* faz o dump da variável $model->fotografias, ou seja, mostra todo o conteúdo da variável */
	// echo '<br/><br/><h2>Isto e o vardump da variavel $model->fotografias:</h2>';
	// echo CVarDumper::dump($model->fotografias, 3, true);
	
?>
