<?php
  require_once('nodeShared/access.php');

  $HTACCESS = Array();

  // EJEMPLO USANDO SHELL_EXEC -> https://github.com/formatcom/shell_exec
  $ROUTER = Array(
    'app'  => Array('^app(.*?)$', 'http://127.0.0.1:8000$1'),
    'socket' => Array('^socket.io(.*?)$', 'http://127.0.0.1:8000/socket.io$1')
  );

  $REDIRECT301 = Array(
    'google' => Array('^google/(.*?)$', 'https://google.com?q=$1'),
  );

  $EXCLUDE = Array('example',); //EJEMPLO CON APACHE, carpeta example usara apache

  writeHtaccess($HTACCESS, $ROUTER, $REDIRECT301, $EXCLUDE);
?>
