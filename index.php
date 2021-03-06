<?php include ('./data/beipy.inc.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>
			<?php echo $aik['title'];?>
		</title>
		<meta name="keywords" content="<?php echo $aik['keywords'];?>" />
		<meta name="description" content="<?php echo $aik['description'];?>" />
		<meta name=viewport content="width=device-width,anicital-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/base64.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<!--微博引入关注插件-->
		<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="css/style.css" />
		<!--浏览器标签ico-->
		<link rel="shortcut icon" href="img/favicon.ico" />
		<!--书签标签-->
		<link rel="bookmark" href="img/tvico.png" />
		<!--苹果桌面标题-->
		<meta name="apple-mobile-web-app-title" content="86电影网VIP视频解析">
		<!--苹果桌面图标-->
		<link rel="apple-touch-icon-precomposed" sizes="180x180" href="img/tvlogo.png">
	</head>
	<body>
	<header class="navbar-fixed-top">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- 手机自适应样式 -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">导航切换</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
							<!--logo图标-->
							<a class="navbar-brand logo" href="/"></a>
						</div>
						<!-- pc导航样式 -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li>
									<a href="/" target="_blank">首页</a>
								</li>
								
								<li>
									<a  href="https://www.i0886.com/a/dianying.html" target="_blank" title="最新电影">最新电影</a>
								</li>

								<li>
									<a href="https://www.i0886.com/a/lianxuju.html" target="_blank" title="最新电视剧">最新电视剧</a>
								</li>
								
								<li>
									<a href="https://www.i0886.com/a/jiqingpian.html" target="_blank" title="最新激情片">最新激情片</a>
								</li>
								
								<li>
									<a href="https://www.i0886.com/a/dongman.html" target="_blank" title="最新激情片">最新动漫</a>
								</li>
								
								<?php echo $aik['topnav'];?>
							</ul>
							<!--导航 右侧-->
							<ul class="nav navbar-nav navbar-right">
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">关于我们<span class="caret"></span></a>
									<ul class="dropdown-menu">
									
									    <li>
											<a href="<?php echo $aik['qixia'];?>" target="_blank" title="旗下网站">旗下网站</a>
										</li>
									
										<li>
											<a href="<?php echo $aik['lianxi'];?>" target="_blank" title="合作洽谈，联系我们">联系我们</a>
										</li>
										
										<li>
											<a href="<?php echo $aik['weibourl'];?>" target="_blank" title="微博">微博</a>
										</li>
										
										<li>
											<a href="<?php echo $aik['qun'];?>" target="_blank" title="加群获得更多权益">QQ群</a>
										</li>
										
										<li role="separator" class="divider"></li>
										<li>
											<a><p>版本：V2.0</p></a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>
	
		<!--视频box区域-->
		<div class="container-fluid video-box">
			<div class="container ">
			
			<div class="url-box">
					<div class="input-group">
						<input type="text" id="url" class="form-control url-text" aria-label="Text input with segmented button dropdown" placeholder="输入视频地址，点击解析播放（支持优酷、爱奇艺、腾讯视频、哔哩哔哩、芒果TV等平台视频）" title="复制视频地址，粘贴到此处点击解析播放">
						<div class="input-group-addon">
							<select class="url-c url-text" title="如果视频无法播放，请尝试更换解析线路" id="jk">
								<option value="<?php echo $aik['jiekou1'];?>" selected>
									<?php echo $aik['jiekou1name'];?>
								</option>
								<option value="<?php echo $aik['jiekou2'];?>">
									<?php echo $aik['jiekou2name'];?>
								</option>
								<option value="<?php echo $aik['jiekou3'];?>">
									<?php echo $aik['jiekou3name'];?>
								</option>
								<option value="<?php echo $aik['jiekou4'];?>">
									<?php echo $aik['jiekou4name'];?>
								</option>
								<option value="<?php echo $aik['jiekou5'];?>">
									<?php echo $aik['jiekou5name'];?>
								</option>
								<option value="<?php echo $aik['jiekou6'];?>">
									<?php echo $aik['jiekou6name'];?>
								</option>
							</select>
						</div>
						<div class="input-group-btn">

							<button type="button" class="btn btn-default btn-play" title="点击解析开始播放" onclick="play()">解析播放</button>
						</div>
					</div>
				</div>
			
				<div class="tit-name">
					<span>正在播放:</span>
					<h1 id="tittext">全网VIP解析测试</h1>
				</div>
				<iframe id="palybox" src="<?php echo $aik['jiekou1'];?><?php echo $aik['maurl'];?>" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen="true" allowtransparency="true"></iframe>

			
				<div class="tit-gg">
					<a href="<?php echo $aik['gonggaourl'];?>" target="_blank" style="color: #ff4040" ><?php echo $aik['gonggao'];?></a>
				</div>
				<div class="guanggaoBox"><?php echo $aik['guanggao'];?></div>
			</div>
		</div>
		<div class="container-fluid logo-box">
			<div class="container ">
				
			</div>
		</div>
		<!--平台logo	-->
		<div class="container-fluid logo-box">
			<div class="container ">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-tit">
							<h4>现已支持视频网站</h4>
							<p>支持全网视频网站解析，更多惊喜可以自行探索</p>
						</div>
					</div>
				</div>
				<!--第一行-->
				<div class="row">
				
				    <div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://www.youku.com/" target="_blank" title="优酷">
								<img class="img-responsive" src="img/logo/youkulogo.png" />
							</a>
						</div>
					</div>
					
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.iqiyi.com/" target="_blank" title="爱奇艺">
								<img class="img-responsive" src="img/logo/iqiyilogo.png" />
							</a>
						</div>
					</div>
				
				    <div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://v.qq.com/" target="_blank" title="腾讯视频">
								<img class="img-responsive" src="img/logo/qqlogo.png" />
							</a>
						</div>
					</div>
					
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.bilibili.com/" target="_blank" title="哔哩哔哩">
								<img class="img-responsive" src="img/logo/bilibili.png" />
							</a>
						</div>
					</div>
					
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://www.mgtv.com/" target="_blank" title="芒果TV">
								<img class="img-responsive" src="img/logo/hunantvlogo.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.le.com/" target="_blank" title="乐视">
								<img class="img-responsive" src="img/logo/letvlogo.png" />
							</a>
						</div>
					</div>
				</div>
				<!--第一行结束-->
				<!--第二行开始-->
				<div class="row">
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.baofeng.com/" target="_blank" title="暴风影音">
								<img class="img-responsive" src="img/logo/baofeng.png" />
							</a>
						</div>
					</div>
					
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.fun.tv/" target="_blank" title="风行视频">
								<img class="img-responsive" src="img/logo/fengxing.png" />
							</a>
						</div>
					</div>
					
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="https://tv.sohu.com" target="_blank" title="搜狐视频">
								<img class="img-responsive" src="img/logo/sohulogo.png" />
							</a>
						</div>
					</div>
					
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://www.acfun.cn/" target="_blank" title="Ac弹幕网">
								<img class="img-responsive" src="img/logo/acfun.png" />
							</a>
						</div>
					</div>
					
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://www.pptv.com/" target="_blank" title="PP视频">
								<img class="img-responsive" src="img/logo/pptv.png" />
							</a>
						</div>
					</div>
					
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://vip.1905.com/" target="_blank" title="1905电影网">
								<img class="img-responsive" src="img/logo/1905logo.png" />
							</a>
						</div>
					</div>
				</div>
				<!--第二行结束-->
				<!---->
			</div>
		</div>
		
		<div class="container-fluid logo-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-tit">
							<h4>联系我们</h4>
							<p>86电影网VIP视频解析只用于学习交流,请勿应用于商业用途,否则后果自负.</p>
							<title="扫描二维码联系我们">
								<center><img class="img-responsive" src="img/lx.png" /></center>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid logo-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-tit">
							<h4>如果全网VIP视频解析无法使用，请尝试联系QQ：1650700031 </h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		
			<?php  include 'footer.php';?>
			<script type="text/javascript" src="js/tv-beipy.js" /></script>
	</body>
</html>
