<html>
<head>
  <style>
    .logo
{
	border-top-left-radius:20px;
	border-top-right-radius:20px;
	border-bottom-right-radius:20px;
    overflow: hidden;
	opacity:0.5;
}
h1
{
	text-align:center;
	font-size:70px;
	color:#E0FFFF;
	font-weight:bold;
}
.category
{
	text-align:center;
	font-weight:bold;
	color:#FFFF00;	
	font-size:20px;
}

.one
{
	border-top-style:solid;
	border-bottom-style:solid;
	border-left-style:solid;
	border-right-style:solid;
	width:fit-content;
	margin-left:16.7cm;
	box-shadow: inset 0 0 0 50px #116530;
	font-size:20px;
	color:yellow;
	margin-left:15cm;
	border:2px solid yellow;
}
.two
{
	border-top-style:solid;
	border-bottom-style:solid;
	border-left-style:solid;
	border-right-style:solid;
	width:fit-content;
	margin-left:16.3cm;
	border-radius:50Px;
	box-shadow: inset 0 0 0 50px #116530;
}
.three
{
	border-top-style:solid;
	border-bottom-style:solid;
	border-left-style:solid;
	border-right-style:solid;
	width:fit-content;
	margin-left:16.5cm;
	border-radius:50Px;
	box-shadow: inset 0 0 0 50px #116530;
}
.four
{
    border-top-style:solid;
	border-bottom-style:solid;
	border-left-style:solid;
	border-right-style:solid;
	width:fit-content;
	margin-left:13.85cm;
	border-radius:50Px;
	box-shadow: inset 0 0 0 50px #116530;
	color:black;
}
.five
{
    border-top-style:solid;
	border-bottom-style:solid;
	border-left-style:solid;
	border-right-style:solid;
	width:fit-content;
	margin-left:14.2cm;
	border-radius:50Px;
	box-shadow: inset 0 0 0 50px #116530;
}
.six
{
    border-top-style:solid;
	border-bottom-style:solid;
	border-left-style:solid;
	border-right-style:solid;
	width:fit-content;
	margin-left:14.3cm;
	border-radius:50Px;
	box-shadow: inset 0 0 0 50px #116530;
}
.video_h
{
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: -1;
}

body
{
	animation:transitionIn 2s;
}
@keyframes transitionIn
{
	from
	{
		opacity:0;
		transform:rotateX(-10deg);
	}
	to
	{
		opacity:1;
		transform:rotateX(0);
	}
}
a
{
    text-decoration:none;
	color:inherit;
}

</style>
</head>

<body>
<div class="logo">
 <img src="logo.jpg" width="100" height="100">
</div>

<div class="video_h">
    <video autoplay loop muted plays-inline>
	    <source src="pexels-rodnae-productions-8499667 (1080p).mp4" type="video/mp4">
	</video>
</div>

<h1> Select Your Category </h1>
<h2 class="four"><a href="login.php" class="link"> Scholarship level Students</h2></a>
<br>
<h2 class="five"><a href="loginordinary.php" class="link"> Ordinary level Students</h2></a>
<br>
<h2 class="six"><a href="loginadvance.php" class="link"> Advance level Students</h2></a>
<br>
<h2 class="six"><a href="loginundergraduate.php" class="link"> Undergraduate Students</h2></a>
<br>
</div>

<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/80ac50c3-06da-4368-8dd7-df91fbc54ce3/webchat/config.js" defer></script>