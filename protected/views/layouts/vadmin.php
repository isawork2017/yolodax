<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::: V-Admin :::</title>
<base href="<?php echo Yii::app()->baseUrl; ?>/"/>
<?php //Yii::app()->clientScript->registerPackage('adcss'); ?>
<?php //Yii::app()->clientScript->registerPackage('adbcss'); ?>
<?php //Yii::app()->clientScript->registerPackage('msc'); ?>

<link href="css/aadmin/style/css.css" rel="stylesheet" type="text/css">
<link href="css/aadmin/style/box.css" rel="stylesheet" type="text/css">
<script src="aadmin/js/jquery-1.10.2.min.js"></script>

<script src="aadmin/js/ddaccordion.js"></script>
<script src="aadmin/js/left_menus.js"></script>
<style type="text/css">
	div.wysiwyg ul.panel li {padding:0px !important;}
</style>
</head>
<body>
<div id="main">
  <div id="header">
    <div class="logo">
		<a href="<?php echo Yii::app()->baseUrl."/admin"?>"><img src="images/logo.png" /></a>
	</div>
    <div style="float:right; padding-top:50px;">
	<img src="images/aadmin/images/user-icon.gif" hspace="8" vspace="2" align="absmiddle" />

	<?php if(Yii::app()->user->isGuest){ ?>
		<strong style="color:#333;">Hello Guest</strong>
	<?php }else{ ?>
		<strong style="color:#333;">Hello <?php echo Yii::app()->user->name;?></strong> |
	<?php /*	<a href="<?php echo Yii::app()->baseUrl."/admin/settings"?>" style="color:#000;"><strong>Settings</strong></a> | */ ?>
		<a href="<?php echo Yii::app()->baseUrl."/admin/logout"?>"><strong>Logout</strong></a>
	<?php } ?>

    </div>
  </div>


<?php echo $content; ?>



</div>
<div id="fotter">
  <div class="footerin">&copy; 2014 <a href="">Cryptocoinexchagne</a>
   <span class="poweredby">
	Powered by : <a href="http://rensoftglobal.com" target="_blank">rensoftglobal.com</a>
   </span>
  </div>
</div>
</body>
</html>
