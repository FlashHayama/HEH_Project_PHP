<?php
  if(!session_id())
  {
    setcookie('lang', 'fr', time() + 3600 * 24 * 325, null, null, false, true);
    session_start();
    session_regenerate_id(true);
  }
  header('Location: view/template.php?value=home');
?>