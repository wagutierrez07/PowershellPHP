<?php

echo "Prueba de mezclar PHP con codigo Shell";
/*$comando = shell_exec('lsb_release -a');
echo "<pre>$comando</pre>";
*/
$comando=shell_exec('sh Shell/script.sh');
if (!$comando) {
    echo "<pre>Comando inexistente</pre>";
}else{
echo "<pre>$comando</pre>";
}
?>