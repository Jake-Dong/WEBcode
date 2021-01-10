<!DOCTYPE HTML>

<html>
	<head>
	<title>Identity by HTML5 UP</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<script>
		function pop_up_post()
			{
			window.open("", "mypop", "width=650, height=450, scrollbars=yes");
			document.diagram.action = "popup.php";
			document.diagram.target = "mypop";
			document.diagram.submit();
			}
	</script>
	</head>
	<body class="is-preload">
		<div id="wrapper">
			<section id="main">
				<header>
					<span class="avatar"><img src="images/avatar.jpg" alt="" /></span>
					<h1>FootFoot</h1>
                        <?php
							// 기존에 저장되어 있던 정보를 session 을 이용해 페이지에 저장
                            session_start();
                            if(isset($_SESSION['username'])){
                                echo "<h2 style= 'text-align:center;'>{$_SESSION['username']} 님 환영합니다.</h2>";
                            }
                            else {
                                echo "<a href='mainsign.html' style= 'text-align:center;'>로그인하기</a>";
                            }
                        ?>
					<form name="diagram" method="post" >
						<div style="font-size: 9px;">추천 사이즈가 궁굼한 신발					
                            <input type="text" name="search"  style="text-align:center; width:200px; height:30px;  font-size: small; margin-left: auto; margin-right: auto; margin-top:10px;" >
						</div>
					</form>
						<!-- javascript 를 이용해서 결과를 팝업으로 띄워 정보제공 -->
                        <div>
							<input type="button" value="ok" onclick="javascript:pop_up_post();">
                        </div>
						<a href="mainsign.php">
							<input type="button" value="logout">
                        </a>
				</header>
			</section>					
			<hr />
				<h2>Thank you</h2>
			<footer id="footer">
				<ul class="copyright">
					<li>&copy; damoa</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</footer>
		</div>
		<script>
			if ('addEventListener' in window) {
			window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
			document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
			}
		</script>
	</body>
</html>