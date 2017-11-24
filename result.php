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
    <div class="question">
	    <h3>(*^▽^*)经过精密的计算，今天<a id="order"></a>适合吃的是<br/><a class="display-4" id="selectedCateen"></a>的<a class="display-4" id="selectedFood"></a>哦~(*·w·*)~</h3>
	    <div class="btn-group-vertical">
	      <button type="button" class="btn btn-outline-secondary" id="btnQ1A0" selected=false>A.愉快同意(o´ω`o)و</button>
	      <button type="button" class="btn btn-outline-secondary" id="btnQ1A1" selected=false>B.残忍拒绝o(￣ヘ￣o＃)</button>
	      <button type="button" class="btn btn-outline-secondary" id="btnQ1A2" selected=false>C.重头再来</button>
	    </div>
			<br><br>
			<!-- <button type="button" class="btn btn-primary btn-prdct" onclick="btnPredict()">试试看</button> -->

		</div>
	</main>

  <script type ="text/javascript">
    function fillResult() {
      var cateenName;
      var foodName;
      var tempResultS = JSON.parse(localStorage.getItem("tempResultS"));
      // alert(tempResultS);

      if (tempResultS == null) {
        alert("您今天还没有预测过哦，先去预测吧！");
        location.href="prediction.php";
      }

      if (tempResultS.length>=4) {
        document.getElementById("order").innerHTML = "最";
      }
      else if (tempResultS.length>=3) {
        document.getElementById("order").innerHTML = "第二";
      }
      else if (tempResultS.length>=2) {
        document.getElementById("order").innerHTML = "第三";
      }
      else {
        location.href="sptime.php"
        return ;
      }

      switch (parseInt(tempResultS[0]/5)) {
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
      switch (tempResultS[0]%5) {
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
          // foodName = "啥都没吃";
      }

      document.getElementById("selectedCateen").innerHTML = cateenName;
      document.getElementById("selectedFood").innerHTML = foodName;
    }
    window.onload = fillResult;

    function btnSeletcted(btnGrp,btnNum){
      btnId="btnQ"+btnGrp+"A"+btnNum;
      for(var i=0; i<3; i++) {
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

    function btnAccept() {
      var tempResultS = JSON.parse(localStorage.getItem("tempResultS"));
      var foodHistory = JSON.parse(localStorage.getItem("foodHistory"));
      foodHistory.push([parseInt(tempResultS[0]/5),tempResultS[0]%5]);
      localStorage.setItem("foodHistory", JSON.stringify(foodHistory));
			localStorage.removeItem("tempResultS");
      location.href="history.php"
    }

    function btnRefuse() {
      var tempResultS = JSON.parse(localStorage.getItem("tempResultS"));
      tempResultS.splice(0,1);
      localStorage.setItem("tempResultS", JSON.stringify(tempResultS));
			if(tempResultS.length>=2) {
				location.reload();
			}
			else {
				location.href="sptime.php"
			}
    }

    function btnReturn() {
      location.href="prediction.php";
      localStorage.removeItem("tempResultS");
    }

    document.getElementById("btnQ1A0").addEventListener("click",function() {
      // btnSeletcted(1,0);
      btnAccept();
    });
    document.getElementById("btnQ1A1").addEventListener("click",function() {
      // btnSeletcted(1,1);
      btnRefuse();
    });
    document.getElementById("btnQ1A2").addEventListener("click",function() {
      // btnSeletcted(1,2);
      btnReturn();
    });
  </script>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
