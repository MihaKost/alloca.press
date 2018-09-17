<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=UTF-8>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="image/x-icon" href="/favicon.ico" rel="shortcut icon">
	<meta content="allocacoc.ru" name="allocacoc">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans+Caption|Roboto" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<title>alloсacoc Россия</title>
	<meta content="allocacoc, Allocacoc, Аллокакок, PowerCube, розетка, разветвитель, удлинитель" name="keywords">
	<meta content="" name="description">
	<meta property="og:title" content="allocacoc Россия" />
	<meta property="og:description" content="allocacoc Россия" />
	<meta property="og:url" content= "http://allocacoc.ru/" />
	</head>
	<body>
	<header>
		<nav class="navbar-header">
			<div class="container">
				<div class="navbar-brand"><a href="/" title="На главную ALLOCACOC"><img src="images/allocacoc-logo.png" alt="allocacoc logo"/></a></div>
				<div class="toggle-nav">&#9776;</div>
				<div class="navbar-menu" id="nav-menu">
					<ul>
						<li class="drop-down"><a href="catalog.php" title="Каталог">Каталог</a>
							<ul class="drop-menu">
									<li><a href="product.php?productid=<?php echo $cat['productid']; ?>" title="<?php echo $cat['title']; ?>"><?php echo $cat['title']; ?></a></li>
							</ul>
						</li>
						<li><a href="buy.php" title="Где купить">Где купить</a></li>
						<li><a href="media.php" title="Медиа">Медиа</a></li>
						<li><a href="about.php" title="О компании">О компании</a></li>
						<li><a href="contacts.php" title="Контакты">Контакты</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/style.js"></script>