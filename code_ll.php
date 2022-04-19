<?php
  session_start();
  $x=$_SESSION['username'];
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
  
.ab{
  background-color: #303030;
  margin: auto;
  margin-top: 0px;
  margin-bottom: 0px;
  width: 90%;
  padding: 10px;
  border-radius: 2px;
  box-shadow: 0 4px 10px -1px black;
}
.ab span{
/*  font-size: 20px;
  font-weight: 200;
  font-family: Segoe UI;
  color: #dddddd;
  display:table;
  line-height: 130%;
  font-style: italic;*/
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
<td style="padding: 0px;"><button class="button"  onclick="signup()"><i class="material-icons">account_circle</i><span><?php echo $x ?></span></button></td>
</tr>
</table>
<div style="padding: 0px; width: 100px; position: absolute; right: -30px; top: 7px;opacity: 0; z-index: -1"><div class="profile"><img src="pic11.jpg" style="width: 50px; height: 50px; border-radius: 60%;"></div></div>
</div>
<div class="drop" id="menulist1" style="position: absolute; width: 220px; top: -120px; left: 50%"><table  style="font-family: Segoe UI"><tr><td onclick="ll()">Linked Lists</td></tr><tr><td onclick="stack()">Stacks</td></tr><tr><td style="border: none;" onclick="q()">Queues</td></tr></table></div>

<div class="drop" id="signin" style="position: absolute; width: 220px;height: 200px; top: -150px; right: 1%"><form action="post" style="padding: 20px;position: relative;top: 30px"><input type="text" name="uid" style="background-color: white;padding: 8px ; border-radius: 50px; width:90%;" placeholder="Username"><input type="password" name="pwd" placeholder="Password" style="background-color: white;padding: 8px ; border-radius: 50px; width:90%; position: relative; top: 20px"><input type="submit" value="Sign In" name="submit" style="position: relative; top: 40px; background-color: #2196F3; border-radius: 20px; border: none; width: 70px; padding: 5px; color: white"></form><button style="position: relative; top: 25px; left: 130px; border: none; border-radius: 20px; background-color: #2196F3; color: white; padding: 5px; width: 70px">Sign Up</button><button style="background-color: #303030; color: white; border: none; position: absolute; top: 165px; left:100px" onclick="signinup()">X</button></div>
<br>

      <div style="position: absolute; bottom: 0px; left: 20px; width: 150px;" id="floatlist">
        <div class="floater" style="position: absolute; bottom: 0px; opacity: 0; z-index: -1;" id="l1"  onclick="code_ll()"><i class="material-icons">fiber_manual_record</i> Code</div>
        <div class="floater" style="position: absolute; bottom: 0px; opacity: 0; z-index: -1;" id="l2"  onclick="quiz_ll()"><i class="material-icons">fiber_manual_record</i> Quiz</div>
        <div class="floater" style="position: absolute; bottom: 0px; opacity: 0; z-index: -1;" id="l3"><i class="material-icons">fiber_manual_record</i> Forums</div>
        <div class="floater" style="position: absolute; bottom: 0px; opacity: 0; z-index: -1;" id="l4"  onclick="ll()"><i class="material-icons">fiber_manual_record</i> Visualization</div>
        <div class="floater"  id="floatbutton" style="width: 20px; color: white; z-index: 2;" onclick="addfloatmenu()"><i class="material-icons" onclick="addfloatmenu()">keyboard_arrow_up</i></div>
      </div>

      <div class="ab" style="position: relative; top:50px; width:89%; z-index: -2;"><div id="code" style="position: relative;top:20px; ;z-index: 0">
<pre class="prettyprint linenums:1">
// C program for generic linked list
#include<stdio.h>
#include<stdlib.h>
 
/* A linked list node */
struct Node
{
    // Any data type can be stored in this node
    void  *data;
 
    struct Node *next;
};
 
/* Function to add a node at the beginning of Linked List.
   This function expects a pointer to the data to be added
   and size of the data type */
void push(struct Node** head_ref, void *new_data, size_t data_size)
{
    // Allocate memory for node
    struct Node* new_node = (struct Node*)malloc(sizeof(struct Node));
 
    new_node->data  = malloc(data_size);
    new_node->next = (*head_ref);
 
    // Copy contents of new_data to newly allocated memory.
    // Assumption: char takes 1 byte.
    int i;
    for (i=0; i<data_size; i++)
        *(char *)(new_node->data + i) = *(char *)(new_data + i);
 
    // Change head pointer as new node is added at the beginning
    (*head_ref)    = new_node;
}
 
/* Function to print nodes in a given linked list. fpitr is used
   to access the function to be used for printing current node data.
   Note that different data types need different specifier in printf() */
void printList(struct Node *node, void (*fptr)(void *))
{
    while (node != NULL)
    {
        (*fptr)(node->data);
        node = node->next;
    }
}
 
// Function to print an integer
void printInt(void *n)
{
   printf(" %d", *(int *)n);
}
 
// Function to print a float
void printFloat(void *f)
{
   printf(" %f", *(float *)f);
}
 
/* Driver program to test above function */
int main()
{
    struct Node *start = NULL;
 
    // Create and print an int linked list
    unsigned int_size = sizeof(int);
    int arr[] = {10, 20, 30, 40, 50}, i;
    for (i=4; i>=0; i--)
       push(&start, &arr[i], int_size);
    printf("Created integer linked list is \n");
    printList(start, printInt);
 
    // Create and print a float linked list
    unsigned float_size = sizeof(float);
    start = NULL;
    float arr2[] = {10.1, 20.2, 30.3, 40.4, 50.5};
    for (i=4; i>=0; i--)
       push(&start, &arr2[i], float_size);
    printf("\n\nCreated float linked list is \n");
    printList(start, printFloat);
 
    return 0;
}
</pre>
</div>

    </body>
    
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
        home=function()
{
  window.location.href="index.html";
}
about=function()
{
  window.location.href="menu.php";
}
ll=function()
{
  window.location.href="ll.php";
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
  //window.location.href="signin.html";
}
code_ll=function()
{
  window.location.href="code_ll.php";
}
quiz_ll=function()
{
  window.location.href="llquiz.php";
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
