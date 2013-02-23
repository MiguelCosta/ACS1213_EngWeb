
<?php
$this->pageTitle=Yii::app()->name;
$this->breadcrumbs=array(
		'Procurar',
);
?>

<div class="search" >
	<?php $this->widget('application.extensions.search.GoogleSearch'); ?>
</div>


<div style="visibility: hidden; position: absolute;">
	<?php 
	// Isto aqui é só para enganar... por alguma razão, a procura
	// só funciona quando tem outro widget
	$dataProvider=new CActiveDataProvider('Produto');
	$this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'/Produto/_view',

)); ?>
</div>
