<!DOCTYPE html>
<html>
<head>
	<title>@yield('Title')</title>
	<style type="text/css">
		*{
			margin:0;
			padding:0;
		}
		body {
  		position: relative;
  		margin: 0;
 		padding-bottom: 6rem;
 		min-height: 100%;
		}
		#img-banner{
			width: 100%;
			height: 1080px;
		}
		main{
			padding-top: 6rem;
			text-align: center;
		}
		img{
			width: 40%;
		}
		#img-footer{
			width: 100%;
			height: 70px;
			bottom: 0;
		}
		footer{
			position: absolute; 
            bottom: 0; 
            width: 100%; 
            height: 40px; 
		}
	</style>
</head>
<body>
	<header>
		<img src="/images/banner.jpg" title="banner" alt="banner" id="img-banner">
	</header>
	<main>
		<div>
			<img src="/images/pic01.jpg" title="Picture 1" alt="Picture 1">
			<img src="/images/pic02.jpg" title="Picture 2" alt="Picture 2">
		</div>
		<div>
			<img src="/images/pic03.jpg" title="Picture 3" alt="Picture 3">
			<img src="/images/pic04.jpg" title="Picture 4" alt="Picture 4">
		</div>
		<div>
			<img src="/images/pic05.jpg" title="Picture 5" alt="Picture 5">
			<img src="/images/pic06.jpg" title="Picture 6" alt="Picture 6">
		</div>
		<div>
			<img src="/images/pic07.jpg" title="Picture 7" alt="Picture 7">
			<img src="/images/pic08.jpg" title="Picture 8" alt="Picture 8">
		</div>
		<div>
			<img src="/images/pic09.jpg" title="Picture 9" alt="Picture 9">
			<img src="/images/pic10.jpg" title="Picture 10" alt="Picture 10">
		</div>
	</main>
	<footer>
		<img src="/images/pic11.jpg" title="Picture 11" alt="Picture 11" id="img-footer">
	</footer>
	
</body>
</html>