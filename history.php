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

	<main role="main" class="container">
		<ul class="list-group" id="list" style="white-space: pre-line">

		</ul>
	</main>

	<script type ="text/javascript">
		function fillList() {
			var history = JSON.parse(localStorage.getItem("history"));
			if(history == null || history.length <= 1) {
				history = new Array();
				history[0] = [-1,-1];
				history[1] = [-1,-1];
				localStorage.setItem("history", JSON.stringify(history));
			}

			var ul = document.getElementById("list");
			var li = new Array();
			var historyLength = history.length;
			for(var i = historyLength-1; i >= 0; i--) { // 最后这里要改成2
				var dateBefore = historyLength-i;
				var liStr;
				var liStrLast;
				var cateenName;
				var foodName;
				switch (history[historyLength-i-1][0]) {
					case 0:
						cateenName = "紫荆";
						break;
					case 1:
						cateenName = "桃李";
						break;
					case 2:
						cateenName = "丁香";
						break;
					case 3:
						cateenName = "听涛";
						break;
					case 4:
						cateenName = "清芬";
						break;
					case 5:
						cateenName = "玉树";
						break;
					case 6:
						cateenName = "芝兰";
						break;
					default:
						cateenName = "哪都没去";
				}
				switch (history[historyLength-i-1][1]) {
					case 0:
						foodName = "汤食";
						break;
					case 1:
						foodName = "米饭";
						break;
					case 2:
						foodName = "小吃";
						break;
					case 3:
						foodName = "香锅与麻辣烫";
						break;
					case 4:
						foodName = "甜点";
						break;
					default:
						foodName = "啥都没吃";
				}
				liStr = "您 "+dateBefore.toString()+" 天前的选择是：\n";
				liStr += "食堂："+cateenName+"，食物："+foodName;
				li[historyLength-i-1] = document.createElement("li");
				li[historyLength-i-1].appendChild(document.createTextNode(liStr));
				li[historyLength-i-1].setAttribute("id","history"+(historyLength-i-1).toString());
				li[historyLength-i-1].setAttribute("class", "list-group-item");
				ul.appendChild(li[historyLength-i-1]);
			}
		}
		window.onload = fillList;
	</script>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
