<?php

setcookie("login","",time()-3600);
setcookie("id","",time()-3600);
header("location:index.php");

?>