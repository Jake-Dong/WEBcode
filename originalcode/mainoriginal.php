
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
		function pop_up_posttwo()
			{
			window.open("", "mypop", "width=650, height=450, scrollbars=yes");
			document.diagram2.action = "popuptwo.php";
			document.diagram2.target = "mypop";
			document.diagram2.submit();
			}
	</script>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
		<div id="wrapper">
			<!-- Main -->
			<section id="main">
				<header>

					<span class="avatar"><img src="images/avatar.jpg" alt="" /></span>
					<h1>FootFoot</h1>
                        <?php 
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
                        <div>
							<input type="button" value="ok" onclick="javascript:pop_up_post();">

                        </div>
                        <h3 style = 'margin-top :10px; '>알고있는 신발이 없다면!</h3>
					<form name="diagram2" method="post" >   
						<p style="font-size: 9px;">평소 사이즈
							<input type="text" name = 'nomalsize' value = <?php echo $_SESSION['nomalsize'] ?> style="text-align:center; width:100px; height:30px; font-size: small; margin-left: auto; margin-right: auto;" placeholder="ex)265" maxlength=3 > 
						</p>                       
						<div style="font-size: 9px; float:right;" >발볼
							<select name="footarea" style="width:150px; height:30px; font-size: small; ">
                            <option value= <?php echo $_SESSION['footarea'];?>>
                                <?php echo $_SESSION['footarea'];?>
                            </option>
								<option value="short">좁다</option>
								<option value="littleshort">조금좁다</option>
								<option value="nomal">보통</option>
								<option value="littlelage">조금넓다</option>
								<option value="large">넓다</option>
							</select>
                        </div>
                        <div style="font-size: 9px; float:left;"> 평소 구매 사이즈
							<select name="nomalbuysize" style="width:150px; height:30px; font-size: small; ">
								<option><?php echo $_SESSION['nomalbuysize'] ?></option>
								<option value="small">작게신는다</option>
								<option value="compact">정사이즈</option>
								<option value="large">크게신는다</option>
							</select>
                        </div><br><br>
                        
                        <div style="font-size: 9px; float:left;">평소 선호 브랜드
							<input type="text" name = 'brand' value = <?php echo $_SESSION['brand'] ?> style="text-align:center; width:150px; height:30px; font-size: small; " placeholder="ex)아디다스 , ex)나이키 , ex)반스">
						</div>
						<div style="font-size: 9px; float:right;">잘 신는 신발
							<input type="text" name = 'likeshoes' value = <?php echo $_SESSION['likeshoes'] ?> style="text-align:center; width:150px; height:30px; font-size: small; " placeholder="ex)이지부스트 , ex)휠라디스랩터2">
						</div>
					</form>	
						<ul class="actions special">
							<input type="button" value="ok" onclick="javascript:pop_up_posttwo();">
						</ul>
						<a href="logout.php">
							<input type="button" value="logout">
						</a>
				</header>
			</section>
			

			
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