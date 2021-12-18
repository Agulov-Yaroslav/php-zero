<php

session_start();
session_destroy();
header(string: 'Location: index.php')
exit;
?>