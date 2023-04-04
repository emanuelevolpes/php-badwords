<?php
    echo $_GET['paragraph'];
    echo strlen($_GET['paragraph']);

   $badword = str_replace('selva', '...', $_GET['paragraph']);
   echo $badword;
   echo strlen($badword);
?>