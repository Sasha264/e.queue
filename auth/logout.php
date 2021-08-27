<?php
  setcookie('target',"0", time()+1,"/");//перезаписываем куки со сроком действия 1 сек.
  header("Location: ../index.php");
?>
