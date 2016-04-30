<?php
	Yii::app()->clientscript
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/jquery-ui.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/pure-min.css' )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/jquery-1.9.1.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/jquery-ui-1.10.3.custom.min.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/jquery.searchMeme.js', CClientScript::POS_END )
		->registerMetaTag("IE=edge",null,"X-UA-Compatible")
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
	<div class="main-container drop-down">
	<div class="header"><img id="header-pic" src='<?php echo Yii::app()->theme->baseUrl; ?>/img/vg_logo_intranet.png'></div>

	<?php echo $content ?>
	</div> <!-- /container -->
	</div>
	
</body>
</html>
