<!doctype html>
<html lang="zh-cn">

<head>
	<title>今晚吃什么</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<!-- Custom styles for this template -->
	<link href="starter.css" rel="stylesheet">
</head>

<body>
	<?php
	  require 'navbar.php';
	?>

	<main role="main">
		<div class="jumbotron">
			<div class="container">
          <h1 class="display-3">今晚吃什么</h1>
          <p>根据食堂距离、食品状态、历史满意度等为您推荐</p>
          <p><a class="btn btn-primary btn-lg" href="prediction.php" role="button">去试试看  &raquo;</a></p>
      </div>
    </div>

		<div class="container">
		<!-- Example row of columns -->
			<div class="row">
				<div class="col-md-4">
					<h2>食堂距离</h2>
					<p>起点为宿舍</p>
					</br>
					<p><a class="btn btn-secondary" href="model.php" role="button">View details</a></p>
				</div>
				<div class="col-md-4">
					<h2>等待时长</h2>
					<p>不同种类食品的制作时间不同</p>
					</br>
					<p><a class="btn btn-secondary" href="model.php" role="button">View details</a></p>
				</div>
				<div class="col-md-4">
					<h2>满意度</h2>
					<p>自身经验判断不同状态对食物的需求程度</br>与不同食堂食物带来的主观感受</p>
					<p><a class="btn btn-secondary" href="model.php" role="button">View details</a></p>
				</div>
			</div>
			<hr>
		</div> <!-- /container -->
	</main>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
