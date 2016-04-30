<?php
	Yii::app()->clientscript
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/jquery-ui.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/pure-min.css' )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/jquery.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/jquery-ui.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap.js', CClientScript::POS_END )
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="language" content="en" />
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie8.css" />
<![endif]-->
<!-- Le styles -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/pure-min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
<!-- Le fav and touch icons -->
</head>

<body>
	<div class="container">
	<img id="header-pic" src='<?php echo Yii::app()->theme->baseUrl; ?>/img/header.jpg'>
	<div id="header-nav">
	<li><a href="?r=befolkningsinfo/create">Lägg till en ny patient</a></li>
	<li><a href="?r=statistik/view">Statistik</a></li>
	<li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo ucfirst(Yii::app()->user->id) ?></a>
	<ul class="dropdown-menu" role="menu">
	<li><a href="#">Ny användare</a></li>
	<li><a href="#">Logga ut</a></li>
	</ul>
	</li>
	</div>
	</br />
	<div id="statistik" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	Test
	</div>
	<div class="modal-body">
	Test
	</div>
	</div>

	<?php echo $content ?>
	</div> <!-- /container -->
	
</body>
</html>
