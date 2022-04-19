<html>
	<head>
		<title></title>
		<style>
			.card {border-radius:20px;}
			body {background-color:black;}
		</style>
		<link rel="stylesheet" type="text/css" href="t.css">
		<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet'>
	</head>
	<body>

		<form action="scorecheckll.php" id="sub">
		<p style="color: #8fdeef;font-size: 25px; position: absolute;left:55px" id="no">QUESTION 1 of 5</p>
		<div id="base" class="card" style="background: linear-gradient(orange, yellow); height: 400px">
			<pre style="position: absolute;top: 40px;left: 250px">YOU'RE ALL DONE!</pre>
			<button type="submit" style="height:30px; width: 300px; position: absolute;top:200px; left: 190px;">Score My Test!</button>
		</div>
		<div id="card1" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	5. What is the output of following function for start pointing to 
	first node of following linked list? 1->2->3->4->5->6

	void fun(struct node* start)
	{
	  if(start == NULL)
	    return;
	  printf("%d  ", start->data); 
	  
	  if(start->next != NULL )
	    fun(start->next->next);
	  printf("%d  ", start->data);
	}
				</pre>
			</div>
			
			<table style="top:400px" class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q5" value="a">1 4 6 6 4 1</td></tr>
				<tr  style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q5" value="b">1 3 5 1 3 5</td></tr>
				<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q5" value="c">1 3 5 5 3 1</td></tr>
			</table><br>
			
		</div>
		<div id="card2" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	4. Each node of a doubly linked list takes up more memory 
	   than that of a singly linked list
				</pre>
			</div>
				
			<table class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q4" value="a">True</td></tr>
				<tr  style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q4" value="b">False</td></tr>
	
			</table><br>
		</div>
		<div id="card3" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	3.What does the following fragment of code do with a linked list? 
		current = head; 
		while (current != null) 
		{ 
			current = current.link; 
		}
				</pre>
			</div>
			
			<table style="top:200px" class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q3" value="a">Traverses the list</td></tr>
				<tr  style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q3" value="b">Initialises the list</td></tr>
				<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q3" value="c">Counts the number of nodes</td></tr>
			</table><br>
			
		</div>
		<div id="card4" class="card">
		<div class="question" style="background-color: #ccf2ff">
			<pre>
	2. What is the output of following function for start pointing to fir
	st node of following linked list? 1->2->3->4->5->6

	void fun(struct node* start)
	{
	  if(start == NULL)
	    return;
	  printf("%d  ", start->data); 
	  
	  if(start->next != NULL )
	    fun(start->next->next);
	  printf("%d  ", start->data);
	}
			</pre>
		</div>
		
		<table style="top:400px" class="ans">
			<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q2" value="a">1 4 6 6 4 1</td></tr>
			<tr  style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q2" value="b">1 3 5 1 3 5</td></tr>
			<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q2" value="c">1 3 5 5 3 1</td></tr>
		</table><br>
			
		</div>
		<div id="card5" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	1. What Does the Following Code Print?

	void fun1(struct node* head)
	{
			if(head == NULL)
					return;

			fun1(head->next);
			printf("%d  ", head->data);
	}
				</pre>
			</div>
			
			<table style="top:300px" class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q1" value="a">Prints all nodes of the linked list</td></tr>
				<tr  style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q1" value="b">Prints all nodes of the linked list in reverse order</td></tr>
				<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q1" value="c">Prints alternate nodes of the linked list</td></tr>
			</table><br>

		</div>
		<button type="button" id="next" style="position: absolute; left:250px;top:600px; height: 40px; background-color: #8fdeef; font-size: 15px">Next Question</button>
		</form>

		<script type="text/javascript">

			var obj={};
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

			document.querySelector("#next").addEventListener("click",obj.flip,false);
		</script>
	</body>
	
</html>