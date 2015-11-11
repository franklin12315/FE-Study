<!DOCTYPE html>
<?php
	session_start();
	if (!$_SESSION['views']) {
		header("Location:login.php");	
	}

?>
<html>
<head>
	<title>
	<?php
		echo $_SESSION['views']."的Blog";
	?>
	</title>
	<meta charset = "UTF-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body>
	<header>
	<h4>
	<?php
		echo "欢迎来到  ".$_SESSION['views']." 的主页！";
	?>
	</h4>
		
		<div id="icon">

			<p><img src="images/iconfont-zhuye.png"/> 首页</p>
			<p><img src="images/iconfont-fangdajing.png"/> 搜索</p>
			<p><img src="images/iconfont-jiahao.png"/> 新建</p>
			<p><img src="images/iconfont-zan.png"/> 赞</p>
			<p><img src="images/iconfont-fenxiang.png"/> 分享</p>
		</div>
	</header>

	
	<div id = "content">
		<div id = "left">
			<div id = "title">个人信息</div>
			<p><img src="images/head.jpg"></p>

			<p>
			<?php
				echo $_SESSION['views'];
			?>
			</p>
			<hr>
			<p>原创：23篇</p>
			<p>转载：3篇</p>
			<p>评论：167次</p>
			<p class="operation"><img src="images/iconfont-aixin.png" >
			<img src="images/iconfont-xinxi.png" ></p>

		</div>
		<div id = "right">
			<div class="passage">
				<h3>IOS开发杂记</h3>
				<p>&nbsp;&nbsp;IBOutlet 中的＃define没有任何意义（也就是说，预处理器可以在源文件中将它逐一替换成空白）。然而，Xcode在读取头文件的时，只有定义为IBOutlet的变量，才可以用作为出口并连接到界面上的UI元素。任何一个应用程序都只有一个UIWindow对象，UIWindow对象就像一个容器，负责包含应用中的所有视图。应用需要再启动时创建并设置UIWindow对象，然后为其添加其他视图。当程序将某个视图控制器设置为UIWindow对象的rootViewController对象时，UIWindow对象会将该视图控制器的view作为子视图加入窗口.</p>
			</div>
			<div class="passage">
				<h3>xcode7错误解决</h3>
				<p>&nbsp;&nbsp;最近把mac系统升级到10.11系统，但是在用pod install命令的时候，却提示command not found.后来上网查了下才知道，Cocoapods在10.11系统上发生了变化。在stackoverflow搜到的解释是这样的，This is happening because Apple has enabled rootless on the new install，也就是说在10.11系统上苹果已经启用无根的安装。</p>
			</div>
			<div class="passage">
				<h3>CocoaPods安装和使用</h3>
				<p>&nbsp;&nbsp;在安装CocoaPods之前，首先要在本地安装好Ruby环境。至于如何在Mac中安装好Ruby环境，请google一下，本文不再涉及。假如你在本地已经安装好Ruby环境，那么下载和安装CocoaPods将十分简单，只需要一行命令。在Terminator（也就是终端）中输入以下命令（注意，本文所有命令都是在终端中输入并运行的。</p>
			</div>

		 	<table>
		 		<th>
		 			<td class = "currentItem"> 1 </td>
		 			<td> 2 </td>
		 			<td> 3 </td>
		 			<td> 4 </td>
		 			<td> 5 </td>
		 			<td>...</td>
		 			<td>下一页</td>
		 			<td>尾页</td>
		 		</th>
		 	</table>
		</div>
	</div>
	<footer>
		<p>Copyright © 2015 曾祥意. All rights reserved. </p>
	</footer>

</body>
</html>