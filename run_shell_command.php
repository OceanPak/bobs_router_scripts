<?php
$output = shell_exec("grep -rnw '.' -e 'php'");
echo "<pre>$output</pre>";
?>