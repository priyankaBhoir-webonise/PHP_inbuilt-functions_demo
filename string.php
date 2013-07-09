<?php

	function print_rec($array,$i){
			if($i!==count($array)) {
					echo " [$i] => $array[$i]<br>";
					print_rec($array,$i+1);				//recursively calling the function
			}		
			return;				
	}

	function question_13($str1)	{
		$i=0;
		do{
			$sub=substr($str1,$i,3);
			if($sub==='PHP')
				echo 'Found : '.$sub.' <br />';		
			$i++;
		}while($i<strlen($str1));
	}
	$str1='PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.';
	$str2='PHP does not require (or support) explicit type definition in variable declaration; a variable\'s type is determined by the context in which the variable is used.';
	echo 'String 1:'.$str1.' <br />';
	echo 'String 2:'.$str2.' <br />';
	echo '<br><br>Q1: Occurance of PHP from string 1 = '.substr_count($str1,'PHP');

	$pos=-1;
	echo '<br /><br>Q2:';
	do{
	$pos=strpos($str1,'PHP',$pos+1);
	echo '<br> the position where PHP occures in the string 1 :'.$pos;

	}while($pos<strrpos($str1,'PHP'));
	
	echo '<br><br>Q3: Create array of words in string 1 & print them using a recursive function: <br>';
	$new_array=explode(" ",$str1);
	echo '<pre>';
	print_rec($new_array,0);
	echo '</pre>';
	
	echo '<br><br>Q4: Capitalization of string 1: '.strtoupper($str1);
	
	$merge_string=$str1.$str2;
	echo '<br /><br>Q5: after merging: '.$merge_string;

	$new_str1 = <<<ABC
$str1
ABC;
	
$new_str2 = <<<LMN
$str2
LMN;
	echo  '<br /><br>Q6: heredoc : String1 : '.$new_str1.' <br>Sting2 : '.$new_str2;

	echo '<br><br>Q7 : Today is : '.date("c");
	echo '<br><br>Q8 : Printing 12 jan 2012 -->'.date("dS-M-Y",mktime(0,0,0,1,12,2012));

	 $date = date_create();
	date_add($date, date_interval_create_from_date_string('7 days'));
	echo '<br><br>Q9 : Adding 7 days to today\'s date : '.date_format($date, 'd-m-Y');
	
	$part=(int)(strlen($str1)/4);
	echo '<br><br>Q10 : spliting string 1 into 4 parts <pre>';
	$str_array=str_split($str1,$part+1);
	print_r($str_array);
	echo '</pre>';

	
	$new_array=explode(".",$str1);
	$new_rev='';
	foreach($new_array as $string){
		$new_rev=$new_rev.strrev($string);
	}
	echo '<br /><br>Q11 : prints : '.$new_rev;
	
	echo '<br ><br>Q12 : String1 after removing tags : '.strip_tags($str1);
	
	echo '<br ><br>Q13 : Print the PHP word from string 1 by traversing it using string functions : <br>';
	question_13($str1);

	echo '<br><br>Q14 : length of string 1 : '.strlen($str1);
	echo '<br>length of string 2 : '.strlen($str2);

	$new_file=fopen("/var/www/new.txt","w");
	if (fwrite($new_file,$str1)!==false)
			echo '<br>Q15 : string 1 is written on new.txt';
	
	fclose($new_file);
	
	echo '<br><br>Q16 : all global variables : <br><pre>';
	echo '<br>GLOBALS : ';print_r($GLOBALS);
	
   	echo '<br>SERVER : ';
	print_r( $_SERVER);
  	echo '<br>GET : ';
	print_r( $_GET);
   	echo '<br>POST : ';
	print_r( $_POST);
   	echo '<br>FILES : ';
	print_r( $_FILES);
 	echo '<br>COOKIE : ';
	print_r( $_COOKIE);
	echo '<br>SESSION : ';
	print_r($_SESSION);
 	echo '<br>REQUEST : ';
	print_r($_REQUEST);
	echo '<br>ENV : ';
	print_r($_ENV);

	echo '</pre>';

	echo '<br><br>using header() : ';
	echo '<br>Q18 : click the link for redirection demo <br> <a href=redirection.php> redirection_demo</a>';
	
	echo '<br><br>Q19 : diffrence between date : ';
	$date1 = date_create();
	$date2 = date_create("30-jun-2013");
	$date_diff=date_diff($date1, $date2);
	echo date_format($date1, 'd-m-Y').' and '.date_format($date2, 'd-m-Y').' is ';
	echo $date_diff->format('%R%a days');

	 $date = date_create();
	date_add($date,new DateInterval('P20D'));
	echo '<br><br>Q20 : Adding 20 days to today\'s date : '.date_format($date, 'd-m-Y');
	
	echo '<br><br>Q21 : Printing date in array format : ';
	$date=date_parse(date("c"));
	echo '<pre>';
	print_r($date);
	echo '</pre>';
	
	echo '<br><br>Q22 : Array of specified size : ';
	echo '<pre>';
	$new_array=range(1,54,1);
	print_r($new_array);
	echo '</pre>';
	$new_array_split=array_chunk($new_array,4);
	echo '<br><br>Array is splited into '.count($new_array_split).' parts <br>';
	echo '<pre>';
	print_r($new_array_split);
	
	echo '</pre>';
?>
