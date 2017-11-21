<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php">首页</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item<?php  if(strstr($_SERVER["REQUEST_URI"],"prediction")) {echo " active";}?>">
        <a class="nav-link" href="prediction.php">吃饭预测</a>
      </li>
      <li class="nav-item<?php  if(strstr($_SERVER["REQUEST_URI"],"history")) {echo " active";}?>">
        <a class="nav-link" href="history.php">吃饭历史</a>
      </li>
      <!-- <li class="nav-item<?php  if(strstr($_SERVER["REQUEST_URI"],"model")) {echo " active";}?>">
        <a class="nav-link disabled" href="model.php">模型分析</a>
      </li> -->
      <li class="nav-item dropdown <?php  if(strstr($_SERVER["REQUEST_URI"],"model")) {echo " active";}?>">
            <a class="nav-link dropdown-toggle" href="model.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">模型分析</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">食堂距离</a>
              <a class="dropdown-item" href="#">等待时长</a>
              <a class="dropdown-item" href="#">满意度</a>
              <a class="dropdown-item" href="#">需求程度</a>
            </div>
          </li>
    </ul>
  </div>
</nav>
