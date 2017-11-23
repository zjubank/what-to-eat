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
				for(var i = 0; i < 4; i++) {
					var btnGrp = 0;
					btnTestId="btnQ"+btnGrp+"A"+i;
					if(document.getElementById(btnTestId).getAttribute("selected")=="true") {
						predict(i);
						hasSelectedBtn = true;
					}
				}
				if(hasSelectedBtn == false) {
					alert("请先选择一项~");
				}
			}

			function predict(num){
				// if(num==3) alert("您别吃了");

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
