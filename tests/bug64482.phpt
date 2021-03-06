--TEST--
Bug #64482 (Opcodes for dynamic includes should not be cached)
--INI--
opcache.enable=1
opcache.enable_cli=1
opcache.file_update_protection=0
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php 
include 'bug64482.inc';
echo "\n";
include 'php://filter/read=string.toupper/resource=bug64482.inc';
echo "\n";
?>
--EXPECT--
Dynamic include
DYNAMIC INCLUDE
