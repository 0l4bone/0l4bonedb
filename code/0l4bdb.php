<?php
//$link =  mysql_connect('', '', '');
//if (!$link) {
//    die('0l4bdb c0nxn 3rr0r');
//}
//mysql_select_db("0l4bone",$link);
echo '<h2><font color="red">G3tt1ng 4cc3ss t0 0l4b0ne d4t4b4s3.... svcc3ss....</font></h2>';
$query=mysql_query("SELECT * FROM 0l4bone",$link);
while($row=mysql_fetch_row($query))
{
	$values= "id=$row[0] var=$row[1] value=$row[2]";
}
mysql_close($link);
?>
<html>
<title>0l4bOneDB</title>
<body bgcolor='#3c3c3c'>
<center><h2><font color='white'><?php echo $values; ?></font></h2></center>
</body>
</html>
