<?php
/* @var $this ProdutoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Produtos',
);

if (!Yii::app()->user->isGuest) {
$this->menu=array(
	array('label'=>'Criar Produto', 'url'=>array('create')),
	array('label'=>'Gerir Produtos', 'url'=>array('admin')),
 	);
}
?>

<h1>Produtos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
