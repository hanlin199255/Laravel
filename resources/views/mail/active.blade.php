<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>恭喜您注册成功,请点击下面的连接完成激活<a href="{{config('app.url')}}active?id={{$id or '1'}}&token={{$token or '1'}}">激活</a></p>
	<p>也可以点击下面的网址复制到浏览器激活</p>
	<p>www.ball.com/active?id={{$id or '1'}}&token={{$token or '1'}}</p>
</body>
</html>