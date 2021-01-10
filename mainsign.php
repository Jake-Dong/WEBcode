<!DOCTYPE HTML>

<html>
	<head>
		<?php include './head.php' ?>
	</head>
	<body class="is-preload">
	<div id="wrapper">
	<section id="main">
	<header>
		<span class="avatar">
			<img src="images/avatar.jpg" alt="" />
		</span>
		<h1>FootFoot</h1>
		<p>Find your foot size!</p>
		<p style ='font-size: 9px;'>각종 포털사이트의 리뷰를 모두모아 요약했습니다! 여러곳에서 리뷰를 비교하지마세요!</p>
	</header>
	<hr />
	<h2>signup and start!</h2>
	<!-- form tag 를 사용하여 mysqllogin.php 로 post 형태로 전송 -->
	<form action="mysqllogin.php" method="POST">
		<div class="fields">
			<div class="field">
				<input type="text" name="email" placeholder="Email" />
			</div>
			<div class="field">
				<input type="password" name="userpw" placeholder="password">
			</div>
		</div>
		<!-- sumit input 을 사용함과 동시에 a tag 로 링크. -->
		<ul class="actions special">
			<a href="mysqllogin.php">
				<input type="submit" value="get start">
			</a>	
		</ul>
	</form>
		<a href="getinfophp.php">
			<input type="button" value="sign up">
		</a>
	<hr />
	</section>
	<footer id="footer">
		<ul class="copyright">
			<li>&copy; damoa</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</footer>
	</div>
		<!-- Java Script 를 사용하여 효과추가 -->
		<script>
		console.log('addEventListener' in window)
		if ('addEventListener' in window) {
		window.addEventListener('load', function() { 
		document.body.className = document.body.className.replace(/\bis-preload\b/, ''); 
		});
		document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
		}
		</script>
	</body>
</html>