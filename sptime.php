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
      <h3>锵锵锵锵~~Special Time~~~<br/>
        既然什么都不想吃，不如来点新鲜的东西犒劳一下自己，如何呀？(✺ω✺)<br/>
        <a class="display-4" id="selectedSP"></a></h3>
      <div class="btn-group-vertical">
        <button type="button" class="btn btn-outline-secondary" id="btnQ2A0" selected=false>A.太好啦(/≧▽≦)/</button>
        <button type="button" class="btn btn-outline-secondary" id="btnQ2A1" selected=false>B.QAQ罢工了！自己解决吧！</button>
        <button type="button" class="btn btn-outline-secondary" id="btnQ2A2" selected=false>C.重头再来</button>
      </div>
    </div>
	</main>

  <script type ="text/javascript">
    function sptime() {
      var spChoice = [["海底捞","唇辣号","苏轼酒楼","蟹肉煲","水晶烤肉"],
        ["汤城小厨","云海肴","素虎","外婆家","桃屋"],
        ["局气","南京大牌档","wuli花甲","西门烤翅","将太无二"],
        ["虽然不得不吃点东西，但是既然什么都拒绝了，那就干脆不吃了吧！","坚持饿到下课去吃夜宵吧！","要不然再看一遍吃什么吧_(:з」∠)_","干脆点，不吃了！减肥！","买点水果凑合凑合吧(ー`´ー)	"]];
      var tempResultS = JSON.parse(localStorage.getItem("tempResultS"));
      var spXf;
      // alert("tempResultS in sptime.php:"+tempResultS);
      if (tempResultS[0] >= 0 && tempResultS[0] <= 3) {
        spXf = spChoice[tempResultS[0]];
        var randNum = parseInt(Math.random()*5,10)
        document.getElementById("selectedSP").innerHTML = spXf[randNum];
        tempResultS[0] = tempResultS[0]*5 + randNum;
        localStorage.setItem("tempResultS", JSON.stringify(tempResultS));
      }
      else {
        alert("哎呀，好像出了什么问题，请从头再来吧。注意保持设备空间充足哦~");
        location.href="prediction.php";
      }
    }

    window.onload = sptime;

    function btnAccept() {
      var tempResultS = JSON.parse(localStorage.getItem("tempResultS"));
      var foodHistory = JSON.parse(localStorage.getItem("foodHistory"));
      foodHistory.push([7,tempResultS[0]+35]);
      localStorage.setItem("foodHistory", JSON.stringify(foodHistory));

      localStorage.removeItem("tempResultS");
      location.href="history.php"
    }

    function btnReturn() {
      location.href="prediction.php";
      localStorage.removeItem("tempResultS");
    }

    document.getElementById("btnQ2A0").addEventListener("click",function() {
      btnAccept();
    });
    document.getElementById("btnQ2A1").addEventListener("click",function() {
      // 全部拒绝，return
      btnReturn();
    });
    document.getElementById("btnQ2A2").addEventListener("click",function() {
      btnReturn();
    });
  </script>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
