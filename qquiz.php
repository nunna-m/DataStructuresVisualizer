<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="t.css">
		<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="menus.css">
		<style type="text/css">
			.card{border-radius: 20px;}
		</style>
		
	</head>
	<body>
		<form action="scorecheckq.php">
		<div id="base" class="card" style="background: linear-gradient(orange, yellow); height: 400px">
			<pre style="position: absolute;top: 40px;left: 250px">YOU'RE ALL DONE!</pre>
			<button type="submit" style="height:30px; width: 300px; position: absolute;top:200px; left: 190px;">Score My Test!</button>
		</div>
		<div id="card1" class="card" >
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	5. How many stacks are needed to implement a queue. 
	   Consider the situation where no other data structure is available to you.
				</pre>
			</div>
			
			<table class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q5" value="a">One</td></tr>
				<tr style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q5" value="b">Two</td></tr>
				<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q5" value="c">Four</td></tr>
			</table><br>
			
		</div>
		<div id="card2" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	4. True or False? 
	   Queues follow the first in first out principle
				</pre>
			</div>
				
			<table class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q4" value="a">True</td></tr>
				<tr style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q4" value="b">False</td></tr>
			</table><br>
		</div>
		<div id="card3" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>style="top:300px"
	3.void fun(Queue *Q)
		{
		    Stack S; 
		    while (!isEmpty(Q))
		       push(S, deQueue(Q));
		    
		    while (!isEmpty(S))
		       enQueue(Q, pop(S));
		}
		What does this function do?

				</pre>
			</div>
			
			<table class="ans" >
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q3" value="a">Removes the last from Q</td></tr>
				<tr style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q3" value="b">Reverses Q</td></tr>
				<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q3" value="c">Leaves Q unchanged</td></tr>
			</table><br>
			
		</div>
		<div id="card4" class="card">
		<div class="question" style="background-color: #ccf2ff">
			<pre>
	2.Which one of the following is an application of Queue Data Structure?
			</pre>
		</div>
		
		<table class="ans">
			<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q2" value="a">Which one of the following is an application of Queue Data Structure?</td></tr>
			<tr style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q2" value="b">	Load Balancing</td></tr>
			<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q2" value="c">Both A and B</td></tr>
		</table><br>
			
		</div>
		<div id="card5" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	1. How many queues are needed to implement a stack. 
	   Consider the situation where no other data structure is available to you.
				</pre>
			</div>
			
			<table class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q1" value="b">One</td></tr>
				<tr style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q1" value="b">Two</td></tr>
				<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q1" value="b">Four</td></tr>
			</table><br>

		</div>
		<button type="button" id="next" style="position: fixed; left:200px;top:600px;">Next Question</button>
		</form>

		<script type="text/javascript">
			var obj={}
			obj.count=1;
			var x;

			obj.flip=function()
			{
				//alert(obj.count)
				switch(obj.count)
				{
					case 5:
						x=document.querySelector("#card1");
						break
					case 4:
						x=document.querySelector("#card2");
						break;
					case 3:
						x=document.querySelector("#card3");
						break;
					case 2:
						x=document.querySelector("#card4");
						break;
					case 1:
						x=document.querySelector("#card5");
						break;
				}
				//x.classList.toggle("cardfade");
				x.parentNode.removeChild(x);
				if(obj.count==5)
				{
					t=document.querySelector("#next");
					t.parentNode.removeChild(t);
				}
				obj.count++;	

			}

			document.querySelector("#next").addEventListener("click",obj.flip,false)




		</script>
	</body>
	
</html>