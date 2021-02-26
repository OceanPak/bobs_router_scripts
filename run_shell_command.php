<?php
$output = shell_exec("grep -rnw '/var/www' -e 'flag'");
echo "<pre>$output</pre>";
?>