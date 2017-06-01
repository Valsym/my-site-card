<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Accumen
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120712

Modified by VitalySwipe
-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Валерий Симонов</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="/css/styles.min.css?ver=1.0">
		
		<!-- Add jQuery library -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

		<!-- Add mousewheel plugin (this is optional) 
		<script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>-->

		<!-- Add fancyBox -->
		<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
		<!--
		<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>-->

		<!-- Optionally add helpers - button, thumbnail and/or media 
		<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
		<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

		<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
		<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

		
		<!--<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>-->
		<script type="text/javascript">
		// return a random integer between 0 and number
		function random(number) {
			
			return Math.floor( Math.random()*(number+1) );
		};
		
		// show random quote
		$(document).ready(function() { 

			var quotes = $('.quote');
			quotes.hide();
			
			var qlen = quotes.length; //document.write( random(qlen-1) );
			$( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)
		});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<a href="/">Валерий</span> <span class="cms">Симонов</span></a>
				</div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">Главная</a></li>
						<li><a href="/services">Опыт работы</a></li>
						<li><a href="/portfolio">Портфолио</a></li>
						<li class="last"><a href="/contacts">Контакты</a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="side-box">
						<h3>Случайная цитата</h3>
						<p align="justify" class="quote">
						«Сайт, как живой организм, изменяется и развивается.
						Нельзя сразу написать идеальный вариант и на этом откланяться - это утопия»
						</p>
						<p align="justify" class="quote"><!-- &copy; Vitaly Swipe -->
						«Все должно быть очень просто, как текстовый файл и при этом функционально
						и тогда пользователи от нас уйдут»
						</p>
						<p align="justify" class="quote">
						«Обучение программированию не может научить быть экспертом, также как и изучение кистей и красок не может превратить кого-либо в художника.
— Eric S. Raymond»
						</p>
						<p align="justify" class="quote"><!-- &copy; Vitaly Swipe -->
						«Не волнуйтесь, если что-то не работает. Если бы всё работало, вас бы уволили.
— Mosher’s Law of Software Engineering
»
						</p>
						<p align="justify" class="quote">
						«Опытный разработчик знает, какой выбор ведет к поставленной цели, в то время как
						новичок каждый раз делает шаг в неизвестность»
						</p>
						<p align="justify" class="quote">
						«Болтовня ничего не стоит. Покажите мне код.
— Linus Torvalds»
						</p>
						<p align="justify" class="quote">
						«Иногда лучше остаться спать дома в понедельник, чем провести всю неделю отлаживая написанный в понедельник код.
— Christopher Thompson»
						</p>
					<p align="justify" class="quote">"Трудность работы с програмистом заключается в том, что вы не можете понять что он делает до тех пор пока не стало слишком поздно.
— Seymour Cray"</p>
					<p align="justify" class="quote">"Большинство хороших программистов делают свою работу не потому, что ожидают оплаты или признания, а потому что получают удовольствие от программирования.
— Linus Torvalds"</p>
					</div>
					<div class="side-box">
						<h3>Основное меню</h3>
						<ul class="list">
							<li class="first "><a href="/">Главная</a></li>
							<li><a href="/services">Опыт работы</a></li>
							<li><a href="/portfolio">Портфолио</a></li>
							<li class="last"><a href="/contacts">Контакты</a></li>
						</ul>
					</div>
				</div>
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
						<!--
						<h2>Welcome to Accumen</h2>
						<img class="alignleft" src="images/pic01.jpg" width="200" height="180" alt="" />
						<p>
							This is <strong>Accumen</strong>, a free, fully standards-compliant CSS template by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>. The images used in this template are from <a href="http://fotogrph.com/">Fotogrph</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the footer credits intact. Aside from that, have fun with it :)
						</p>
						-->
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<footer>
			<div id="page-bottom">
				<div id="page-bottom-sidebar">
					<h3>Контакты</h3>
					<div class="widget__contact">
					<ul class="list">
						<li><i class="fa fa-skype"></i>  skype: <a title="Связаться по Skype" href="skype:valsy?call">valsy</a></li>
						<li>github: <a class="soc-icon github" href="https://github.com/Valsym" target="_blank"><i class="fa fa-github mt-1"></i></a></li>
						<li><a href="https://ru.hexlet.io/u/valsy" target="_blank">Hexlet</a></li>
						<li>г. Москва</li>
						<li class="last"><i class="fa fa-envelope-o"></i>  email: <a href="mailto:mrwadson@mail.ru" title="Отправить сообщение на эл. почту" target="_blank">simonvn@yandex.ru</a></li>
					</ul>
					</div>
				</div>
				<div id="page-bottom-content">
					<h3>Обо мне</h3>
					<p>
Начиная с 2011 и до сего дня специализируюсь на WEB-разработке, PHP и Wordpress. А <a href="https://ru.hexlet.io/u/valsy" target="_blank">Хекслет</a> помогает мне  упорядочить существующие познания в PHP и JS и добавляет новые для возможности заниматься любимым делом на новом, более профессиональном уровне.
					</p>
				</div>
				<br class="clearfix" />
			</div>
			</footer>
		</div>
		<div id="footer">
			<a href="/">Валерий Симонов</a> &copy; 2017</a>
		</div>
	</body>
</html>