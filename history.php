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
		<br>
		<button type="button" class="btn btn-primary" onclick="clearHistory()">清空历史记录</button>
	</main>

	<script type ="text/javascript">
		function clearHistory() {
			localStorage.clear();
			location.reload();
		}

		function getSpFood(num) {
			var spChoice = [["海底捞","唇辣号","苏轼酒楼","蟹肉煲","水晶烤肉"],
        ["汤城小厨","云海肴","素虎","外婆家","桃屋"],
        ["局气","南京大牌档","wuli花甲","西门烤翅","将太无二"],
        ["虽然不得不吃点东西，但是既然什么都拒绝了，那就干脆不吃了吧！","坚持饿到下课去吃夜宵吧！","要不然再看一遍吃什么吧_(:з」∠)_","干脆点，不吃了！减肥！","买点水果凑合凑合吧(ー`´ー)	"]];
			return spChoice[parseInt(num/5)][num%5];
		}

		function fillList() {
			var foodHistory = JSON.parse(localStorage.getItem("foodHistory"));
			if (foodHistory == null || foodHistory.length <= 1) {
				foodHistory = new Array();
				foodHistory[0] = [-1,-1];
				foodHistory[1] = [-1,-1];
				localStorage.setItem("foodHistory", JSON.stringify(foodHistory));
			}

			var ul = document.getElementById("list");
			var li = new Array();
			var historyLength = foodHistory.length;
			for (var i = 0; i < historyLength; i++) { // 最后这里要改成historyLentgh-2
				var dateBefore = i+1;
				var liStr;
				var liStrLast;
				var cateenName;
				var foodName;
				switch (foodHistory[historyLength-i-1][0]) {
					case -1:
						cateenName = "哪都没去";
						break;
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
					case 7:
						cateenName = "SPTime!";
					default:
						// cateenName = "哪都没去";
				}
				switch (foodHistory[historyLength-i-1][1]) {
					case -1:
						foodName = "啥都没吃";
						break;
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
						foodName = getSpFood(foodHistory[historyLength-i-1][1]-35);
				}
				liStr = "您 "+dateBefore.toString()+" 天前的选择是：\n";
				liStr += "食堂："+cateenName+"；食物："+foodName;
				li[historyLength-i-1] = document.createElement("li");
				li[historyLength-i-1].appendChild(document.createTextNode(liStr));
				li[historyLength-i-1].setAttribute("id","foodHistory"+(historyLength-i-1).toString());
				if(cateenName == "哪都没去" || foodName == "啥都没吃") {
					li[historyLength-i-1].setAttribute("class", "list-group-item disabled");
				}
				else if (i == 0) {
					li[historyLength-i-1].setAttribute("class", "list-group-item list-group-item-danger");
				}
				else if (i == 1) {
					li[historyLength-i-1].setAttribute("class", "list-group-item list-group-item-warning");
				}
				// else if (i % 2 == 0) {
				// 	li[historyLength-i-1].setAttribute("class", "list-group-item list-group-item-light");
				// }
				else {
					li[historyLength-i-1].setAttribute("class", "list-group-item list-group-item-secondary");
				}
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
