<?php
header("Content-Type:text/html; charset=utf-8");
?>

<!DOCTYPE html>
<meta charset="utf-8">

<?php
if (!empty($_COOKIE['state'])) {
	# code...
}
else{
	echo "<script>alert('你没有进入权限，请重新登录！');window.location.href='login.php'</script>";
}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="blog.css">
	<title>倪浩的个人主页</title>
</head>
<body>
<div class="container">
<div class="header">
	<h1>倪浩的个人主页</h1>
</div>
<hr color="red";>
<div class="content">
	<h2>个人资料</h2>
	<ul>
	<li>姓名:倪浩</li>
	<li>性别：男</li>
	<li>出生年月：1993.2.17</li>
	<li>EMAIL：<a href="mailto:1032274844@qq.com?subject=Hello%20again">1032274844@qq.com</a></li>
	<li>家乡：湖北省荆州市</li>
	</ul>
	<hr color="red";>
	<h2>喜欢的电影</h2>
	<ul>
	<li>钢铁侠系列</li>
	<li>星球大战系列</li>
	<li>哈林波特系列</li>
	<li>指环王系列</li>
	</ul>
	<hr color="red";>
</div>
<div class="footer" ;>
THANKS FOR COMING!
</div>

<div class="button">
<form action="exit.php" method="post">
	<input name="exit" type="image" src="img\exit.jpg" width=80px left />
</form>
</div>
</body>
</html>