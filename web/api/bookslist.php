<?php
    	$con = mysql_connect("localhost","root", "qwerty");
if(!$con){
die ("Bazaga bog`lanishda xatolik: ". mysql_error());
}
mysql_select_db("audiobook", $con);
    $result = mysql_query("SELECT * FROM books");
while($row=mysql_fetch_assoc($result)){
$output[]=$row;
}
print (json_encode($output));

mysql_close($con);
?>
