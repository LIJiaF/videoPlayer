<div id="header">
  <div class="con">
    <h1 class="logo png">
    	<a href="./" title="86电影网会员管理系统"></a>
    </h1>
    <div class="aik_info">
    <?php echo $aik['admin_name']?>&nbsp;&nbsp;<a href="./login.php?act=logout">退出</a>
    </div>
    <ul class="aik_nav">
			<li><a href="./"<?php echo $nav=='home'?' class="this"':''?> title="后台状态"><span style="color:#ffffff">● </span>后台状态</a></li>
			<li><a href="./setting.php"<?php echo $nav=='setting'?' class="this"':''?> title="全局设置"><span style="color:#ffffff">● </span>全局设置</a></li>
			<li><a href="https://www.i0886.com" target="_blank" title="86电影网"><span style="color:#ffffff">● </span>86电影网</a></li>
    </ul>
    
    <!--版权-->
    <div class="admin-banquan">
    	<?php include('foot.php'); ?>
    </div>
  </div>
</div>
<!--右侧顶部-->
<div id="head-right">
	
</div>