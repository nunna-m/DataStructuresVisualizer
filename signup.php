<?php
  session_start();
  $x=$_SESSION['username'];
?>



<html>
<head>
  <title>Signup</title>
  <link rel="stylesheet" type="text/css" href="signup.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body style="background-color: black">

  <div class="container">
      <table style="width: 100%">
        <tr style="margin: 0px; padding: 0px;">
           <td style="margin: 0px; padding: 0px;">
              <div class="logo"><small><small><small><span class="rainbow">Logo</span></small></small></small></div>
            </td>
            <td style="margin: 0px; padding: 0px;"><button class="button" style="margin: 0px;"><i class="material-icons">home</i><span style="margin: 0px;">Home </span></button>
            </td>
            <td style="margin: 0px; padding: 0px;"><button class="button" style="margin: 0px;"><i class="material-icons">call</i><span>About</span></button>
            </td>
            <td style="margin: 0px; padding: 0px;"><button class="button" id="menu1"><i class="material-icons" id="topii">menu</i><span id="topi">Topics </span></button>
            </td>
            <td style="margin: 0px; padding: 0px;"><button class="button"><i class="material-icons">bookmark_border</i><span>Bookmark</span></button>
            </td>
            <td style="padding: 0px;"><button class="button" onclick="signindown()"><i class="material-icons">account_circle</i><span><?php echo $x?></span></button>
            </td>
        </tr>
    </table>
    <div style="padding: 0px; width: 100px; position: absolute; right: -30px; top: 7px;opacity: 0; z-index: -1">
      <div class="profile"><!-- <img src="pic11.jpg" style="width: 50px; height: 50px; border-radius: 60%;"> -->
      </div>
    </div>
    </div>
    <div class="drop" id="menulist1" style="position: absolute; width: 220px; top: -150px; left: 50%">
      <table  style="font-family: Segoe UI">
        <tr>
          <td><a href="ll.php">Linked Lists</a></td>
        </tr>
        <tr>
          <td><a href="stack.php">Stacks</a></td>
        </tr>
        <tr>
          <td style="border: none;"><a href="q.php">Queues</a></td>
        </tr>
      </table>
    </div>

    <div class="drop" id="signin" ><?php echo $x?></div>

      <div style="position: fixed; bottom: 0px; left: 8px; width: 150px; z-index: 0" id="floatlist">
        <div class="floater" style="position: absolute; bottom: 0px; opacity: 0; z-index: -1;" id="l1"><i class="material-icons">fiber_manual_record</i> <a href="code_ll.php">Code</a></div>
        <div class="floater" style="position: absolute; bottom: 0px; opacity: 0; z-index: -1;" id="l2"><i class="material-icons">fiber_manual_record</i> <a href="llquiz.php"> Quiz</a></div>
        <div class="floater" style="position: absolute; bottom: 0px; opacity: 0; z-index: -1;" id="l3"><i class="material-icons">fiber_manual_record</i> Forums</div>
        <div class="floater" style="position: absolute; bottom: 0px; opacity: 0; z-index: -1;" id="l4"><i class="material-icons">fiber_manual_record</i><a href="ll.php"> Visualization</a></div>
        <div class="floater"  id="floatbutton" style="width: 20px; color: white; z-index: 2;" onclick="addfloatmenu()"><i class="material-icons" onclick="addfloatmenu()">keyboard_arrow_up</i></div>
      </div>


<div class="form" style="margin: 120px auto">
  <h1>Sign Up Now!</h1>
  <form method="post" action="p1.php">
      <div class="box"><span>1</span>Email &amp; Name</div>
      <div class="innerbox">
          <label>Email<input type="email" name="username" /></label>
          <label>Name<input type="text" name="name"></textarea></label>
      </div>

      <div class="box"><span>2</span>Address &amp; Phone</div>
      <div class="innerbox">
          <label>Address <textarea name="addr"></textarea></label>
          <label>Phone Number <input type="text" name="phone" /></label>
      </div>

      <div class="box"><span>3</span>Passwords</div>
          <div class="innerbox">
          <label>Password <input type="password" name="password" /></label>
          <label>Confirm Password <input type="password" name="pwdcheck" /></label>
      </div>
      <div class="buttons">
       <input type="submit" name="submitform"/>
       <span class="privacy-policy">
       <input type="checkbox" name="terms">Click to agree to terms and conditions 
       </span>
      </div>
  </form>
</div>

<script type="text/javascript">
    var menu1=0;
    
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
    var menuh=document.querySelector("#menu1");
    menuh.addEventListener("mouseover",addmenu,false);
    var menu=document.querySelector("#menulist1");
    menu.addEventListener("mouseleave",removemenu,false);
    var signin=document.querySelector("#signin");
    signin.addEventListener("blur",signinup,false);
    window.addEventListener("click",removelist,false);
    var afm=document.querySelector("#floatbutton");
    afm.addEventListener("click",addfloatmenu,false);
    </script>
</body>
</html>