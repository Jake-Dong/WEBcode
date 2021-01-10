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
			window.open("", "mypop", "width=600, height=400, scrollbars=yes");
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
					<?php
						// main.php 에서 받은 정보를 DB 와 비교해서 정보를 select
						$search = $_POST['search'];					
						$host = '35.185.210.97';
						$user = 'footfootbig';
						$pw = 'footbigmaria!';
						$dbName = 'footfoot';
						$port = '3306';
						$conn =mysqli_connect($host, $user, $pw, $dbName, $port);
						$result_set = mysqli_query($conn,"SELECT * FROM shoes WHERE modelname='".$search."' and summaries IS NOT NULL"); 
						$row = mysqli_fetch_array($result_set);						
						$total_rows = mysqli_num_rows($result_set);						
						if($total_rows == 0) {
						echo'없다';
						return;
						}
					?>
					<div class = 'scale'>
						<img src= <?php echo $row['img_src']; ?>  width = '200' height = '150' >
					</div>
					<hr />
					<h2>신발 정보</h2>
					<ul style="font-size: 11px;"> 
						<li><?php echo $row['price_m']; ?> 원</li>					
						<li>브랜드:<?php echo $row['brand']; ?></li>
						<li>재품 번호: <?php echo $row['shono']; ?></li>
						<li>모델이름:<?php echo $row['modelname']; ?></li>
						<li><?php echo $row['shosex']; ?></li>			   
					</ul>
					<hr />
					<ul style="font-size: 9px;">
						<?php
						 $string = $row['summaries']; 
						 $split_string = explode('/' , $string ,5);
						 ?>
						<h1>리뷰 요약</h1>
						<li><?php echo $split_string[0]; ?></li>
						<li><?php echo $split_string[1]; ?></li>
						<li><?php echo $split_string[2]; ?></li>
					</ul>	 
        </header>	
			</section> 
			<hr />
				<h2>Thank you</h2>
			<footer id="footer">
				<ul class="copyright">
					<li>&copy; damoa</li><li>Design by: <a href="">footfoot</a></li>
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


