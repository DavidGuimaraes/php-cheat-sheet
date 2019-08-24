<?php
/* 
Name:     php_cheat_sheet.php
Purpose:  PHP programming language cheat sheet
Author:   David Guimaraes, Computer Engineer
Revision: February 9th, 2019 - initial version (1.0)

	PHP CHEAT SHEET BY DAVID
*
* This is a PHP language cheat sheet developed by David Guimaraes,
* Computer Engineer, for future reference on the language. This tutorial 
* covers the following topics, respectively:
*
* uCORE
* 		STRUCTURE OF A PROGRAM							[Ok]
* 		PRIMITIVE DATA TYPES							[Ok]							
* 		VARIABLE DECLARATION AND INITIALIZATION			[Ok]
* 		ATRIBUTION OPERATORS							[Ok]
* 		ARITHMETIC OPERATORS							[Ok]
* 		LOGICAL OPERATORS								[Ok]
* 		UNARY OPERATORS									[Ok]
* 		RELATIONAL OPERATORS							[Ok]
* 		CONDITIONAL STATEMENTS							[Ok]
* 		LOOP STATEMENTS									[Ok]
* 		FUNCTIONS										[Ok]
*		IMPORTING CODE									[Ok]
* 		SUPER GLOBALS									[Ok]
*		MANIPULATING DATABASE							[**]
*
*/




/*################### STRUCTURE OF A PROGRAM ###################*/

echo "Hello, PHP! <br>";
print "Hello, again!";
/*##############################################################*/



/*#################### PRIMITIVE DATA TYPES ####################*/

//integer
$var = 5;

//float
$var2 = 2.2;

//boolean
$var3 = true;

//string
$string = "Guimaraes";

//array
$var4 = array("David", "Amanda", 25, 19);


echo $var+$var2;			//7.2
echo $var2+$var3;			//3.2
echo $var4[0];				//David
echo $var4[1];				//Amanda
echo $var4[2];				//25
echo $var4[3];				//19
$wow = $string+$var4[0];
echo $wow;					//Warning: A non-numeric value encountered
/*##############################################################*/



/*########### VARIABLE DECLARATION AND INITIALIZATION #########*/

//Refer Above
/*############################################################*/



/*#################### ATRIBUTION OPERATORS ###################*/

//	=
//	+=
//	-=
//	*=
//	/=

$var2 += $var;		//$var2 = $var2 + $var
echo $var2;			//3

$var3 -= $var2;		//$var3 = $var3 - $var2
echo $var3;			//Notice: Undefined variable: var3
					//-3
					
$var4 *= $var2;		//$var4 = $var4 * $var2
echo $var4;			//9

$var2 /= $var;		//$var2 = $var2 / $var1
echo $var2;			//3
/*#############################################################*/



/*#################### ARITHMETIC OPERATORS ####################*/

// +	add
// -	sub
// *	mul
// /	div
// %	mod
// **	exp
/*##############################################################*/



/*#################### LOGICAL OPERATORS #####################*/

//	and 
//	&&  
//	or 
//	|| 
//	xor
/*############################################################*/



/*##################### UNARY OPERATORS ######################*/

//	++
//	--

++$var 
$var++ 
--$var 
$var--
/*############################################################*/



/*################### RELATIONAL OPERATORS ###################*/

//	== 
//	=== 
//	!= 
//	!== 
//	<> 
//	> 
//	< 
//	>= 
//	<=
/*############################################################*/



/*################## CONDITIONAL STATEMENTS ##################*/

if(){}
			
if(//condition){
	//block of code
}else{
	//block of code
}
			
if(//condition){
	//block of code
}elseif(//condition){
	//block of code
}else{
	//block of code
}
			
switch($var){
	case 1:
		//block of code
		break;
	case 2:
		//block of code
		break;
	case 3:
		//block of code
		break;
}
/*############################################################*/



/*###################### LOOP STATEMENTS ######################*/

while(){}
			
do{}while(){}
			
for($var = 0; $var < 10; $var++){}

$array = array("David", "Amanda");
			
foreach($array as $loop_variable){
	echo "My name is".$loop_variable."<br>";
}
/*#############################################################*/



/*####################### FUNCTIONS ##########################*/

function identifier($arguments){
	//block of code
	return $return_of_function
}
/*#############################################################*/


/*###################### IMPORTING CODE #######################*/

include 'something.php';
/*#############################################################*/



/*####################### SUPER GLOBALS #######################*/

$GLOBALS		
$_POST
$_GET
$_COOKIE
$_SESSION
			
setcookie("name", "David", time() + 86400);		//actual name of cookie, value of cookie, lifetime of cookie. In this case, it takes the current time throught the built-in function time() and adds 86400 miliseconds, which stands for 24 hours
$_SESSION['name'] = "user_id";
			
session_start();								//use it on the top of all pages of your website in order for it to always remember an opened session for a specific user
			
if(!isset($_SESSION['username'])){
	echo"Log In";
}else{
	echo"Welcome, ".$_SESSION['username']."! You are logged in!"
}
/*#############################################################*/
?>
