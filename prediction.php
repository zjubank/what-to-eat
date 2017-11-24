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

	<main role="main" class="container" id="beforePredict">
		<div class="question">
	    <h3>(*´▽｀)ノノ今天状态如何呢？</h3>
	    <div class="btn-group-vertical">
	      <button type="button" class="btn btn-outline-secondary" id="btnQ0A0" selected=false>A.饿了~超想吃饭(*❦ω❦)</button>
	      <button type="button" class="btn btn-outline-secondary" id="btnQ0A1" selected=false>B.有点饿，不是很想吃(╥╯^╰╥)</button>
	      <button type="button" class="btn btn-outline-secondary" id="btnQ0A2" selected=false>C.不饿，但是好馋呀(¯﹃¯)</button>
	      <button type="button" class="btn btn-outline-secondary" id="btnQ0A3" selected=false>D.不饿，也完全不想吃(灬°ω°灬)</button>
	    </div>
			<br><br>
			<button type="button" class="btn btn-primary btn-prdct" onclick="btnPredict()">试试看</button>

		</div>
	</main>

  <script type ="text/javascript">
			function btnPredict() {
				var hasSelectedBtn = false;
				for (var i = 0; i < 4; i++) {
					var btnGrp = 0;
					btnTestId="btnQ"+btnGrp+"A"+i;
					if (document.getElementById(btnTestId).getAttribute("selected")=="true") {
						predict(i);
						hasSelectedBtn = true;
					}
				}
				if (hasSelectedBtn == false) {
					alert("请先选择一项~");
				}
			}

			function predict(fn) {
				var coefficientX = [[3,3,2,3,2],[3,8,3,2,2],[1.7,1.7,2.3,2,2.3],[1.7,1.7,2,1,2]]
				var coefficientL = [5.5,6,4.5,7.2,7.5,10.3,8.1]
				var coefficientT = [6,3,4,8,3]
				var coefficientS = [[8,5,8,9,6,8,6],[9,8,9,4,4,8,6],[4,6,8,8,7,0,3],[9,4,7,7,7,0,0],[9,7,2,0,4,7,6]]
				var value = [["4~10","4~10","6~15","3~8","6~15","10~20","15"],
										["2~20","8~20","5~15","8","8~14","15~25","15"],
										["2~9","2~11","1~6","2~8","1~7","0","15"],
										["8~35","10~35","12~28","10~35","12~40","0","0"],
										["2~10","2~10","5","0","3~6","3~9","15"]]

				var foodHistory = JSON.parse(localStorage.getItem("foodHistory"));
				if (foodHistory == null || foodHistory.length <= 1) {
					foodHistory = new Array();
					foodHistory[0] = [-1,-1];
					foodHistory[1] = [-1,-1];
					localStorage.setItem("foodHistory", JSON.stringify(foodHistory));
				}
				var beforeL, beforeT, beforeS;
				switch (fn) {
					case 0:
						beforeL = 1.5;
						beforeT = 1.5;
						beforeS = 1.0;
						break;
					case 1:
						beforeL = 1.5;
						beforeT = 1.0;
						beforeS = 1.0;
						break;
					case 2:
						beforeL = 0.5;
						beforeT = 0.5;
						beforeS = 2.0;
						break;
					case 3:
						beforeL = 1.5;
						beforeT = 1.5;
						beforeS = 0.5;
						break;
					default:
						beforeL = 1.0;
						beforeT = 1.0;
						beforeS = 1.0;
				}
				for (var j = 0; i < 7; j++) {
					for (var i = 0; i < 5; i++) {

					}
				}

			}

      function btnSeletcted(btnGrp,btnNum){
        btnId="btnQ"+btnGrp+"A"+btnNum;
        for(var i=0; i<4; i++) {
          if(i==btnNum) {
            document.getElementById(btnId).classList.remove("btn-outline-secondary");
            document.getElementById(btnId).classList.add("btn-success");
						document.getElementById(btnId).setAttribute("selected",true);
          }
          else {
            unSelectBtnId="btnQ"+btnGrp+"A"+i;
            document.getElementById(unSelectBtnId).classList.remove("btn-success");
            document.getElementById(unSelectBtnId).classList.add("btn-outline-secondary");
						document.getElementById(unSelectBtnId).setAttribute("selected",false);
          }
        }
      }

      document.getElementById("btnQ0A0").addEventListener("click",function() {
        btnSeletcted(0,0);
      });
      document.getElementById("btnQ0A1").addEventListener("click",function() {
        btnSeletcted(0,1);
      });
      document.getElementById("btnQ0A2").addEventListener("click",function() {
        btnSeletcted(0,2);
      });
      document.getElementById("btnQ0A3").addEventListener("click",function() {
        btnSeletcted(0,3);
      });
  </script>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
