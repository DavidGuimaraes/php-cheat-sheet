<?php
/* 
Name:     php_cheat_sheet.php
Purpose:  PHP programming language cheat sheet
Author:   David Guimaraes, Computer Engineer
Revision: August 23rd, 2019 - version 1.3

	PHP CHEAT SHEET BY DAVID
*
* This is a PHP language cheat sheet developed by David Guimaraes,
* Computer Engineer, for future reference on the language. Please
* notice this is not a full and complete reference on the language
* (for that, refer to a book or something like that). This is just
* a quick reference on the language. This tutorial covers the 
* following topics, respectively:
*
* uCORE
* 		STRUCTURE OF A PROGRAM								[Ok]
*		COMMENTS											[OK]
* 		VARIABLE DECLARATION AND INITIALIZATION				[Ok]
*		CONSTANTS DECLARATION								[OK]
* 		PRIMITIVE DATA TYPES								[Ok]
*		STRINGS												[Ok]
*		DATE OBJECT											[OK]
*		DATA STRUCTURES										[Ok]
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
*		BUILT-IN FUNCTIONS									[Ok]
* 		FUNCTIONS (MODULATION)								[Ok]
*		IMPORTING CODE										[Ok]
* 		SUPER GLOBALS										[Ok]
*		FILTERS AND VALIDATION								[Ok]
*		SENDING E-MAILS										[MISSING]
*		PHP AND AJAX										[OK]
*		IO/FILE MANIPULATION								[OK]
*		MANIPULATING DATABASE								[+-]
*		OBJECT ORIENTED PROGRAMMING							[+-]
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



/*########### VARIABLE DECLARATION AND INITIALIZATION #########*/

$var = "value";	//Attention to single quotes and double quotes when working with variables!
$var2 = 1;
$var3 = 1.0;
$var4 = true;
$var5;	//null
/*############################################################*/



/*########## CONSTANT DECLARATION AND INITIALIZATION #########*/

/* 
You can define constants thats value can't change
When we call for a constant we don't use a $ and
they are normally uppercase
*/
define('PI', 3.1415926);

//Constants CAN be case insensitive. Just pass 'true' as a 3rd parameter when defining a new constant
define('PI', 3.1415926, true);
/*############################################################*/



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

//object
/*##############################################################*/



/*########################### STRINGS ##########################*/

$str = <<<EOD
			The customers name is
			$usersName and they
			live at $streetAddress
			in $cityAddress</br></br>
EOD;
			
echo $str;
			
$randString = "         Random String       ";
			
//You can trim white space with ltrim, rtrim, or trim
			
echo strlen($randString) . "</br>";
echo strlen(ltrim($randString)) . "</br>";
echo strlen(rtrim($randString)) . "</br>";
echo strlen(trim($randString)) . "</br>";


//String case functions
			
echo strtoupper($randString) . "</br>";
echo strtolower($randString) . "</br>";
echo ucfirst($randString) . "</br>";

			
//Turning strings into arrays and vice versa
			
$arrayForString = explode(' ', $randString, 2);
			
$stringToArray = implode(' ', $arrayForString);

			
//Get part of a string
			
$partOfString = substr("Random String", 0, 6);	//from 0 index up to 6
			
echo "Part of String $partOfString </br>";

			
// Comparing Strings
			
$man = "Man";
$manhole = "Manhole";
			
// Returns 0 is equal
// Returns positive if str1 is greater then str2
// Returns negative if str1 is less than then str2
// strcasecmp() isn't case sensitive
			
echo strcmp($man, $manhole) . "</br>";

			
// strstr() returns every character after the sting to look for
// stristr() isn't case sensitive
			
echo "The String " . strstr($randString, "String") . "</br>";

			
// strpos() returns the location for the match
			
echo "Loc of String " . strpos($randString, "String") . "</br>";

			
// str_replace() replaces a string with another
			
$newString = str_replace("String", "Stuff", $randString)  . "</br>";
			
echo "New string " . $newString . "</br>";


ucwords();	//All initial letters are going to be capitalized
is_string();
gzcompress(); 
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


//echo date('d');		// Day
//echo date('m');		// Month
//echo date('Y');		// Year
//echo date('l');		// Day of the week

//echo date('Y/m/d');
//echo date('m-d-Y');

//echo date('h');	// Hour
//echo date('i');	// Min
//echo date('s');	// Seconds
//echo date('a');	// AM or PM

// Set Time Zone
date_default_timezone_set('America/New_York');

//echo date('h:i:sa');

/*
Unix timestamp is a long integer containing the number of seconds between the Unix Epoch 
(January 1 1970 00:00:00 GMT) and the time specified.
*/

$timestamp = mktime(10, 14, 54, 9, 10, 1981);

//echo $timestamp;

//echo date('m/d/Y h:i:sa', $timestamp);

$timestamp2 = strtotime('7:00pm March 22 2016');
$timestamp3 = strtotime('tomorrow');
$timestamp4 = strtotime('next Sunday');
$timestamp5 = strtotime('+2 Days');

//echo $timestamp2;

echo date('m/d/Y h:i:sa', $timestamp5);
/*##############################################################*/



/*###################### DATA STRUCTURES #####################*/

//An array can store multiple values
			
$bestFriends = array('Joy', 'Willow', 'Ivy');

			
//You can access an item by index starting with 0
			
echo 'My wife ' . $bestFriends[0];

			
//You can add an item by storing in a unused index 
			
$bestFriends[4] = 'Steve';			
echo 'My friend ' . $bestFriends[4];


//You can create key value pairs in arrays
			
$customer = array('Name'=>$usersName, 'Street'=>$streetAddress, 'City'=>$cityAddress);
			
foreach($customer as $key => $value){		
	echo $key . ' : ' . $value . '</br>';
}

			
//You can combine arrays with +
			
$bestFriends = $bestFriends + $customer;
			
foreach($bestFriends as $friend){				
	echo $friend . ', ';		
}

			
//Other common array operators
// == : Returns true of false if arrays are equal
// != : Returns if not equal
// === : Returns if the same items, same order and data type

			
//Multidimensional arrays are arrays in arrays
			
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


$nameOfArray[] = 'new value at the end of the array';
count($array);
print_r($array);	//prints out everything
var_dump($array);	//similar to the last one, except it show the data types
/*##############################################################*/



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
			
//echo `dir /w`; WINDOWS
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
$_SERVER
$_POST
$_GET
$_COOKIE
$_SESSION
			
			
			
if(isset($_POST['submit'])){
	session_start();

	$_SESSION['name'] = htmlentities($_POST['name']);
	$_SESSION['email'] = htmlentities($_POST['email']);
	
	header('Location: some_other_page.php');
}

$name = $_SESSION['name'];
$email = $_SESSION['email'];

			
setcookie("name", "David", time() + 86400);		//actual name of cookie, value of cookie, lifetime of cookie. In this case, it takes the current time throught the built-in function time() and adds 86400 miliseconds, which stands for 24 hours
setcookie("name", "David", time() - 3600);		//a way to destroy cookies. Since it has expired, it is going to be destroyed

$_SESSION['name'] = "user_id";
			
session_start();								//use it on the top of all pages of your website in order for it to always remember an opened session for a specific user
			
if(!isset($_SESSION['username'])){
	echo"Log In";
}else{
	echo"Welcome, ".$_SESSION['username']."! You are logged in!"
}

//Cookies and Sessions are ways to carry data from one page to another. Cookies save data in the client
//Sessions save data in the server

$user = ['user' => 'David', 'email' => 'david.ce@live.com', 'age' => '26'];
$user = serialize($user);	//if you have an array of data from a user, you can serialize it in order to create a cookie

setcookie('user', $user, time() + 3600);

echo unserialize($_COOKIE['user']);		//this is going to acho out 'David'


$server = [
	'Host Server Name'	=>	$_SERVER['SERVER_NAME'],
	'Server Software'	=>	$_SERVER['SERVER_SOFTWARE'],
	'Document Root'		=>	$_SERVER['DOCUMENT_ROOT'],
	'Current Page'		=>	$_SERVER['PHP_SELF'],
	'Script Name'		=>	$_SERVER['SCRIPT_NAME'],
	'Absolute Path'		=>	$_SERVER['SCRIPT_FILENAME']
];
	
$client = [
	'Client System Info'	=>	$_SERVER['HTTP_USER_AGENT'],
	'Client IP'				=>	$_SERVER['REMOTE_ADDR'],
	'Remote Port'			=>	$_SERVER['REMOTE_PORT']
];



/*<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<div class="container">
			<h1>Server Info</h1>
				<?php if($server): ?>
					<ul class="list-group">
						<?php foreach($server as $key => $value): ?>
							<li class="list-group-item">
								<strong><?php echo $key; ?>:</strong>
								<?php echo $value; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
		</div>
	</body>
</html>*/
/*#############################################################*/



/*################## FILTERS AND VALIDATION ##################*/

if(filter_has_var(INPUT_POST, 'data')){
	if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
 		echo 'Email is NOT valid!';
 	}else{
 		echo 'Email is valid!';
 	}
} 
 
FILTER_VALIDATE_BOOLEAN
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_INT
FILTER_VALIDATE_IP
FILTER_VALIDATE_REGEXP
FILTER_VALIDATE_URL
 
$email = filter_Var($email, FILTER_SANITIZE_EMAIL);
 
FILTER_SANITIZE_ENCODED
FILTER_SANITIZE_NUMBER_FLOAT
FILTER_SANITIZE_NUMBER_INT
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_STRING
FILTER_SANITIZE_URL
/*#############################################################*/



/*###################### SENDING EMAILS ######################*/

/*#############################################################*/



/*####################### PHP AND AJAX #######################*/

//When it comes to working with Ajax inside PHP context, it is necessary
//to actually work Vanilla JavaScript, since Ajax is a JS resource.
//It is possible to use jQuery to make HTTP requests (which is a lot easier
//than using Vanilla JavaScript), but pure JS is going to be used here

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
    	document.getElementById("output").innerHTML = this.responseText;
  	}
}
xhttp.open("GET", "suggest.php?q="+str, true);
xhttp.send();

/*
Full example below...



<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<script type="text/javascript">
			function showSuggestion(str){
				if(str.length == 0){
					document.getElementById('output').innerHTML = '';
				}else{
					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
  						if (this.readyState == 4 && this.status == 200) {
    						document.getElementById("output").innerHTML = this.responseText;
  						}
					}
					xhttp.open("GET", "suggest.php?q="+str, true);
					xhttp.send();
				}
			}
		</script>
	</head>
	<body>
		<div class="container">
			<h1>Search Users</h1>
			<form>
				Search User:
				<input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
			</form>
			<p>Suggestions: <span id="output" style="font-weight: bold"></span></p>
		</div>
	</body>
</html>



<?php

$people[] = "David";
$people[] = "Amanda";
$people[] = "Dalva";
$people[] = "Marcos";
$people[] = "Macaca";
$people[] = "Porco";
$people[] = "Miungo";
$people[] = "Malia";
$people[] = "Matuza";
$people[] = "Teia";
$people[] = "Martelo";
$people[] = "Louga";
$people[] = "Lu";

//Gets the string returned as a query
$q = $_REQUEST['q'];

$suggestion = "";

if($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);
	foreach($people as $person){
		//stristr finds the first occurence of a string
		if(stristr($q, substr($person, 0, $len))){
			if($suggestion === ""){
				$suggestion = $person;
			}else{
				$suggestion .= ", $person";
			}
		}
	}
}

echo $suggestion === "" ? "No suggestions :(" : $suggestion;
?>


*/
/*#############################################################*/



/*################### IO/FILE MANIPULATION ###################*/

$path = '/dir/file.php';
$file = 'file.txt';

basename($path);

basename($path, '.php');

dirname($path);

file_exists($file);	//Checks for both files and folders

real_path($file);	//Gets absolute path

is_file($file);		//Checks only for files

is_writable();

is_readable();

file_size();		//In bytes

mkdir();

rmdir();

copy($file1, 'file2.txt');	//Creates file2 with the exact same content from $file1

rename('file2.txt', 'myFile.txt');

unlink('myFile.txt');		//Deletes the file

file_get_contents($file);	//Returns the content of the file as a string

file_put_contents($file, 'Wow');	//Overwrites the file

/*This right here is a way to add content to a file instead of overwritting everything*/
$content = file_get_contents($file);
$content .= " something else";
file_put_contents($file, $content);

$bufferedReader = fopen($file, 'r');
$data = fread($bufferedReader);
echo $data;
fclose();

$bufferedWriter = fopen($file, 'w');
$content = 'Wow';
fwrite($bufferedWriter, $content);
fclose();
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


//---
$conn = mysqli_connect('localhost', 'root', 123456, database);

if(mysqli_connect_errno()){
	echo 'Failed to connect to (MySQL) database: '.mysqli_connect_errno(); 
}

$query = 'SELECT * FROM table';

$result = mysqli_query($conn, $query);

$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);


$query = 'SELECT * FROM table WHERE id = 1';

$result = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($result);


$id = mysqli_real_escape_string($conn, $_GET['id']);
$query = 'SELECT * FROM table WHERE id = '.id;
/*#############################################################*/



/*############### OBJECT ORIENTED PROGRAMMING ################*/

/*Since I already have all of the concepts of Object Oriented Programming, I'll just leave
a few examples below so I can refer to if necessary*/

class Person{
	private $name;
	private $email;
	//public static $ageLimit = 40;
	private static $ageLimit = 40;
	
	
	public function __construct($name, $email){
		this->$name = $name;
		this->$email = $email;
		echo __CLASS__." created!";
	}
	
	public function getName(){
		return this->$name;
	}
	
	public function setName($name){
		this->$name = $name;
	}
	
	public function getEmail(){
		return this->$email;
	}
	
	public function setEmail($email){
		this->$email = $email;
	}
	
	public function getAgeLimit(){
		return self::$ageLimit;
	}
}


class Customer extends Person{
	private $balance;
	
	public function __construct($name, $email, $balance){
		parent::__construct($name, $email, $balance);
		this->$balance = $balance;
		echo __CLASS__." created!";
	}
	
	public function getBalance){
		return this->$balance;
	}
	
	public function setBalance($balance){
		this->$balance = $balance;
	}
}


$customer1 = new Customer("David", "david.ce@live.com", 1000);
//echo Person::$ageLimit;
echo Person::$getAgeLimit();
/*#############################################################*/
?>