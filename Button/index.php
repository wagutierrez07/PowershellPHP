<form action="" method="POST">
    <input type="submit" name='submit' value="Activar">
</form>

<?php 

if (isset($_POST['submit'])) {
    $comando = shell_exec('lsb_release -a');
    echo "<pre>$comando</pre>";
}

?>