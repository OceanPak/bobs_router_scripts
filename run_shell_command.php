<?php
$output = shell_exec("grep -rn '/var/www' -e '6784c533-769d9ce5-e3d48611-dfe2ffc6'");
echo "<pre>$output</pre>";
?>