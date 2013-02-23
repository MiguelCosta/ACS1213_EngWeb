<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
			<? $this->widget('ext.cssmenu.CssMenu',array(
					'items'=>array(
							array('label'=>'Ínicio', 'url'=>array('/site/index')),
							array('label'=>'Produtos', 'url'=>array('/produto/index'), 'items'=>array(
									array('label'=>'Todos os produtos','url'=>array('/produto/index'), 'visible'=>Yii::app()->user->isAdmin()),
									array('label'=>'Gerir produtos','url'=>array('/produto/admin'), 'visible'=>Yii::app()->user->isAdmin()),
							)),
							array('label'=>'Galeria','url'=>array('/album/index'), 'items'=>array(
									array('label'=>'Todos os albuns','url'=>array('/album/index'), 'visible'=>Yii::app()->user->isAdmin()),
									array('label'=>'Gerir albuns','url'=>array('/album/admin'), 'visible'=>Yii::app()->user->isAdmin()),
							)),
							array('label'=>'|', 'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Orçamentos','url'=>array('/orcamento/index'), 'items'=>array(
									array('label'=>'Todos os orçamentos','url'=>array('/orcamento/index'), 'visible'=>Yii::app()->user->isAdmin()),
									array('label'=>'Gerir orçamentos','url'=>array('/orcamento/admin'), 'visible'=>Yii::app()->user->isAdmin()),
							), 'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Encomendas','url'=>array('/encomenda/index'), 'items'=>array(
									array('label'=>'Todas as encomendas','url'=>array('/encomenda/index'), 'visible'=>Yii::app()->user->isAdmin()),
									array('label'=>'Gerir encomendas','url'=>array('/encomenda/admin'), 'visible'=>Yii::app()->user->isAdmin()),
							), 'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Sobre a Empresa', 'url'=>array('/site/page', 'view'=>'about'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Contactos', 'url'=>array('/site/contact'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'|'),
							array('label'=>'Procurar', 'url'=>array('/site/search')),
							//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							//array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
							array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
							array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Registar"), 'visible'=>Yii::app()->user->isGuest),
							array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Perfil"), 'visible'=>!Yii::app()->user->isGuest),
							array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),
					),
			));
			//echo CVarDumper::dump(Yii::app()->getModule('user'), 3, true);
			?>

		</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Grupo 2.<br/>
		Todos os direitos reservados.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
