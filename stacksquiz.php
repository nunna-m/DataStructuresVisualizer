<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="t.css">
		<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet'>
		<style type="text/css">
			.card{border-radius: 20px;}
		</style>
		
	</head>
	<body>
		<form action="scorecheckstack.php" id="sub">
		<p style="color: #8fdeef;font-size: 25px; position: absolute;left:55px" id="no">QUESTION 1 of 5</p>
		<div id="base" class="card" style="background: linear-gradient(orange, yellow); height: 400px">
			<pre style="position: absolute;top: 40px;left: 250px">YOU'RE ALL DONE!</pre>
			<button type="submit" style="height:30px; width: 300px; position: absolute;top:200px; left: 190px;">Score My Test!</button>
		</div>
		<div id="card1" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	5. To evaluate an expression without any embedded function calls
				</pre>
			</div>
			
			<table class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q5" value="a">One stack is enough</td></tr>
				<tr style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q5" value="b">Two are required</td></tr>
				<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q5" value="c">As many stacks as the height of the expression tree are needed</td></tr>
			</table><br>
			
		</div>
		<div id="card2" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	4. Assume that the operators +, -, × are left associative
	   and ^ is right associative.

	   The order of precedence (from highest to lowest) is ^, x , +, -. 

	   The postfix expression corresponding to the infix expression-
	   
	   a + b × c - d ^ e ^ f is:
				</pre>
			</div>
				
			<table style="top:300px" class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q4" value="a">abc × + def ^ ^ -</td></tr>
				<tr style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q4" value="b">abc × + de ^ f ^ -</td></tr>
				<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q4" value="c">- + a × bc ^ ^ def</td></tr>
			</table><br>
		</div>
		<div id="card3" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	3.The following postfix expression with single digit operands is 
	  evaluated using a stack:

	  8 2 3 ^ / 2 3 * + 5 1 * -

	  Note that ^ is the exponentiation operator. 

	  The top two elements of the stack after the first * is evaluated are:

				</pre>
			</div>
			
			<table style="top:300px" class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q3" value="a">6,1</td></tr>
				<tr style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q3" value="b">5,7</td></tr>
				<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q3" value="c">3,2</td></tr>
			</table><br>
			
		</div>
		<div id="card4" class="card">
		<div class="question">
			<pre>
	2. Which of the following is true about linked list 

	   implementation of stack?
			</pre>
		</div>
		
		<table class="ans">
			<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q2" value="a">In push operation, if new nodes are inserted at the beginning of linked list, then in pop operation, nodes must be removed from end.</td></tr>
			<tr style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q2" value="b">	In push operation, if new nodes are inserted at the end, then in pop operation, nodes must be removed from the beginning.</td></tr>
			<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q2" value="c">None of the Above</td></tr>
		</table><br>
			
		</div>
		<div id="card5" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	1. True or False?

	   Stacks follow the first in first out principle
				</pre>
			</div>
			
			<table class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q1" value="a">True</td></tr>
				<tr style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q1" value="b">False</td></tr>
			</table><br>

		</div>
		<button type="button" id="next" style="position: absolute; left:250px;top:600px; height: 40px; background-color: #8fdeef; font-size: 15px">Next Question</button>
		</form>

		<script type="text/javascript">
			var obj={}
			obj.count=1;
			var x;

			obj.flip=function()
			{
				p=document.querySelector("#no");
				p.innerHTML="QUESTION: "+(obj.count+1)+" of 5";
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
				x.parentNode.removeChild(x);
				if(obj.count==5)
				{
					t=document.querySelector("#next");
					t.parentNode.removeChild(t);
					p.parentNode.removeChild(p)


				}
				obj.count++;		

			}

			document.querySelector("#next").addEventListener("click",obj.flip,false)





		</script>
	</body>
	
</html>