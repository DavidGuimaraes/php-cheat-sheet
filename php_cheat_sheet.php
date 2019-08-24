<?php
/* 
Name:     php_cheat_sheet.php
Purpose:  PHP programming language cheat sheet
Author:   David Guimaraes, Computer Engineer
Revision: August 21st, 2019 - initial version (1.2)

	PHP CHEAT SHEET BY DAVID
*
* This is a PHP language cheat sheet developed by David Guimaraes,
* Computer Engineer, for future reference on the language. This tutorial 
* covers the following topics, respectively:
*
* uCORE
* 		STRUCTURE OF A PROGRAM								[Ok]
*		COMMENTS											[OK]
*		DATE												[OK]
* 		PRIMITIVE DATA TYPES								[Ok]	
*		STRINGS												[..]
*		DATA STRUCTURES										[..]
* 		VARIABLE DECLARATION AND INITIALIZATION				[Ok]
*		CONSTANTS DECLARATION								[OK]
*		OPERATORS											[OK]
* 			ATRIBUTION OPERATORS							[Ok]
* 			ARITHMETIC OPERATORS							[Ok]
* 			LOGICAL OPERATORS								[Ok]
* 			UNARY OPERATORS									[Ok]
* 			RELATIONAL OPERATORS							[Ok]
*			REFERENCE OPERATOR								[OK]
*			TERNARY OPERATOR								[OK]
* 		CONDITIONAL STATEMENTS								[Ok]
* 		LOOP STATEMENTS										[Ok]
* 		FUNCTIONS (MODULATION)								[Ok]
*		BUILT-IN FUNCTIONS									[..]
*		IMPORTING CODE										[Ok]
* 		SUPER GLOBALS										[Ok]
*		MANIPULATING DATABASE								[+-]
*		POO													[MISSING]
*
*/




/*################### STRUCTURE OF A PROGRAM ###################*/

echo "Hello, PHP! <br>";
print "Hello, again!";
/*##############################################################*/



/*########################## COMMENTS ##########################*/

/* Multiline
comment */
				
// Single line comment
			
# Another single line comment
/*##############################################################*/



/*############################ DATE ############################*/

// Define the time zone based on the coordinated universal time
date_default_timezone_set('UTC');
			
/* Echos the date
	h : 12 hr format
	H : 24 hr format
	i : Minutes
	s : Seconds
	u : Microseconds
	a : Lowercase am or pm
	l : Full text for the day
	F : Full text for the month
	j : Day of the month
	S : Suffix for the day st, nd, rd, etc.
	Y : 4 digit year
*/
echo date('h:i:s:u a, l F jS Y e');
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



/*########################### STRINGS ##########################*/

$str = <<<EOD
			The customers name is
			$usersName and they
			live at $streetAddress
			in $cityAddress</br></br>
EOD;
			
echo $str;
			
// Strings store a series of characters
			
$randString = "         Random String       ";
			
// You can trim white space with ltrim, rtrim, or trim
			
echo strlen($randString) . "</br>";
echo strlen(ltrim($randString)) . "</br>";
echo strlen(rtrim($randString)) . "</br>";
echo strlen(trim($randString)) . "</br>";


// String case functions
			
echo strtoupper($randString) . "</br>";
echo strtolower($randString) . "</br>";
echo ucfirst($randString) . "</br>";
			
echo "</br></br>";
			
// Turning strings into arrays and vice versa
			
$arrayForString = explode(' ', $randString, 2);
			
$stringToArray = implode(' ', $arrayForString);
			
echo "</br></br>";
			
// Get part of a string
			
$partOfString = substr("Random String", 0, 6);
			
echo "Part of String $partOfString </br>";
			
echo "</br></br>";
			
// Comparing Strings
			
$man = "Man";
$manhole = "Manhole";
			
// Returns 0 is equal
// Returns positive if str1 is greater then str2
// Returns negative if str1 is less than then str2
// strcasecmp() isn't case sensitive
			
echo strcmp($man, $manhole) . "</br>";
			
echo "</br></br>";
			
// strstr() returns every character after the sting to look for
// stristr() isn't case sensitive
			
echo "The String " . strstr($randString, "String") . "</br>";
			
echo "</br></br>";
			
// strpos() returns the location for the match
			
echo "Loc of String " . strpos($randString, "String") . "</br>";
			
echo "</br></br>";
			
// str_replace() replaces a string with another
			
$newString = str_replace("String", "Stuff", $randString)  . "</br>";
			
echo "New string " . $newString . "</br>";
			
echo "</br></br>";
/*##############################################################*/



/*###################### DATA STRUCTURES #####################*/

// An array can store multiple values
			
$bestFriends = array('Joy', 'Willow', 'Ivy');
			
// You can access an item by index starting with 0
			
echo 'My wife ' . $bestFriends[0];
			
echo "</br></br>";
			
// You can add an item by storing in a unused index 
			
$bestFriends[4] = 'Steve';
			
echo 'My friend ' . $bestFriends[4];


// You can create key value pairs in arrays
			
$customer = array('Name'=>$usersName, 'Street'=>$streetAddress, 'City'=>$cityAddress);
			
foreach($customer as $key => $value){		
	echo $key . ' : ' . $value . '</br>';
}
			
echo "</br></br>";
			
// You can combine arrays with +
			
$bestFriends = $bestFriends + $customer;
			
foreach($bestFriends as $friend){				
	echo $friend . ', ';		
}
			
// Other common array operators
// == : Returns true of false if arrays are equal
// != : Returns if not equal
// === : Returns if the same items, same order and data type
			
echo "</br></br>";
			
// Multidimensional arrays are arrays in arrays
			
$customers = array(array('Derek', '123 Main', '15212'),
		   			array('Sue', '124 Main', '15222'),
					array('Bob', '125 Main', '15212'));
							   
for($row = 0; $row < 3; $row++){			
	for($col = 0; $col < 3; $col++){			
		echo $customers[$row][$col] . ', ';		
	}
	echo '</br>';		
}
			
// Common Array Functions
// sort($yourArray) : Sorts in ascending alphabetical order or 
// if you add , SORT_NUMERIC or , SORT_STRING
// asort($yourArray) : sorts arrays with keys
// ksort($yourArray) : sorts by the key
// Put a r infront of the above to sort in reverse order
/*##############################################################*/



/*########### VARIABLE DECLARATION AND INITIALIZATION #########*/

//Refer Above
/*############################################################*/



/*########## CONSTANT DECLARATION AND INITIALIZATION #########*/

/* 
You can define constants thats value can't change
When we call for a constant we don't use a $ and
they are normally uppercase
*/
define('PI', 3.1415926);
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



/*#################### REFERENCE OPERATORS #####################*/

/* 
The reference operator (ampersan / &) can create a
reference to a variable so if one changes so does the
other
*/
$refToNum = &$randNum;
$randNum = 100;
echo '$refToNum = ' . $refToNum;
/*##############################################################*/



/*##################### TERNARY OPERATORS ######################*/

// The ternary operator assigns one or another value
// depending on the condition
// condition ? value if true : value if false
			
$biggestNum = (15 > 10) ? 15 : 10;
			
echo 'Biggest Number is ' . $biggestNum;
/*##############################################################*/



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



/*##################### BUILT-IN FUNCTIONS #####################*/

//printf allows you to print formatted Strings to the screen
			
echo "The randomString is $randString </br>";			
printf ("The randomString is %s </br>", $randString);


//Coversion codes are useful with decimals
			
$decimalNum = 2.3456;			
printf ("decimal num = %.2f </br>", $decimalNum);


// Other conversion codes
// b : integer to binary
// c : integer to character
// d : integer to decimal
// f : double to float
// o : integer to octal
// s : string to string
// x : integer to hexadecimal
			
printf ("10 to binary %b </br>", 10);


//Escaping characters
			
$dbString = '"Random quotes"';
			
echo addslashes($dbString) . "</br>";
echo stripslashes($dbString) . "</br>";

			
//Get the data type for a variable
			
echo 'Data Type for $biggestNum is ' . gettype($biggestNum);

			
/* You can check for other types of data with
is_array : is_bool : is_double : is_int : is_null : 
is_numeric : is_string
*/
			
//empty() returns true or false if a var has a non-zero value
			
echo 'Does $biggestNum exist ';
echo empty($biggestNum) ? 'false' : 'true';

			
//isset() returns true or false if a variable exists
			
echo 'Does $biggestNum exist ';
echo isset($biggestNum) ? 'true' : 'false';

			
//You can execute unix commands by surrounding with `s
echo `ls -la`; // Unix or OSX
			
// echo `dir /w`; WINDOWS
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



/*################### MANIPULATING DATABASE ###################*/

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";				//none
$dbName = "";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


$sql = "SELECT * FROM tabela";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo $row['id'].'<br>';
	}
}

$sql = "INSERT INTO tabela(coluna1, coluna2, coluna3) VALUES(1, "valor2", "valor3")";
mysqli_query($conn, $sql);
/*#############################################################*/
?>