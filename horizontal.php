<html>
<head>
<title>horizontal</title>
<style type="text/css">
li{
top:20px;
position:absolute;
left:0px;
list-style-type:none;
}
#a{
position:absolute;
left:1000px;
}
#b{
position:absolute;
left:1100px;
}
#c{
position:absolute;
left:1900px;
}
a{
text-decoration:none;
font-size:30px;
color:black;
}
a:hover{
background-color:white;
}
#c a:hover{
background-color:blue;
}
</style>
</head>
<body bgcolor="teal">
<ul>
<li id="a"><a href="">Home</a></li>
<li id="b"><a href="about.php" target="a">About</a></li>
<li id="c"><a href="logout.php" target="_blank" ><img src='2.png' width=40></a></li>
</ul>
</body>
</html>