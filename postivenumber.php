<?php
function display_form() {
  print"<form method=\"post\" action=\"$_SERVER[PHP_SELF]\">";
  print"Enter a positive number: <input type=\"int\" name=\"number\">";
  print"<input type=\"submit\" value=\"Submit number\">";
  print"</form>";
  return $_POST["number"];
}
$t = display_form();
$i = 0;
if ($t > "20"){
print "too big";
}
else if ($t < "1"){
print "too small";
}
else {
do
{
print $i;
print "<br>";
$i++;
}while ($i <= $t);
}
?>

