<?php

echo "<div align='center'><h1>BadGuy</h1></div>";


          $user=escapeshellcmd($_POST["login"]);
          $user2=preg_replace("/[^a-zA-Z0-9\s]/", "-", $user);
	  $senha=escapeshellcmd($_POST["pass"]);
          $senha2=preg_replace("/[^a-zA-Z0-9\s]/", "-", $senha);
          $out=shell_exec("sudo sh criar.sh $user2 $senha2");
echo "$out";

?>
