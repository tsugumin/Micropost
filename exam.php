<?php
function showMsgBox(){
 $messages="This is your message.";
 $len=strlen($messages);
 $line="";
 $separator="+-".$line."-+".PHP_EOL;
 $textline="|".$messages."|".PHP_EOL;
 
for($i=1; $i<=$len; $i++){
 $line=$line+"-";
  }
  print $separator;
  print $textline;
  print $separator;
 }
 
showMsgBox(messages)
?>

