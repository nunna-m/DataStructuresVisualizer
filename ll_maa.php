<?php 
session_start();
$x=$_SESSION["username"];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="menu.css">
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?skin=sunburst"></script>
<style type="text/css">
  .node
  {
    height: 100px;
    transition-duration: 1s;
    margin: 100px 50px 100px 50px;
    padding: 10px;
    position: absolute;
    z-index: -2;
    top: 300px;
    background-color: #808080;
    border-radius: 5px;
    color: white;
    font-size: 18px;
    font-family: Arial;
  }
  .data
  {
    font-size: 64px;
    color: #2196F3;
    border-radius: 5px;
    padding: 5px;
    margin:5px;
    width: 80px;
    height: 60px;
    height: 60%;
    background-color: #37474F;
    text-align: center;
    float: left;
  }
  .next
  {
    font-size: 24px;
    padding: 5px;
    color: white;
    border-radius: 5px;
    margin:5px;
    width: 80px;
    height: 60px;
    background-color: #37474F;
    text-align: center;
    float: left;
  }
  .operation
  {
    background-color: #2196F3;
    border-radius: 50px;
    height: 50px;
    border: none;
    box-shadow: 0 0px 16px -2px black;
    color: white;
    font-size: 32px;
    font-family: sans-serif;
    position: fixed;
    bottom: 20px;
    width: 200px;
  }
</style>
</head>
  <body>
<div class="container">
<table style="width: 100%">
  <tr style="margin: 0px; padding: 0px;">
<td style="margin: 0px; padding: 0px;"><div class="logo"><small><small><small><span class="rainbow">Logo</span></small></small></small></div></td>
<td style="margin: 0px; padding: 0px;"><button class="button" style="margin: 0px;" onclick="home()"><i class="material-icons">home</i><span style="margin: 0px;">Home </span></button></td>
<td style="margin: 0px; padding: 0px;"><button class="button" style="margin: 0px;" onclick="about()"><i class="material-icons">call</i><span>About</span></button></td>
<td style="margin: 0px; padding: 0px;"><button class="button" id="menu1"><i class="material-icons" id="topii">menu</i><span id="topi">Topics </span></button></td>
<td style="margin: 0px; padding: 0px;"><button class="button"  onclick="profile()"><i class="material-icons">bookmark_border</i><span>Profile</span></button></td>
<td style="padding: 0px;"><button class="button"  onclick="signup()"><i class="material-icons">account_circle</i><span>Sign In</span></button></td>
</tr>
</table>
<div style="padding: 0px; width: 100px; position: absolute; right: -30px; top: 7px;opacity: 0; z-index: -1"><div class="profile"><img src="pic11.jpg" style="width: 50px; height: 50px; border-radius: 60%;"></div></div>
</div>
<div class="drop" id="menulist1" style="position: absolute; width: 220px; top: -120px; left: 50%"><table  style="font-family: Segoe UI"><tr><td onclick="ll()">Linked Lists</td></tr><tr><td onclick="stack()">Stacks</td></tr><tr><td style="border: none;" onclick="q()">Queues</td></tr></table></div>

<div class="drop" id="signin" style="position: absolute; width: 220px;height: 200px; top: -150px; right: 1%"><form action="post" style="padding: 20px;position: relative;top: 30px"><input type="text" name="uid" style="background-color: white;padding: 8px ; border-radius: 50px; width:90%;" placeholder="Username"><input type="password" name="pwd" placeholder="Password" style="background-color: white;padding: 8px ; border-radius: 50px; width:90%; position: relative; top: 20px"><input type="submit" value="Sign In" name="submit" style="position: relative; top: 40px; background-color: #2196F3; border-radius: 20px; border: none; width: 70px; padding: 5px; color: white"></form><button style="position: relative; top: 25px; left: 130px; border: none; border-radius: 20px; background-color: #2196F3; color: white; padding: 5px; width: 70px">Sign Up</button><button style="background-color: #303030; color: white; border: none; position: absolute; top: 165px; left:100px" onclick="signinup()">X</button></div>
<br>

      <div style="position: absolute; bottom: 0px; left: 20px; width: 150px;" id="floatlist">
        <div class="floater" style="position: absolute; bottom: 0px; opacity: 0; z-index: -1;" id="l1"><i class="material-icons">fiber_manual_record</i> Code</div>
        <div class="floater" style="position: absolute; bottom: 0px; opacity: 0; z-index: -1;" id="l2"><i class="material-icons">fiber_manual_record</i> Quiz</div>
        <div class="floater" style="position: absolute; bottom: 0px; opacity: 0; z-index: -1;" id="l3"><i class="material-icons">fiber_manual_record</i> Forums</div>
        <div class="floater" style="position: absolute; bottom: 0px; opacity: 0; z-index: -1;" id="l4"><i class="material-icons">fiber_manual_record</i> Visualization</div>
        <div class="floater"  id="floatbutton" style="width: 20px; color: white; z-index: 2;" onclick="addfloatmenu()"><i class="material-icons" onclick="addfloatmenu()">keyboard_arrow_up</i></div>
      </div>
      <div>
        <span style="font-size: 48px;position: absolute;top: 15%; width: 98% ; color: white; z-index: -2;text-align: center;" id="op">Insert</span>
        <div class="node" id="n1" style="left: 050px; opacity: 0;">Address: 1000<br><div id="data" class="data">1</div>
          <div id="next1" class="next">Next NULL</div></div>
        <div class="node" id="n2" style="left: 300px; opacity: 0;">Address: 1008<br><div id="data" class="data">2</div>
          <div id="next2" class="next">Next NULL</div></div>
        <div class="node" id="n3" style="left: 550px; opacity: 0;">Address: 1016<br><div id="data" class="data">3</div>
          <div id="next3" class="next">Next NULL</div></div>
        <div class="node" id="n4" style="left: 800px; opacity: 0;">Address: 1024<br><div id="data" class="data">4</div>
          <div id="next4" class="next">Next NULL</div></div>
    
      </div>

      <button id="remb" class="operation" style="left: 35%" onclick="nextstep()">Next</button>
      <button id="clearb" class="operation" style="left: 50%" onclick="clearb()">Clear</button>
    </body>
    
    <script type="text/javascript">
    var menu1=0;
    var ll=0;
    var step=0;
    var status=[0,0,0,0];
    var list=document.querySelectorAll(".node");
    var op=document.querySelector("#op");
    var next1=document.querySelector("#next1");
    var next2=document.querySelector("#next2");
    var next3=document.querySelector("#next3");
    var next4=document.querySelector("#next4");
    clearb=function()
    {
      ll=0;
      step=0;
      for(i=0;i<list.length;i++)
      {
        list[i].style.opacity=0;
      }
    }
    nextstep=function()
    {

        if(step==0)
        {
            list[0].style.opacity="1";
            op.innerHTML="Inserted 1";   
            step++; 
        }
        else if(step==1)
        {
            list[2].style.opacity="1";
            op.innerHTML="Inserted 3 after 1";   
            next1.innerHTML="Next 1016";
            step++;
        }
        else if(step==2)
        {
          list[1].style.opacity="1";
          next1.innerHTML="Next 1008";
          next2.innerHTML="Next 1016";
          op.innerHTML="Inserted 2 in between 1 and 3";
          step++;
        }
         else if(step==3)
        {
          list[3].style.opacity="1";
          next3.innerHTML="Next 1024";
          op.innerHTML="Inserted 4 after 3";
          step++;
        }
        else if(step==4)
        {
          list[2].style.opacity="0";
          next2.innerHTML="Next 1024";
          op.innerHTML="Removed 3";
          step++;
        }
        else if(step==5)
        {
          list[3].style.opacity="0";
          next2.innerHTML="Next NULL";
          op.innerHTML="Removed 4";
          step++;
        }
        else if(step==6)
        {
          list[0].style.opacity="0";
          next1.innerHTML="Next NULL";
          op.innerHTML="Deleted first node";
          step++;
        }
    }
    putimage=function()
    {

      var name="<?php echo $_SESSION['name'];?>";
      zd=document.querySelector("#pro");
      zd.textContent=name;
      //alert(name);
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
    putimage=function()
    {
      // session_start();
      // var name=$_SESSION["name"];
      // var path=$_SESSION["img"];
      // alert(name);
    }
    addfloatmenu=function()
    {
      var l1=document.querySelector("#l1");
      var l2=document.querySelector("#l2");
      var l3=document.querySelector("#l3");
      var l4=document.querySelector("#l4");
      l1.style.opacity=1;
      l2.style.opacity=1;
      l3.style.opacity=1;
      l4.style.opacity=1;
      l1.style.bottom="50px";
      l2.style.bottom="100px";
      l3.style.bottom="150px";
      l4.style.bottom="200px";
      var but=document.querySelector("#floatbutton");
      but.innerHTML='<i class="material-icons">keyboard_arrow_down</i>'
     
      // els.style.zIndex=10;
    }
    removelist=function()
    {    
        var els=document.querySelector("#floatlist");
        if (!(document.getElementById('floatlist').contains(event.target)))
        {
        // Clicked outside the box
        var l1=document.querySelector("#l1");
        var l2=document.querySelector("#l2");
        var l3=document.querySelector("#l3");
        var l4=document.querySelector("#l4");
        l1.style.opacity=0;
        l2.style.opacity=0;
        l3.style.opacity=0;
        l4.style.opacity=0;
        l1.style.bottom="0px";
        l2.style.bottom="0px";
        l3.style.bottom="0px";
        l4.style.bottom="0px";
        var but=document.querySelector("#floatbutton");
        but.innerHTML='<i class="material-icons">keyboard_arrow_up</i>'
        }
    }
    home=function()
{
  window.location.href="index.html";
}
about=function()
{
  window.location.href="menu.php";
}
profile=function()
{
  window.location.href="profile.php";
}
ll=function()
{
  window.location.href="ll.php";
}
q=function()
{
  window.location.href="q.php";
}
stack=function()
{
  window.location.href="stack.php";
}
signup=function()
{
  window.location.href="signin.html";
}
    var menuh=document.querySelector("#menu1");
    menuh.addEventListener("mouseover",addmenu,false);
    var menu=document.querySelector("#menulist1");
    menu.addEventListener("mouseleave",removemenu,false);
    window.addEventListener("click",removelist,false);
    var afm=document.querySelector("#floatbutton");
    afm.addEventListener("click",addfloatmenu,false);
    putimage();
    </script>
  </body>
</html>
