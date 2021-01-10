
<!DOCTYPE HTML>

<html>
	<head>
		<title>Identity by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="wrapper">
			<section id="main">
				<header>
					<span class="avatar"><img src="images/avatar.jpg" alt="" /></span>
					<h1>FootFoot</h1>
					<!-- form tag 를 이용해 고객 회원가입 정보를 process_info.php 로 전송 -->
					<form action='process_info.php' method="POST">
                        <p style="font-size: 12px;"> 기본정보
							<p style ="font-size: 9px;">이름
                            <input type="text" name="username" style="text-align:center; width:150px; height:30px; margin-left: auto; margin-right: auto;" placeholder ='Name'>
						</p>
                        <p style = "font-size: 9px;">e-mail
                            <input type="text" name="email"  placeholder="Email" >
						</p>
						<P style = "font-size: 9px;">password
							<input type="password" name="userpw" placeholder="4자리 이상" minlength= 4 >							
						</P>
						<p style ="font-size: 9px;">성별
						<select name="gender">
							<option value="noselect">gender</option>
							<option value="men">men</option>
							<option value="women">women</option>
						</select>
						</p>
						<div>
							<p style ="font-size: 9px;">나이
							<select name = "age" >
								<option value="noselect">선택</option>
								<option value="10">10대</option>
								<option value="20">20대</option>
								<option value="30">30대</option>
								<option value="40">40대</option>
							</select>
							</p>
						</div>
						<ul class="actions special">
							<input type="submit" value="ok">
						</ul>		
				</header>
			</section>
			</form>
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