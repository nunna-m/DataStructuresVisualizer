<?php

session_start();
$x=$_SESSION['name'];

?>





<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<style>
.body{
	margin:0px;
	padding: 0px;
  background-color: #03A9F4;
  font-size: 24px;
  font-family: courier;
  color: white;
}
.container {
  border-radius: 0px;
  background-color: #303030;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  font-family: sans-serif;
  font-weight: 100;
  padding: 10px;
  width: 97%; 
  height: 50px;
  transition: all 0.5s;
  cursor: pointer;
  margin: auto;
  position: fixed;
  top: 0;
  z-index: 2;
  box-shadow: 0 4px 8px -2px black;
/*  box-shadow: 0 6px 12px 0 rgba(255, 255, 255, 0.25);*/
}
.container:hover{

}
.button {
  
  border-radius: 6px;
  background-color:#303030;
  /*linear-gradient(to bottom, #303030 0%, #37474F 90%);*/
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  font-weight: 100;
  padding: 10px;
  width: 100%;
  height: 50px;
  transition: all 0.25s;
  cursor: pointer;
  margin-left: 5px;
  margin-right: 5px;
  margin-top: 0px;
}
.button:hover{
  background-color:#37474F;
	color: #FFFFFF;
  transition: 0.75s;
  box-shadow: 0 2px 12px -4px black;
/*	color: webkit-gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22));*/
/*	background-color: #546E7A;*/
	background-color: radial-gradient(rgba(255, 255, 255, 0),rgba(255, 255, 255, 1))
/*	box-shadow: 0 3px 6px 0 rgba(255, 255, 255, 0.25) inset;*/

}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  font-weight: 100;
  font-style: light;
  font-size: 22px;
  font-family: Segoe UI;
  transition: 0.5s;
  opacity:1;
  padding-left: 15px;
  color: white;
  margin-left: 5px;
  margin-right: 5px;
  margin-top: 0px;
}
.dropcaps{
    float: left;
    width: 0.7em;
    font-size: 400%;
    font-family: algerian, courier;
    line-height: 80%;
    color: white;
}
.logo{
    float: left;
    float: top;
    width: 0.7em;
    font-size: 400%;
    font-family: algerian, courier;
    line-height: 30%;
    color: #2196F3;

}
.logo:hover span{
	font-style: bold;
	font-style: bold; 
	width: 0.7em;
    font-family: algerian, courier;
    line-height: 30%;
}
.rainbow {
  background-image: -webkit-gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  background-image: gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  color:transparent;
  -webkit-background-clip: text;
  background-clip: text;
}
/*
.button span:after {
  content: '\00bb';
  height: 200px;
  position: absolute;
  opacity: 0;
  top: 0;

  right: -20px;
  transition: 0.5s;
}*/

.button:hover span {
  color: #2196F3;
/*	padding-top: 20px;*/
/*   height: 200px; */
   opacity:1;
}
.sheetback{
	background-color: #AAAAAA;
	border-radius: 4px;
	margin: 20px;
	padding-top: 5px;
	padding-bottom: 5px;
	padding-left: 5px;
	padding-right: 5px;
	height:auto;
	font-size: 20px;
	position: relative;
	top:60px;
}
.sheet{
	background-color: #EFEFEF;
	margin: 0px;
  margin-bottom: 5px;
	padding-top: 30px;
	padding-bottom: 30px;
	padding-left: 60px;
	padding-right: 60px;
	max-height:100%;
	font-size: 20px;
	position: relative;
	/*top:160px;*/
}
.heads{
    font-size: 400%;
    font-family: Segoe UI;
    color: #2196F3;
}
.ab{
  font-size: 34px;
  font-family: sans-serif;
  font-style: normal; 
  color: #E91E63;
  background-color: #303030;
  margin: auto;
  margin-top: 0px;
  margin-bottom: 0px;
  width: 75%;
  height: 1200px;
  padding: 30px;
  border-radius: 2px;
  box-shadow: 0 4px 10px -1px black;
}
.ab span{
  font-size: 20px;
  font-weight: 200;
  font-family: Segoe UI;
  color: #dddddd;
  display:table;
  line-height: 130%;
  font-style: italic;
}
.cir{
  width: 150px;
  height: 150px;
  border-radius: 50%;
  border: 5px solid;
  border-width: 10px;
  box-shadow: 0 4px 10px -1px black;
  background-color: rgba(0,0,0,0);
  margin: auto;

}
.lef{
  font-size: 8px;
  font-family: Verdana;
  font-style: italic;
  font-weight: 200; 
  color: #E91E63;
  position: relative;
  left: 5%;
  top:13%;
}
.sign{
  width: 200px;
  padding: 10px;
  margin: auto;
  margin-top: 20px;
  border-radius: 50px;
  background-color: #03A9F4;
  font-size: 28px;
  font-family: Segoe UI;
  font-weight: 100;
  color: white;
  box-shadow: 0 4px 8px -2px black;
}
.sign:hover{
  background-color: #039BE5;
  box-shadow: 0 0px 16px -2px white;
}

table {
    display:table; 
    border-collapse: collapse;
    width: 100%;
}

td {
    padding: 20px;
    vertical-align: middle;
    text-align: center;
    border-bottom: 2px solid #37474F;
    /*
    border-left: 2px solid #37474F;
    border-right: 2px solid #37474F;
    */
    margin: auto;
}
th {
    padding: 20px;
    vertical-align: middle;
    text-align: center;
    border-bottom: 0px solid #37474F;
    /*
    border-left: 2px solid #37474F;
    border-right: 2px solid #37474F;
    */
    margin: 20px;
}
.container table, tr{
  vertical-align: top;
  border:0px solid white;
}
.container td, th
{
    padding: 00px;
    vertical-align: top;
    text-align: center;
    width: 16%;
    border-bottom: 0px solid #37474F;
    /*
    border-left: 2px solid #37474F;
    border-right: 2px solid #37474F;
    */
    margin: 5px;
}
.profile
{
  width:50px;
  height: 50px;
  border-color: white;
  border-radius: 50%;
  border:3px solid;
  background-color: grey;
  transition: 0.5s;
}
.profile:hover
{
  box-shadow:0 0px 16px -2px black;
  border-color: #2196F3;
}
.drop{
  background-color: #303030;
  border-radius: 10px;
  border: 1px solid #808080;
  color: white;
  box-shadow:0 0px 16px -2px black;
  transition-duration: 0.5s;
}
.drop td,tr,th
{
  border-radius: 5px;
}
.drop td:hover,th:hover
{
  background-color: #37474F;
  transition-duration: 0.25s;
}
</style>
</head>
<body background="bg.jpg">


<!-- <div class="container">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown</button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <a href="#news">Link</a>
</div>

<h3>Dropdown Menu inside a Navigation Bar</h3>
<p>Hover over the "Dropdown" link to see the dropdown menu.</p> -->
<!-- <div class="container"><div class="logo"><small><small><small><span class="rainbow">Logo</span></small></small></small></div><button class="button"><i class="material-icons">home</i><span>Home </span></button><button class="button"><i class="material-icons">call</i><span>About</span></button><button class="button"><i class="material-icons">menu</i><span>Topics </span></button><button class="button"><i class="material-icons">bookmark_border</i><span>Bookmark</span></button><button class="button"><i class="material-icons">account_circle</i><span>Sign Up </span></button></div>
 -->

<div class="container">
<table style="width: 100%">
  <tr style="margin: 0px; padding: 0px;">
<td style="margin: 0px; padding: 0px;"><div class="logo"><small><small><small><span class="rainbow">Logo</span></small></small></small></div></td>
<td style="margin: 0px; padding: 0px;"><button class="button" style="margin: 0px;"><i class="material-icons">home</i><span style="margin: 0px;">Home </span></button></td>
<td style="margin: 0px; padding: 0px;"><button class="button" style="margin: 0px;"><i class="material-icons">call</i><span>About</span></button></td>
<td style="margin: 0px; padding: 0px;"><button class="button" id="menu1"><i class="material-icons" id="topii">menu</i><span id="topi">Topics </span></button></td>
<td style="margin: 0px; padding: 0px;"><button class="button"><i class="material-icons">bookmark_border</i><span>Bookmark</span></button></td>
<td style="padding: 0px;"><button class="button" onclick="signindown()"><i class="material-icons">account_circle</i><span>Sign In</span></button></td>
</tr>
</table>
<div style="padding: 0px; width: 100px; position: absolute; right: -30px; top: 7px;opacity: 0; z-index: -1"><div class="profile"><img src="pic11.jpg" style="width: 50px; height: 50px; border-radius: 60%;"></div></div>
</div>
<div class="drop" id="menulist1" style="position: absolute; width: 220px; top: -120px; left: 50%"><table  style="font-family: Segoe UI"><tr><td>Linked Lists</td></tr><tr><td>Stacks</td></tr><tr><td style="border: none;">Queues</td></tr></table></div>

<div class="drop" id="signin" style="position: absolute; width: 220px;height: 200px; top: -150px; right: 1%"><form action="post" style="padding: 20px;position: relative;top: 30px"><input type="text" name="uid" style="background-color: white;padding: 8px ; border-radius: 50px; width:90%;" placeholder="Username"><input type="password" name="pwd" placeholder="Password" style="background-color: white;padding: 8px ; border-radius: 50px; width:90%; position: relative; top: 20px"><input type="submit" value="Sign In" name="submit" style="position: relative; top: 40px; background-color: #2196F3; border-radius: 20px; border: none; width: 70px; padding: 5px; color: white"></form><button style="position: relative; top: 25px; left: 130px; border: none; border-radius: 20px; background-color: #2196F3; color: white; padding: 5px; width: 70px">Sign Up</button><button style="background-color: #303030; color: white; border: none; position: absolute; top: 165px; left:100px" onclick="signinup()">X</button></div>
<br>
  
<br><br><br><br><div class="ab">
<table>
  <tr>
    <td style="width: 33.33%">
      <div class="cir" style=""><div style="margin: auto;"><i class="material-icons" style="color:white;font-size: 120px;position: relative;left: 0px;top: 25px">details</i></div><br>About<br></div><br>
    
    </td>
    <td style="vertical-align: middle">
      <span style="width:;text-align: left;">This project aims to make the experience of teaching more intuitive by providing the teachers with content, all in one place. Content custom built by ur editors means that the teacher needn't switch betweeen her pressentation, algorithm and program. Providing intuitive visualisations makes the learning much easier and enhances long term understanding. We provide just about everything a topic might need- ranging from visualisations, code in multiple languages, algorithm, flowchart and various other aids to raise the bar for deep learning. Learn more and discover more with our quizes and other programming exercises.</span>
    </td>
</tr>
</table>
<table>
  <tr>
    <th colspan="4"><span style="font-size: 48px;color: white;font-family: Segoe UI;text-align: left">Featuring</span></th>
    </tr>
    <tr>
    <td><div class="cir" style="color: #64DD17" id="alg"><div style="margin: auto;"><i class="material-icons" style="color:white;font-size: 120px;position: relative;left: 0px;top: 20px">playlist_play</i></div><br>Algorithm</div><br></td>
    <td><div class="cir" style="color: #2196F3" id="vis"><div style="margin: auto;"><i class="material-icons" style="color:white;font-size: 120px;position: relative;left: 0px;top: 20px">remove_red_eye</i></div><br>Visualize</div><br></td>
    <td style="height:"><div class="cir" style="color: #FF9800" id="cod"><div style="margin: auto;"><i class="material-icons" style="color:white;font-size: 120px;position: relative;left: 0px;top: 20px">code</i></div><br>Code</div><br></td>
    <td style="height:"><div class="cir" style="color: #AA00FF" id="qui"><div style="margin: auto;"><i class="material-icons" style="color:white;font-size: 120px;position: relative;left: 0px;top: 20px">help_outline</i></div><br>Quiz</div><br></td>
  </tr>
</table>
<table>
  <tr style="height: 50px;">
  <td style="width: 25%"><div class="cir" style="height: 60px; width:60px; ; color: rgba(0,0,0,0);"><div style="margin: auto;"><i class="material-icons" style="color:white;font-size: 60px;position: relative;left: 0px;top: 5px">more_horiz</i></div></div></td>
  <td style="width: 75%;"><span id="FDetails" style="text-align: left">
    Mouse over features for more info.</span>
  </td>
  <tr>
    <th colspan="4"><span style="font-size: 48px;color: white;font-family: Segoe UI;text-align: left">Contribute</span></th></tr>
    <tr>
    <td style="width: 20%">
      <div class="cir" style=""><div style="margin: auto;"><i class="material-icons" style="color:white;font-size: 110px;position: relative;left: 0px;top: 20px">note_add</i></div></div>
    </td>
    <td style="vertical-align: top">
      <span style="width:;text-align: left;">As a project which is completely crowd funded, it is run by a small team of content creaters. We are on a constant search for members who could contribute to the content on the page. Ultimately, as a growing product, we only aspire to bring in more minds to help make this project bigger. So what are you waiting for? <b>Join us today!</b></span>
      <div class="sign"><i class="material-icons" style="color:white;font-size: 28px;position: relative;right: 10px;top: 5px">assignment_ind</i>Sign Up</div>
    </td>
</tr>
</table>
</div></div>
</body>
<script type="text/javascript">
var menu1=0;
falg=function()
{
  var sp=document.querySelector("#FDetails");
  sp.innerHTML="Algorithms are the most fundamental start to any computer science problem and it is crucial that students are taught and presented with an alogorithmic approach to any problem.";
}
fvis=function()
{
  var sp=document.querySelector("#FDetails");
  sp.innerHTML="Visualisations built by our content team to make explaning and understanding so much more intuitive. It is known that diagrams or generic visualisations increase the grasping power of learners.";
}
fcod=function()
{
  var sp=document.querySelector("#FDetails");
  sp.innerHTML="As would seem obvious to any computer science student, learning is incomplete without code implementation of the concepts learned. By providing code in multiple languages, we would like to make this page the go-to source for enhanced learning.";
}
fqui=function()
{
  var sp=document.querySelector("#FDetails");
  sp.innerHTML="Test your newly aquiredd knowledge in this quiz, crafted to test true learning- with a focus on application over memory.";
}
addmenu=function()
{
  var e=document.querySelector("#menulist1");
  e.style.top="65px";
  var menuh=document.querySelector("#menu1");
  menuh.style.backgroundColor="#37474F";
}
removemenu=function()
{
  var e=document.querySelector("#menulist1");
  e.style.top="-120px";
  var menuh=document.querySelector("#menu1");
  menuh.style.backgroundColor="#303030";
}
signindown=function()
{
  var s=document.querySelector("#signin");
  s.style.top="50px";
}
signinup=function()
{
  var s=document.querySelector("#signin");
  s.style.top="-150px";
}
var bod=document.querySelector("body");
var alg=document.querySelector("#alg");
var vis=document.querySelector("#vis");
var cod=document.querySelector("#cod");
var qui=document.querySelector("#qui");
alg.addEventListener("mouseover",falg,false);
vis.addEventListener("mouseover",fvis,false);
cod.addEventListener("mouseover",fcod,false);
qui.addEventListener("mouseover",fqui,false);
var menuh=document.querySelector("#menu1");
menuh.addEventListener("mouseover",addmenu,false);
var menu=document.querySelector("#menulist1");
menu.addEventListener("mouseleave",removemenu,false);
var signin=document.querySelector("#signin");
signin.addEventListener("blur",signinup,false);
</script>
</body>
</html>

