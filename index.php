<?php require_once 'autoload.php' ?>
<?php $app = new Controller () ?>
<?php $app->instanceObj() ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>AutoSys | BH</title>
	<link rel="stylesheet" href="/trabalho_web/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/trabalho_web/css/style.css">
</head>
<body>
<div class="container-fluid ">
	<header class="top-header fixed row">
		<?php $app->getObj('view')->getNav() ?>
		<?php #require_once 'views/nav_bar_top.php' ?>
	</header>
	<section class="row container center">

		<?php $_SESSION['app'] = $app ?>
		<?php $app->getObj('view')->page_content(URI) ?>
		<?php #require_once 'views/login.php' ?>
		<?php #require_once 'views/load_content.php' ?>
		<?php #var_dump(URI) ?>
	</section>
</div>
</body>
<script src="/trabalho_web/js/jquery.min.js"></script>
<script src="/trabalho_web/js/bootstrap.min.js"></script>
<script src="/trabalho_web/js/script.js"></script>
</html>
