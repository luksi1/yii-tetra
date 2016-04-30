<?php
	Yii::app()->clientscript
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/jquery-ui.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/pure-min.css' )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/jquery.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/jquery-ui.custom.min.js', CClientScript::POS_END )
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
	<div class="header"><img id="header-pic" src='<?php echo Yii::app()->theme->baseUrl; ?>/img/vg_logo_intranet.png'>
	<div class="dropdown ui-state-focus">
	<a href="#" data-toggle='dropdown'>
<!--	<div class="header-userid-text"><?php echo Yii::app()->user->name; ?><span class="header-userid-icon ui-icon ui-icon-triangle-1-s"></span></div>--!>
	<div class="header-userid-text"><?php echo Yii::app()->user->name; ?></div>
	</a>

    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="?r=statistik/display">Statistik</a></li>
        <li><a href="?r=users/create">Administration</a></li>
        <li><a href="?r=site/logout">Logga ut</a></li>
    </ul>
	</div>
</div>

	<?php echo $content ?>
	</div> <!-- /container -->
	</div>
	
</body>
</html>
