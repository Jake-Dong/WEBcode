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
		<!-- Wrapper -->
		<div id="wrapper">
			<!-- Main -->
			<section id="main">
				<header>

					<span class="avatar"><img src="images/avatar.jpg" alt="" /></span>
					<h1>FootFoot</h1>

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
						
						
						<h3>당신의 발 정보를 입력해주세요</h3>
						<p style="font-size: 9px;">평소 사이즈
							<input type="text" name = 'nomalsize' style="text-align:center; width:100px; height:30px; font-size: small; margin-left: auto; margin-right: auto;" placeholder="ex)265" maxlength=3 > 
						</p>                       
						<p style="font-size: 9px;" >발볼
							<select name="footarea" style="width:150px; height:30px; font-size: small; margin-left: auto; margin-right: auto;">
								<option value="null">click</option>
								<option value="short">좁다</option>
								<option value="littleshort">조금좁다</option>
								<option value="nomal">보통</option>
								<option value="littlelage">조금넓다</option>
								<option value="large">넓다</option>
							</select>
						</p>
							<h3>당신의 신발 정보를 입력해주세요</h3>
						<p style="font-size: 9px;">평소 선호 브랜드
							<input type="text" name = 'brand' style="text-align:center; width:300px; height:30px; font-size: small; " placeholder="ex)아디다스 , ex)나이키 , ex)반스">
						</p>
						<p style="font-size: 9px;">잘 신는 신발
							<input type="text" name = 'likeshoes' style="text-align:center; width:300px; height:30px; font-size: small; " placeholder="ex)이지부스트 , ex)휠라디스랩터2">
						</p>
						<p style="font-size: 9px;"> 평소 구매 사이즈
							<select name="nomalbuysize" style="width:150px; height:30px; font-size: small; margin-left: auto; margin-right: auto;">
								<option>click</option>
								<option value="small">작게신는다</option>
								<option value="compact">정사이즈</option>
								<option value="large">크게신는다</option>
							</select>
						</p>
						<ul class="actions special">
							<input type="submit" value="ok">
						</ul>
						<a href="logout.php">logout</a>
				</header>
			</section>
				

			</form>
			<hr />
					<h2>Thank you</h2>
			<!-- Footer -->
			<footer id="footer">
			<ul class="copyright">
			<li>&copy; damoa</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>
			</footer>

		</div>

		<!-- Scripts -->
		<script>
		if ('addEventListener' in window) {
		window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
		document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
		}
		</script>

	</body>
</html>