
<center>
<big>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
$output = shell_exec('/wake-server.sh');
#$output = shell_exec('ls -lart');
echo "<pre>$output</pre>";
echo"Please wait 5 sec";
header('Refresh: 5; url=http://192.168.1.128/index.php');
?>
</big>
</center>
