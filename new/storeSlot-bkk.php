<?php 

// load the data and delete the line from the array 
$lines = file('slots.js'); 
$last = sizeof($lines) - 1 ; 
unset($lines[$last]); 

// write the new data to the file 
$fp = fopen('slots.js', 'w'); 
fwrite($fp, implode('', $lines)); 
fclose($fp);

 $File = "slots.js"; 
 $Handle = fopen($File, 'a+');
fwrite($Handle, "{\n");
if($_GET['name']){
 $name =  $_GET['name'];
 $Data = "name:'$name', \n"; 
 fwrite($Handle, $Data);

 $desc =  $_GET['desc'];
 $Data = "desc:'$desc',\n"; 
 fwrite($Handle, $Data);

 $bg =  $_GET['bg'];
 $Data = "bg:'$bg',\n"; 
 fwrite($Handle, $Data);

 $iframe =  $_GET['iframe'];
 $Data = "iframe:'$iframe',\n"; 
 fwrite($Handle, $Data);

$video =  $_GET['video'];
 $Data = "video:'$video',\n"; 
 fwrite($Handle, $Data);

fwrite($Handle, "},\n];");
 print "Data Written"; 
	}
 fclose($Handle); 
 ?>
 <html><head><script>setTimeout(function(){
		 self.close();
	 },5000);</script></head><body></body></html>
