<?php

session_start();
$user=$_SESSION['username'];

?>


<html> 

	<head>
		<meta charset="utf-8"/>

		<link rel="stylesheet" type="text/css" href="signup.css">
		  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
		  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		  <link rel="stylesheet" type="text/css" href="menu.css">
		<link rel="stylesheet" type="text/css" href="queue.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>

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
            <td style="padding: 0px;"><button class="button" onclick="signindown()"><i class="material-icons">account_circle</i><span><?php echo $user?></span></button>
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



		<div  id="bottomnav" style="position: fixed; bottom: 10px; left: 350px; overflow: none">
			<div class="operations1"><p style="color: white">ENQUEUE</p><div class="m"><input type="text" name="n" id="enq" style="position: absolute; bottom: 30px; right:15px; left: 5px"></div></div>
			<div class="operations" id="deq"><p style="color: white">DEQUEUE</p></div>
			<div class="operations" id="fro"><p style="color: white">FRONT</p></div>
			<div class="operations" id="clear"><p style="color: white">CLEAR</p></div>
		</div>
			<div class="cont" style="color: white">
				<pre style="font-size: 40px">       QUEUE</pre>
			</div>

		<script>
			var node={}
			var node={}

			countnode=0
			pos=30
			orig=30
			countpop=0
			counttot=0
			add=2000
			node.delete = function()
			{
				if(countnode==0)
					alert("Stack is Empty! Try adding a node")
				else
				{	
					
					countpop++
					dive=document.querySelector(".cont")
					x=dive.children
					x[counttot-countnode+1].style.top="320px"
					x[counttot-countnode+1].style.right=pos+"px"
					
					//orig+=120
					pos+=110
					countnode--
				}
			}
			node.clear = function()
			{
				dive=document.querySelector(".cont")
				
				while(dive.firstChild)
					dive.removeChild(dive.firstChild)
				x=document.createElement("pre")
				x.textContent="QUEUE"
				x.setAttribute("style","font-size:40px")
				dive.appendChild(x)

				countnode=0
				counttot=0
				countpop=0
				pos=0
			}
			node.add = function()
			{
				if(event.keyCode==13)
				{
					val=inp.value
					inp.value=null//clears the text box
					if(parseInt(val)==NaN)
						inc=1
					else
						inc=4
					if(countpop+countnode==4)
					{
						alert("Clear Screen and Try Again")
					}
					else if(countnode>=4)
					{
						alert("Try Deleting a Node")
					}
					else
					{
						countnode++
						counttot++
						x=document.createElement("div")
						x.setAttribute("class","el")
						x.innerHTML="<br><br>Element: "+val+"<br><br>Address: "+add;
						add+=inc;
						switch(countnode)
						{
							case 1:
								x.style.right="10px"
								break
							case 2:
								x.style.right="120px"
								break
							case 3:
								x.style.right="230px"
								break
							case 4:
								x.style.right="340px"
								break;
						}
						dive=document.querySelector(".cont")
						dive.appendChild(x)	
					}
				}	
			}
			node.enlarge = function()
			{
				if(countnode==0)
					return;
				dive=document.querySelector(".cont")
				x=dive.children[countpop+1]
				x.style.animationPlayState="running"
			}
			var del=document.querySelector("#deq")
			del.addEventListener("click",node.delete,false)

			var z=document.querySelector("#clear")
			z.addEventListener("click",node.clear,false)
			
			var inp=document.querySelector("#enq")
			inp.addEventListener("keypress",node.add,false)

			var peek=document.querySelector("#fro")	
			peek.addEventListener("click",node.enlarge,true)	
		</script>

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
