<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>First Website</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
	<header id="header" class="alt">
				<div class="logo"><a href="index.html">Test Website <span> by Robbie</span></a></div>
				<a href="#menu">Menu</a>
			</header>
	<nav id="menu">
				<ul class="links">
					<li><a href="/">Home</a></li>
					<li><a href="/contact">Contact</a></li>
					<li><a href="/about">About Page</a></li>
				</ul>
			</nav>

        @yield('content')
	</body>
</html>